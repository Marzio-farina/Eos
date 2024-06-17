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
            'generale_id'=>fake()->numberBetween(1, 10),
            'operatori_id'=>fake()->numberBetween(1, 10),
            'ponteggi_id'=>fake()->numberBetween(1, 10),
            'mezzi_id'=>fake()->numberBetween(1, 10),
            'POS_id'=>fake()->numberBetween(1, 10),
        ];
    }
}
