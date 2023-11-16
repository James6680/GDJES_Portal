<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Relatives;



class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
     DB::table('students')->insert([
          
       
            'school_year' => '2023',
            'psa_birthcert_no' => '012345',
            'lrn' => '012345',

            'last_name' => 'Rizal',
            'first_name' => 'Jose',
            'middle_name' => 'Protacio',
            'extension_name' => 'Sr',

            'birth_date' => '2018-01-01',
            'age' => '5' ,
            'gender' => 'Male',
            'indigenous_group' => 'Tagalog',
            'mother_tongue' => 'Filipino',
            'religion' => 'Christian',
            'special_assistance_needs' => 'none',

            'house_number' => '1',
            'street' => 'Mango',
            'barangay' => 'Malakas',
            'municipality' => 'Tondo',
            'province' => 'Manila',
            'region' =>'NCR',
            'relatives_id' => '3',
            'household_4ps_id' => '1',

            'username' => 'Rizal.Jose.2023',
            'password' => Hash::make('Student123'),

            'status' => '2',
            // Add the rest of the fields here.
        ]);
        
        
        /*
        Student::factory(1)->create();
        */
    }
}
