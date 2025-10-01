<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'title' => fake()->jobTitle(), // [cite: 94]
        'salary' => fake()->randomElement(['$50,000 USD', '$90,000 USD', '$150,000 USD']), // [cite: 95, 96]
        'employer_id' => \App\Models\Employer::factory(), // Creates a new employer for this job [cite: 97]
    ];
}
}
