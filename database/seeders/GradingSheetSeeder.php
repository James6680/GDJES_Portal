<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Enrollment;
use App\Models\GradingSheet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GradingSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $students = Student::where('id', '>=', 1)->where('id', '<=', 150)->get();

        foreach($students as $student){
            $enrollment = DB::table('enrollment')->where('student_id', $student->id)->first(); 
            $subjects = DB::table('subjects')->where('grade_level_id', $enrollment->grade_level_id)->get();
            // $subjects = Subject::where('grade_level_id', $enrollment->grade_level_id);
            foreach($subjects as $subj){
                for($i=1; $i<=4; $i++){
                    $gradingSheet = new GradingSheet();
                    $gradingSheet->student_id = $student->id;
                    $gradingSheet->quarter = $i;
                    $gradingSheet->school_year_id = 1;
                    $gradingSheet->save();
                }
            }
        }
    }
}
