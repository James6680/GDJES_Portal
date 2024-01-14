<?php

namespace App\Http\Controllers;

use App\Models\Gwa;
use App\Models\Classes;
use App\Models\Section;
use App\Models\GradeSum;
use App\Models\Enrollment;
use App\Models\SchoolYears;
use App\Models\GradingSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HighestPossibleScore;

class SectionController extends Controller
{
    public function assignTeacher(Request $request){
        $inputNames = array_diff(array_slice($request->keys(), 2), ['token', 'method']);
        $sectionId = null;
        $sectionTeacher = null;
        foreach($inputNames as $input){
            $variableId = null;
            if(strpos($input, "adviser") !== false){
                $variableId = substr_replace($input, '', 0, strlen("adviser-"));
                $sectionId = $variableId;
                $sectionTeacher = $request->input($input);
                DB::table('sections')
                ->where('id', $variableId)
                ->update(['adviser_id' => $request->input($input)]);
            }else if(strpos($input, "subject") !== false){
                $variableId = substr_replace($input, '', 0, strlen("subject-"));
                DB::table('classes')
                ->where('id', $variableId)
                ->update(['teacher_id' => $request->input($input)]);
            }
        }
        return ['section_id' => $sectionId, 'teacher_id' => $sectionTeacher];
    }

    public function addSection(Request $request){
        $validatedData = $request->validate([
            "sectionName" => 'required|max:20',
            "sectionSlots" => 'required|numeric|min:15|max:65',
            'gradeLevel' => 'required',
        ]);
        
        if($request->input('gradeLevel') != ''){
            $existingSection = Section::where('section_name', $request->input('sectionName'))
            ->where('grade_level_id', $request->input('gradeLevel'))
            ->where('school_year_id', $request->input('schoolYear'))
            ->first();
    
            if ($existingSection) {
                return response()->json([
                    'errors' => [
                        'sectionName' => ['Section name already exists in this grade level.'],
                    ],
                ], 422);
            }
        }

        $section = new Section();
        $section->section_name = $request->input('sectionName');
        $section->section_slot = $request->input('sectionSlots');    
        $section->grade_level_id = $request->input('gradeLevel');
        $section->school_year_id = $request->input('schoolYear');              
        $section->save();
        //////////CREATE THE CLASSES/////////
        $subjects = DB::table('subjects')
        ->where('grade_level_id', $request->input('gradeLevel'))
        ->pluck('id');

        foreach($subjects as $subject){
            $class = new Classes();
            $class->section_id = $section->id;
            $class->subject_id = $subject;
            $class->grade_level_id = $request->input('gradeLevel');
            $class->school_year_id = $request->input('schoolYear');
            $class->save();
            
            for($i = 1; $i <= 4; $i++){
                $highestPossibleScore = new HighestPossibleScore();
                $highestPossibleScore->school_year_id = $request->input('schoolYear');
                $highestPossibleScore->class_id = $class->id;
                $highestPossibleScore->quarter = $i;
                $highestPossibleScore->save();
            }
        }
    }

    public function editSection(Request $request){
        $validatedData = $request->validate([
            "sectionName" => 'required',
            "sectionSlots" => 'required|numeric|min:15|max:65',
            'gradeLevel' => 'required',
        ]);
        
        if($request->input('gradeLevel') != ''){ 
            $existingSection = Section::where('section_name', $request->input('sectionName'))
            ->where('grade_level_id', $request->input('gradeLevel'))
            ->where('school_year_id', $request->input('schoolYear'))
            ->first();    
            if ($existingSection) {
                if($existingSection->section_slot != $request->input('sectionSlots')){
                    $existingSection->section_slot = $request->input('sectionSlots');
                    $existingSection->save();
                    ///////////DO ANOTHER IF HERE FOR CHECKING THE AVAILABLE SLOTS LATER
                }
                    return response()->json([
                        'errors' => [
                            'sectionName' => ['Section name already exists in this grade level.'],
                        ],
                    ], 422);
            }
        }
        
        ////IF EDITED THE GRADE_LEVEL_ID DELETE THE SECTIONS IN THE ENROLLMENTS AND THE CLASSES/
        $section = Section::where('id', $request->input('section_id'))->first();
        if($request->input('gradeLevel') != $section->grade_level_id){
            $enrollments = DB::table('enrollment')
            ->where('section_id', $section->id)
            ->get();

            HighestPossibleScore::join('classes', 'classes.id', '=', 'highest_possible_scores.class_id')
            ->where('highest_possible_scores.school_year_id', $request->input('schoolYear'))
            ->where('classes.section_id',  $section->id)
            ->delete();

            DB::table('classes')
            ->where('section_id', $section->id)
            ->delete();

            $subjects = DB::table('subjects')
            ->where('grade_level_id', $request->input('gradeLevel'))
            ->pluck('id');


            foreach($subjects as $subject){
                $class = new Classes();
                $class->section_id = $section->id;
                $class->subject_id = $subject;
                $class->grade_level_id = $request->input('gradeLevel');
                $class->school_year_id = $request->input('schoolYear');
                $class->save();

                for($i = 1; $i <= 4; $i++){
                    $highestPossibleScore = new HighestPossibleScore();
                    $highestPossibleScore->school_year_id = $request->input('schoolYear');
                    $highestPossibleScore->class_id = $class->id;
                    $highestPossibleScore->quarter = $i;
                    $highestPossibleScore->save();
                }
            }

            if ($enrollments) {
                foreach ($enrollments as $enrollment) {
                    // Retrieve the enrollment record from the database
                    $enrollmentModel = Enrollment::find($enrollment->id);
        
                    // Update the attributes of the enrollment model
                    $enrollmentModel->student_id = $enrollment->student_id; // Assuming student_id is an attribute of the Enrollment model
                    $enrollmentModel->section_id = null;
        
                    // Save the updated enrollment model
                    $enrollmentModel->save();
                }
            }
        }

        $section->section_name = $request->input('sectionName');
        $section->section_slot = $request->input('sectionSlots');    
        $section->grade_level_id = $request->input('gradeLevel');
        $section->school_year_id = $request->input('schoolYear');              
        $section->save();
    }

    public function assignStudentSection(Request $request){
        if($request->input('student')){
            foreach($request->input('student') as $student){
                DB::Table('enrollment')
                    ->where('student_id', $student)
                    ->where('school_year_id', $request->input('school_year'))
                    ->update(['section_id' => $request->input('section_id')]);

                    // Retrieve the student based on the student_id
                    $currentStudent = DB::table('students')->where('id', $student)->first();

                    // Check if the student is found
                    if ($currentStudent) {
                        // Fetch the classes for the student
                        $classes = Classes::where('section_id', $request->input('section_id'))->get();

                        // Loop over the classes and create GradeSum records
                        foreach ($classes as $class) {
                            // Fetch the school year for the class
                            $schoolYear = null;

                            // Check if the relationship exists
                            if (method_exists($class, 'schoolYear')) {
                                $schoolYear = $class->schoolYear;
                            } else {
                                $schoolYear = SchoolYears::find($class->school_year_id);
                            }

                            // Check if $schoolYear is not null before proceeding
                            if ($schoolYear) {
                                // Check if GradeSum already exists for the student and class
                                $existingGradeSum = GradeSum::where('student_id', $currentStudent->id)
                                    ->where('class_id', $class->id)
                                    ->where('school_year_id', $schoolYear->id)
                                    ->first();

                                if (!$existingGradeSum) {
                                    // Create a new GradeSum record for the student
                                    $gradeSum = new GradeSum();
                                    $gradeSum->student_id = $currentStudent->id;
                                    $gradeSum->class_id = $class->id;
                                    $gradeSum->school_year_id = $schoolYear->id;
                                    $gradeSum->save();
                                }
                            }
                        }

                        // Check if Gwa record already exists for the student in the grade level, section, and school year
                        $existingGwa = Gwa::where('student_id', $currentStudent->id)
                            ->where('grade_level_id', $class->grade_level_id)
                            ->where('section_id', $class->section_id)
                            ->where('school_year_id', $schoolYear->id)
                            ->first();

                        if (!$existingGwa) {
                            // Create a new Gwa record for the student
                            $gwa = new Gwa();
                            $gwa->student_id = $currentStudent->id;
                            $gwa->grade_level_id = $class->grade_level_id;
                            $gwa->section_id = $class->section_id;
                            $gwa->school_year_id = $schoolYear->id;
                            $gwa->save();
                        }
                    }

                ////////////
                $classes = DB::table('classes')
                            ->where('section_id', $request->input('section_id'))
                            ->pluck('id');

                $gradingSheets = GradingSheet::
                    where('student_id',  $student)
                    ->where('school_year_id', $request->input('school_year'))
                    ->orderBy('quarter', 'asc')
                    ->get();

                $highestPossibleScores = HighestPossibleScore::whereIn('class_id', $classes)
                ->orderBy('quarter', 'asc')
                ->pluck('id');

                for($i = 1; $i <= 4; $i++){
                    foreach($classes as $class){
                        $gs = $gradingSheets->shift();
                        $hps = $highestPossibleScores->shift();
                        $gs->class_id = $class;
                        $gs->highest_possible_score_id = $hps;
                        $gs->save();
                    }
                }



            }
        }
        return $request->input('student');
    }

    public function removeStudentSection(Request $request) {
        $studentId = $request->input('student_id');
        DB::table('enrollment')
          ->where('student_id', $studentId)
          ->update(['section_id' => null]);

        DB::table('grading_sheet')
            ->where('student_id', $request->input('student_id'))
            ->where('school_year_id', $request->input('school_year_id'))
            ->update(['class_id' => null, 'highest_possible_score_id' => null]);

            // Find and delete the GradeSum record for the student
            GradeSum::where('student_id', $studentId)
            ->where('school_year_id', $request->input('school_year_id'))
            ->delete();

             // Find and delete the Gwa record for the student
            Gwa::where('student_id', $studentId)
            ->where('school_year_id', $request->input('school_year_id'))
            ->delete();
      }
}