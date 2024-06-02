<?php

namespace Database\Factories;

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
            'subAppaltatrice'=>fake()->sentence(2),
            'commessa'=>fake()->sentence(2),
            'invioRichiesta'=>fake()->date('Y_m_d'),
            'ricevutaRichiesta'=>fake()->date('Y_m_d'),
            'sollecito1'=>fake()->date('Y_m_d'),
            'sollecito2'=>fake()->date('Y_m_d'),
            'sollecito3'=>fake()->date('Y_m_d'),
            'sollecito4'=>fake()->date('Y_m_d'),
            'sollecito5'=>fake()->date('Y_m_d'),
            'stato'=>fake()->numberBetween(0, 3),
            'dataInvioAlCSE'=>fake()->date('Y_m_d'),
            'commessa'=>fake()->sentence(10),
        ];
    }
}
