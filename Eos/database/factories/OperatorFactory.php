<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operator>
 */
class OperatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=>fake()->firstName(),
            'cognome'=>fake()->lastName(),
            'cognome'=>fake()->lastName(),
            'Unilav_id'=>fake()->numberBetween(0, 100)
        ];
    }
}
