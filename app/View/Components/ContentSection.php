<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use App\Http\Controllers\Student;
use Illuminate\Contracts\View\View;
use App\Models\GradingSheet;
use App\Models\Classes;
use App\Models\GradeLevel;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class ContentSection extends Component
{
    public $gradeLevels;
    public $subjects;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Fetch data from the database
        // $gradingSheets = GradingSheet::with('class')->get();
        // $this->gradeLevels = GradeLevel::whereIn('id', $gradingSheets->pluck('class.grade_level_id')->unique())
        //     ->pluck('grade_level', 'id');
        $this->gradeLevels = GradeLevel::pluck('grade_level', 'id');
        $this->gradeLevels = $this->gradeLevels->except([1, 8]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content-section');
    }   
}