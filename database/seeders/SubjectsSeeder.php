<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $subjects = [
            [1, 'Checklist'],
            [2, 'Filipino', 'English', 'Mathematics', 'Makabansa', 'GMRC'],
            [3, 'Filipino', 'English', 'Math', 'Makabansa', 'GMRC'],
            [4, 'Filipino', 'English', 'Math', 'Makabansa', 'GMRC', 'Science'],
            [5, 'Filipino', 'English', 'Math', 'Science', 'Araling Panlipunan', 'Technology and Livelihood Education', 'GMRC', 'MAPEH'],
            [6, 'Filipino', 'English', 'Math', 'Science', 'Araling Panlipunan', 'Technology and Livelihood Education', 'GMRC', 'MAPEH'],
            [7, 'Filipino', 'English', 'Math', 'Science', 'Araling Panlipunan', 'Technology and Livelihood Education', 'GMRC', 'MAPEH'],
        ];
        
        foreach ($subjects as $grade) {
            $gradeLevel = $grade[0];
            unset($grade[0]); // Remove the grade level from the array
        
            foreach ($grade as $subject) {
                DB::table('subjects')->insert([
                    'subject_name' => $subject,
                    'grade_level_id' => $gradeLevel
                ]);
            }
        }
    }
}
