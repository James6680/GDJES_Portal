<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Relatives;

use App\Models\Mothers;
use App\Models\Fathers;
use App\Models\Guardians;

class RelativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(FatherSeeder::class); // Make sure MothersSeeder is executed first
        $this->call(GuardianSeeder::class); // Make sure MothersSeeder is executed first
        $this->call(MotherSeeder::class); // Make sure MothersSeeder is executed first
        Relatives::factory()->count(100)->create();    
    }
}
