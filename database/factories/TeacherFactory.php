<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => fake()->lastName,
            'first_name' => fake()->firstName,
            'middle_name' => fake()->lastName,
            'extension_name' => fake()->suffix,
            'email' => fake()->unique()->safeEmail,
            'profile_picture' => 'https://www.gravatar.com/avatar/' . md5(strtolower(trim(fake()->unique()->safeEmail))),
            'birth_date' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'age' => fake()->numberBetween($min = 20, $max = 60),
            'gender' => fake()->randomElement($array = array ('Male','Female')),
            'phone_number' => fake()->phoneNumber,
            'house_number' => fake()->buildingNumber,
            'street' => fake()->streetName,
            'barangay' => fake()->citySuffix,
            'municipality' => fake()->city,
            'province' => fake()->state,
            'region' => fake()->state,
            'facebook_link' => 'https://www.facebook.com/' . fake()->userName,
            'username' => $this->faker->lastName . '.' . $this->faker->firstName . '.' . now()->year,
            'password' => Hash::make('teacher123'),
            'status' => '1',

            //'remember_token' => Str::random(10),
        ];
    }
}
