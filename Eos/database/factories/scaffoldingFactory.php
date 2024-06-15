<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\scaffolding>
 */
class scaffoldingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'filtroAutorizzazione'=>fake()->numberBetween(0, 1),
            'Pimus'=>fake()->numberBetween(0, 1),
            'progetto'=>fake()->numberBetween(0, 1),
            'dichiarazione'=>fake()->numberBetween(0, 1),
        ];
    }
}
