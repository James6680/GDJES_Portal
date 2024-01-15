<?php

namespace Database\Seeders;

use App\Models\Gwa;
use App\Models\Enrollment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class gwaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Enrollments = Enrollment::all();

        foreach($Enrollments as $Enrollment){
            // $subjects = Subject::where('grade_level_id', $enrollment->grade_level_id);
                    $Gwa = new Gwa();
                    $Gwa->student_id = $Enrollment->student_id;
                    $Gwa->section_id = $Enrollment->section_id;
                    $Gwa->grade_level_id = $Enrollment->grade_level_id;
                    $Gwa->school_year_id = $Enrollment->school_year_id;
                    $Gwa->save();
        }
    }
}
