<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Classes;
use App\Models\SchoolYears;
use App\Models\GradeSum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();

        foreach($students as $student){
            $enrollment = DB::table('enrollment')->where('student_id', $student->id)->first(); 
            $subjects = DB::table('subjects')->where('grade_level_id', $enrollment->grade_level_id)->get();
            // $subjects = Subject::where('grade_level_id', $enrollment->grade_level_id);
            foreach($subjects as $subj){
                    $GradeSum = new GradeSum();
                    $GradeSum->student_id = $student->id;
                    $GradeSum->school_year_id = $enrollment->school_year_id;
                    $GradeSum->save();
            }
        }
    }
}
