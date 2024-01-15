<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use App\Http\Controllers\Student;
use Illuminate\Contracts\View\View;
use App\Models\GradingSheet;
use App\Models\Gwa;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\GradeSum;
use App\Models\GradeLevel;
use Illuminate\Support\Facades\DB;
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
        

        $studentId  = Auth::guard('students')->id();
        
        // Assuming you want the first GradeSum record, you might want to add a more specific condition
        $gradeSums = GradeSum::where('student_id', $studentId)
                                ->join('school_years','school_years.id','grade_sum.school_year_id')
                                ->where('school_years.active',1)
                                ->with(['class.teacher', 'class.subject'])
                                ->get();
        $gwas = Gwa::where('student_id', $studentId)
                    ->join('school_years','school_years.id','gwas.school_year_id')
                    ->where('school_years.active',1)
                    ->first();
        if($gwas == null){
            $gwas = new Gwa();
        }

        return view('components.content-section',['gradeSums' => $gradeSums, 'gwas' => $gwas]);
    }
}
