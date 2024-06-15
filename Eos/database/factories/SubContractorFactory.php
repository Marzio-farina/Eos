<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubContractor>
 */
class SubContractorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=>Str::limit(fake()->text(150), 150),
            'DVR'=>fake()->numberBetween(0, 1),
            'CCIA'=>fake()->numberBetween(0, 1),
            'VCCIA'=>fake()->numberBetween(0, 1),
            'nominaMedicoCompetente'=>fake()->numberBetween(0, 1),
            'POS_id'=>fake()->numberBetween(1, 10),
            'nominaRLST'=>fake()->numberBetween(0, 1),
        ];
    }
}
