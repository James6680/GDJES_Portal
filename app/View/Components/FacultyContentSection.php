<?php

namespace App\View\Components;

use Closure;
use App\Models\Classes;
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
        )
        ->join('grade_levels', 'classes.grade_level_id', '=', 'grade_levels.id')
        ->join('subjects', 'classes.subject_id', '=', 'subjects.id')
        ->join('sections', 'classes.section_id', '=', 'sections.id')
        ->join('school_years', 'school_years.id', '=', 'classes.school_year_id')
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

            
        // Pass data to the view
        return view('components.faculty-content-section', compact('gradingSheets','quarterValue', 'class_idValue','dropdownOptions', 'classCombinations', 'quarters', 'highestPossibleScore'));
    }
     else {
        return view('components.faculty-content-section');
    }
}

}

