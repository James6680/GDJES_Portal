<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DocumentRequirements;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumentRequirementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = new DateTime('2024-01-01');
        for($i = 1; $i <= 50; $i++){
            DB::table('document_requirements')
                ->insert([
                'student_id' => $i,
                'requirements' => '["Birth Certificate"]',
                'checklist' => '["0"]',
                'submission_deadline' => $date->format('Y-m-d'),
            ]);
        }
    }
}
