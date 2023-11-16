<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Relatives;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_year' => $this->faker->year,
            'psa_birthcert_no' => $this->faker->numerify('##########'),
            'lrn' => $this->faker->numerify('##########'),


            'last_name' => fake()->lastName,
            'first_name' => fake()->firstName,
            'middle_name' => fake()->lastName,
            'extension_name' => fake()->suffix,

            'birth_date' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'age' => fake()->numberBetween($min = 20, $max = 60),
            'gender' => fake()->randomElement($array = array ('Male','Female')),
            'indigenous_group' => $this->faker->word,
            'mother_tongue' => $this->faker->word,
            'religion' => $this->faker->word,
            'special_assistance_needs' => $this->faker->word,
            
            
            'house_number' => fake()->buildingNumber,
            'street' => fake()->streetName,
            'barangay' => fake()->citySuffix,
            'municipality' => fake()->city,
            'province' => fake()->state,
            'region' => fake()->state,

            
            'relatives_id' => function () {
                return Relatives::factory()->create()->id;
            },
            'household_4ps_id' => $this->faker->randomNumber(),

            
            'username' => $this->faker->lastName . '.' . $this->faker->firstName . '.' . now()->year,
            'password' => Hash::make('Student123'),
            'status' => '2',
            
        ];
    }
}
