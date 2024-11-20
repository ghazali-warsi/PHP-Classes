<?php

namespace Database\Factories;

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
            "Name" => fake()->name(),
            "Email" => fake()->email(),
            "Contact" => fake()->phoneNumber(),
            "Address" => fake()->address(),
            "Age" => fake()->numberBetween(15,35),
            "City" => fake()->city()
        ];
    }
}
