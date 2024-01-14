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
        $students = Student::where('id', '>=', 1)->where('id', '<=', 150)->get();

        foreach ($students as $student) {
            $class = Classes::where('id', $student->class_id)->first();
            $schoolYear = SchoolYears::where('id', $class->school_year_id)->first();

            // Create a new GradeSum record for each student, class, and school year
            $gradeSum = new GradeSum();
            $gradeSum->student_id = $student->id;
            $gradeSum->class_id = $class->id;
            $gradeSum->school_year_id = $schoolYear->id;
            $gradeSum->save();
        }
    }
}
