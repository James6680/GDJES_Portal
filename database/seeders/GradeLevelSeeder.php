<?php

namespace Database\Seeders;

use App\Models\GradeLevel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GradeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GradeLevel::unguard();
        $gradeLevelArray = ['Kinder', 'Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6', 'ALS'];

        for ($i = 0; $i < 8; $i++) {
            GradeLevel::create([
                'grade_level' =>  $gradeLevelArray[$i],
            ]);
        }
    }
}
