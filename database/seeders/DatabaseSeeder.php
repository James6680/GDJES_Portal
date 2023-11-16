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
         \App\Models\Admin::factory(1)->create();
         \App\Models\Teacher::factory(5)->create();
         \App\Models\Student::factory(5)->create();
         \App\Models\Mother::factory(1)->create();
         \App\Models\Father::factory(1)->create();
         \App\Models\Relatives::factory(1)->create();
         \App\Models\Guardian::factory(1)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $gradeLevelArray = ['Kinder', 'Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6', 'ALS'];

        for ($i = 0; $i < 8; $i++) {
            GradeLevel::create([
                'grade_level' =>  $gradeLevelArray[$i],
            ]);
        }
    }
}
