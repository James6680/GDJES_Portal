<?php

namespace Database\Seeders;

use App\Models\LearningInfo;
use Illuminate\Database\Seeder;
use App\Models\DocumentRequirements;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LearningInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 50; $i++){
            LearningInfo::create([
                'distance_learning' => "Online",
                'may_sariling_tablet_ang_bata' => 0,
                'may_computer_sa_bahay' => 1,
                'walang_sariling_gadget_ang_bata' => 1,
                'may_tv_sa_bahay' => 0,
                'may_internet_sa_bahay' => 1,
                'mobile_data_lang_ang_gamit' => 0,
            ]);
        }
    }
}
