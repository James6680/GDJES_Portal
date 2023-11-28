<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enrollmentStatus = ['temporarily enrolled', 'completed', 'dropped'];
        for($i = 1; $i <= 150; $i++){
            DB::table('enrollment')
            ->insert(['student_id' => $i, 
            'grade_level_id' => mt_rand(1, 7), 
            'school_year_id' => 1, 
            'learning_info_id' => $i,
            'enrollment_status' => $enrollmentStatus[mt_rand(0, 2)],
        ]);
        }
        //
    }
}
