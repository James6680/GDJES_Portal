<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // DB::table('teachers')->insert([
        //     'last_name' => 'Bonifacio',
        //     'first_name' => 'Andres',
        //     'middle_name' => 'Bonifacio',
        //     'extension_name' => 'Sr',
        //     'email' => 'bonifacioandres@email.com',
        //     'profile_picture' => 'https://www.gravatar.com/avatar/' . md5(strtolower(trim('bonifacioandres@email.com'))),
        //     'birth_date' => '1995-01-01',
        //     'age' => '28' ,
        //     'gender' => 'Male',
        //     'phone_number' => '123',
        //     'house_number' => '1',
        //     'street' => 'Mango',
        //     'barangay' => 'Malakas',
        //     'municipality' => 'Tondo',
        //     'province' => 'Manila',
        //     'region' =>'NCR',
        //     'facebook_link' => 'https://www.facebook.com/Bonifacio.Andres.2023',
        //     'username' => 'Bonifacio.Andres.2023',
        //     'password' => Hash::make('Teacher123'),
        //     // Add the rest of the fields here.
        // ]);
    
        Teacher::factory(70)->create();
    }
}