<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=>Str::limit(fake()->name, 100),
            'descrizione'=>Str::limit(fake()->sentence, 150),
            'CIG' => Str::limit(fake()->text(30), 30),
            'subAppaltatrice_id'=>fake()->numberBetween(1, 10),
            'committenza_id'=>fake()->numberBetween(1, 2),
            'invioRichiesta'=>fake()->date('Y_m_d'),
            'ricevutaRichiesta'=>fake()->date('Y_m_d'),
            'sollecito_id'=>fake()->numberBetween(1, 3),
            'statoCommessa_id'=>fake()->numberBetween(1, 3),
            'dataInvioAlCSE'=>fake()->date('Y_m_d'),
            'referentiCebat_id'=>fake()->numberBetween(1, 3),
            'user_id'=>fake()->numberBetween(1, 40),
        ];
    }
}
