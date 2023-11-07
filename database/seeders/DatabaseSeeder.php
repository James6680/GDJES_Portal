<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\GradeLevel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // $gradeLevelArray = ['Kinder', 'Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6', 'ALS'];

        // for ($i = 0; $i < 8; $i++) {
        //     GradeLevel::create([
        //         'grade_level' =>  $gradeLevelArray[$i],
        //     ]);
        // }

        // /////////////FIRSTQUARTER//////////////////////////
        



        for ($i = 0; $i < 1000; $i++) {
                \App\Models\GradingSheet::create([
                    'class_id' => rand(1, 100),
                    'student_id' => $i,
                    'highest_possible_score_id' => rand(10, 20),
                    'quarter' => 1,                 
                    'ww1' => rand(10, 20),
                    'ww2' => rand(10, 20),
                    'ww3' => rand(10, 20),
                    'ww4' => rand(10, 20),
                    'ww5' => rand(10, 20),
                ]);
        }
    }
}
