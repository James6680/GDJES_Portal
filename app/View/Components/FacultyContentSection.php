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
            return $combination['grade_level'] . ': ' . $combination['subject_name'] . ' (' . $combination['section_name'] . ')';
        });
    
        // Get quarters
        $quarters = GradingSheet::select('quarter')
            ->join('classes', 'grading_sheet.class_id', '=', 'classes.id')
            ->whereIn('classes.id', $classCombinations->pluck('class_id'))
            ->whereIn('classes.section_id', $classCombinations->pluck('section_id'))
            ->whereIn('classes.teacher_id', $classCombinations->pluck('teacher_id'))
            ->whereIn('classes.subject_id', $classCombinations->pluck('subject_id'))
            ->whereIn('classes.grade_level_id', $classCombinations->pluck('grade_level_id'))
            ->whereIn('classes.school_year_id', $classCombinations->pluck('school_year_id'))
            ->distinct()
            ->pluck('quarter');
    
        // Map quarter values to text
        $quarterTextMapping = [
            1 => '1st Quarter',
            2 => '2nd Quarter',
            3 => '3rd Quarter',
            4 => '4th Quarter',
        ];
    
        // Fetch all highest possible scores
        //$highestPossibleScore = HighestPossibleScore::all();
        // Fetch highest possible scores based on the selected criteria
        $highestPossibleScore = HighestPossibleScore::whereIn('class_id', $classCombinations->pluck('class_id'))
        ->whereIn('quarter', $quarters)
        ->select('id', 'ww1', 'ww2', 'ww3', 'ww4', 'ww5', 'ww6', 'ww7', 'ww8', 'ww9', 'ww10',
                'hps_ww_total', 'hps_ww_ps', 'ww_weighted_score', 'pt1', 'pt2', 'pt3', 
                'pt4', 'pt5', 'pt6', 'pt7', 'pt8', 'pt9', 'pt10', 'hps_pt_total', 
                'hps_pt_ps', 'pp_weighted_score', 'qa10', 'hps_qa_ps', 'qa_weighted_score',
                'initial_grade', 'quarterly_grade'
        )
        ->first();


        $quarters = $quarters->map(function ($quarter) use ($quarterTextMapping) {
            return $quarterTextMapping[$quarter] ?? $quarter;
        });
    
        
            
        // Pass data to the view
        return view('components.faculty-content-section', compact('dropdownOptions', 'quarters', 'highestPossibleScore'));
    }
     else {
        return view('components.faculty-content-section');
    }
}

}

