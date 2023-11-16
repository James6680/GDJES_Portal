<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Relatives>
 */
class RelativesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mother_id' => fake()->numberBetween(1, 100), 
            'father_id' => fake()->numberBetween(1, 100), 
            'guardian_id' => fake()->numberBetween(1, 100), 
        ];
    }
}
