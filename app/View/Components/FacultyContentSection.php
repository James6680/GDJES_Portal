<?php

namespace App\View\Components;

use Closure;
use App\Models\Gwa;
use App\Models\Classes;
use App\Models\Section;
use App\Models\GradeSum;
use App\Models\GradingSheet;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Models\HighestPossibleScore;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HighestPossibleScoreController;


class FacultyContentSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
{
    if (request()->is('faculty.grades')) {
        // Get unique combinations of section, subject, grade level from Classes
        $classCombinations = Classes::select(
            'grade_levels.grade_level',
            'subjects.subject_name',
            'sections.section_name',
            'classes.id as class_id',
            'classes.section_id',
            'classes.teacher_id',
            'classes.subject_id',
            'classes.grade_level_id',
            'classes.school_year_id',
            'school_years.school_year' //can be deleted
        )
        ->join('grade_levels', 'classes.grade_level_id', '=', 'grade_levels.id')
        ->join('subjects', 'classes.subject_id', '=', 'subjects.id')
        ->join('sections', 'classes.section_id', '=', 'sections.id')
        ->join('school_years', 'school_years.id', '=', 'classes.school_year_id')
        ->join('teachers', 'teachers.id', '=', 'classes.teacher_id') // Join teachers table to get teacher's name
        ->where('school_years.active', 1)
       ->where('classes.teacher_id', '=', Auth::guard('teachers')->user()->id) 
        ->distinct()
        ->get();


        // Transform the $classCombinations for dropdown options
        $dropdownOptions = $classCombinations->map(function ($combination) {
            return [
                'id' => $combination['class_id'], // Include the class ID as the value
                'name' => $combination['grade_level'] . ': ' . $combination['subject_name'] . ' (' . $combination['section_name'] . ')' // Combine grade level, subject name, and section name for the label
            ];
        });
    
        // Get quarters
        // Map quarter values to text
        $quarterTextMapping = [
            1 => '1st Quarter',
            2 => '2nd Quarter',
            3 => '3rd Quarter',
            4 => '4th Quarter',
        ];

        $quarters = collect([
            1,
            2,
            3,
            4,
        ]);


        $quarterValue = null;
        $class_idValue = null;
        $quarterValue =request('quarter');
        $class_idValue = request('class_id');
    
        // Fetch all highest possible scores
        $gradingSheets = GradingSheet::all();
        $highestPossibleScore = HighestPossibleScore::all();
        // Fetch highest possible scores based on the selected criteria
        if($quarterValue != null && $class_idValue != null){
            $highestPossibleScore = HighestPossibleScore::where('class_id', $class_idValue )
            ->where('quarter', $quarterValue)
            ->get();

            $gradingSheets = GradingSheet::join('students', 'grading_sheet.student_id', '=', 'students.id')
            ->where('grading_sheet.class_id', $class_idValue)
            ->where('grading_sheet.quarter', $quarterValue)
            ->select(
                'grading_sheet.*', 
                'students.last_name', 
                'students.first_name', 
                'students.middle_name'
            )
            ->get();
            
        }else{
            $highestPossibleScore = null;
            $gradingSheets = collect(); // Initialize an empty collection if criteria are not set
        }
        $quarters = $quarters->map(function ($quarter) use ($quarterTextMapping) {
          $quarterText = $quarterTextMapping[$quarter] ?? $quarter;
          $quarterNumber = $quarter; // Assuming $quarter represents the quarter number
          return ['text' => $quarterText, 'number' => $quarterNumber];
        });

        

        if($class_idValue != null){
                // Fetch the required data from the GradeSum table and related tables
                $gradeSums = GradeSum::with('student', 'class', 'schoolYear')
                ->where('class_id', $class_idValue) // Filter by selected class_id
                ->get();    

                        // Transform the $gradeSums for use in the view
        $gradeSumData = $gradeSums->map(function ($gradeSum) {
            return [
                'id' => $gradeSum->id,
                'student_name' => $gradeSum->student->last_name . ', ' . $gradeSum->student->first_name . ' ' . $gradeSum->student->middle_name,
                'grade_q1' => $gradeSum->grade_q1,
                'grade_q2' => $gradeSum->grade_q2,
                'grade_q3' => $gradeSum->grade_q3,
                'grade_q4' => $gradeSum->grade_q4,
                'average' => $gradeSum->average,
                'descriptor' =>$gradeSum->descriptor,
                'remarks' => $gradeSum->remarks,
                
            ];
            });

        }else{
            $gradeSums = new GradeSum;
            $gradeSumData = [];
        }


        // Get the teacher ID of the currently logged-in teacher
        $teacherId = Auth::guard('teachers')->user()->id;

        // Fetch all students from the gwa table with similar section_id and teacher_id
        $students = Gwa::with('student', 'gradeLevel', 'section', 'schoolYears')
        ->join('school_years', 'school_years.id', '=', 'gwas.school_year_id')
        ->where('school_years.active', 1)
        ->whereHas('section', function ($query) use ($teacherId) {
            $query->where('adviser_id', '=', $teacherId);
        })->get();
    
        

        // Transform the $students for use in the view
        $studentData = $students->map(function ($student) {
            return [
                'id' => $student->id,
                'school_year_id' => $student->school_year_id,
                'grade_level_id' => $student->gradeLevel->id,
                'section_id' => $student->section->id,
                'student_name' => $student->student->last_name . ', ' . $student->student->first_name . ' ' . $student->student->middle_name,
                'gwa' => $student->gwa,
                'remarks' => $student->remarks,
                'descriptors' => $student->descriptors,
                'status' => $student->status,
                'status_no' => $student->status_no,
            ];
        });


        // Get the teacher ID of the currently logged-in teacher
        $teacherId = Auth::guard('teachers')->user()->id;

        // Fetch the required data from the Sections table
        $sectionData = Section::with('gradeLevel')
            ->where('adviser_id', $teacherId)
            ->where('school_year_id', 1)
            ->get();

        // Transform the $sectionData for use in the view
        $sectionOptions = $sectionData->map(function ($section) {
            return [
                'grade_level' => $section->gradeLevel->grade_level,
                'section_name' => $section->section_name,
            ];
        });

        // Pass data to the view
        return view('components.faculty-content-section', compact('gradingSheets','quarterValue', 'class_idValue','dropdownOptions', 'classCombinations', 'quarters', 'highestPossibleScore', 'gradeSumData', 'studentData','sectionOptions'));
    }
     else {
        return view('components.faculty-content-section');
    }
}

}

