<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Father>
 */
class FatherFactory extends Factory
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
