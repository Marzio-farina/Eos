<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class generalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'DVR'=>fake()->numberBetween(0, 1),
            'DURC'=>fake()->numberBetween(0, 1),
            'CCIA'=>fake()->numberBetween(0, 1),
            'VCCIA'=>fake()->numberBetween(0, 1),
            'nominaMedicoCompetente'=>fake()->numberBetween(0, 1),
            'nominaRLST'=>fake()->numberBetween(0, 1),
        ];
    }
}
