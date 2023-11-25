<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Relatives;
use App\Models\GradeLevel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ////RELATIVES
        $this->call(FatherSeeder::class); // Make sure MothersSeeder is executed first
        $this->call(GuardianSeeder::class); // Make sure MothersSeeder is executed first
        $this->call(MotherSeeder::class); // Make sure MothersSeeder is executed first
        Relatives::factory()->count(100)->create();    

        $this->call(SchoolYearSeeder::class);
        $this->call(GradeLevelSeeder::class);
        $this->call(SubjectsSeeder::class);
        $this->call(StudentSeeder::class);
        
        $this->call(DocumentRequirementsSeeder::class);
        $this->call(LearningInfoSeeder::class);
        $this->call(EnrollmentSeeder::class);

        $this->call(TeacherSeeder::class);
        $this->call(AdminSeeder::class);

        $this->call(TransmutationSeeder::class);

        
    }
}
