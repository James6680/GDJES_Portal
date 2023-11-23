<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Section;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $section = Section::where('id', $request->input('section_id'))->first();
        if($request->input('gradeLevel') != $section->grade_level_id){
            $enrollments = DB::table('enrollment')
            ->where('section_id', $section->id)
            ->get();

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
        
        ////IF EDITED THE GRADE_LEVEL_ID DELETE THE SECTIONS IN THE ENROLLMENTS AND THE CLASSES/

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
            }
        }
        return $request->input('student');
    }

    public function removeStudentSection(Request $request){
        // DB::table('enrollments'){

        // }
    }
}