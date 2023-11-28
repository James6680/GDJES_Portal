<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\HighestPossibleScoreController;
use App\Models\HighestPossibleScore;
use App\Models\Classes;
use App\Models\GradingSheet;


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
        $gradingSheets = null;
        $highestPossibleScore = HighestPossibleScore::all();
        // Fetch highest possible scores based on the selected criteria
        if($quarterValue != null && $class_idValue != null){
            $highestPossibleScore = HighestPossibleScore::where('class_id', $class_idValue )
            ->where('quarter', $quarterValue)
            ->get();

            $gradingSheets = GradingSheet::where('class_id', $class_idValue )
            ->where('quarter', $quarterValue)
            ->get();
        }else{
            $highestPossibleScore = null;
        }

        // Fetch grading sheets based on the selected criteria
        if ($quarterValue !== null && $class_idValue !== null) {
            $gradingSheets = GradingSheet::where('class_id', $class_idValue)
                ->where('quarter', $quarterValue)
                ->with('student') 
                ->get();
        } else {
            $gradingSheets = collect(); // Initialize an empty collection if criteria are not set
        }

        // Check if $gradingSheets is not empty before using sortBy
        if (!$gradingSheets->isEmpty()) {
            // sortBy student last name
            $gradingSheets = $gradingSheets->sortBy(function ($gradingSheet) {
                return $gradingSheet->student->last_name;
            });
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

