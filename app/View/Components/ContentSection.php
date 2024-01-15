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
        $IDValue = request('gradeLevelId');
        $studentId  = Auth::guard('students')->id();
        $sy = DB::table('enrollment')
                ->where('student_id', $studentId)
                ->where('grade_level_id', $IDValue)
                ->pluck('school_year_id');


        if($sy->count() == 0 && $IDValue == null){
            $sy = DB::table('school_years')
            ->where('active', 1)
            ->pluck('id');
        }else if($sy->count() == 0 && $IDValue != null){
            $sy = 0;
        }


        // Assuming you want the first GradeSum record, you might want to add a more specific condition
        $gradeSums = GradeSum::where('student_id', $studentId)
                                ->where('grade_sum.school_year_id', $sy)
                                ->join('school_years','school_years.id','school_year_id')
                                ->with(['class.teacher', 'class.subject'])
                                ->get();
        $gwas = Gwa::where('student_id', $studentId)
                    ->where('school_year_id',$sy)
                    ->join('school_years','school_years.id','gwas.school_year_id')
                    ->first();
        if($gwas == null){
            $gwas = new Gwa();
        }

        return view('components.content-section',['gradeSums' => $gradeSums, 'gwas' => $gwas]);
    }
}
