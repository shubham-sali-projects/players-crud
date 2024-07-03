<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\player>
 */
class playerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'age'=>fake()->numberBetween(18,40),
            'role'=>fake()->name(),
            'runs'=>fake()->numberBetween(1000,10000),
            'wickets'=>fake()->numberBetween(50,200),
            'country'=>fake()->country()
        ];
    }
}
