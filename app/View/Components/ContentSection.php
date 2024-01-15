<?php

namespace App\View\Components;

use Closure;
use App\Models\Gwa;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\GradeSum;
use App\Models\GradeLevel;
use App\Models\GradingSheet;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

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
        $gradingSheets = GradingSheet::with('class')->get();
        $this->gradeLevels = GradeLevel::whereIn('id', $gradingSheets->pluck('class.grade_level_id')->unique())
            ->pluck('grade_level', 'id');
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        

        $studentId  = Auth::guard('students')->id();
        
        // Assuming you want the first GradeSum record, you might want to add a more specific condition
        $gradeSums = GradeSum::where('student_id', $studentId)
                                ->where('school_year_id', 1)
                                ->with(['class.teacher', 'class.subject'])
                                ->get();
        $gwas = Gwa::where('student_id', $studentId)
                    ->where('school_year_id', 1)
                    ->first();
        

        return view('components.content-section',['gradeSums' => $gradeSums, 'gwas' => $gwas]);
    }
}
