<?php

namespace Database\Factories;

use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mother>
 */
class MotherFactory extends Factory
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
            'phone_number' => fake()->unique()->regexify('/^639[0-9]{8}$/'),            
            'email_address' => fake()->unique()->safeEmail,
        ];
    }
}
