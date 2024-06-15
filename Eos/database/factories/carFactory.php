<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\car>
 */
class carFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subAppaltatrice_id'=>fake()->numberBetween(1, 10),
            'matricola'=>Str::limit(fake()->text(100), 100),
            'descrizione'=>Str::limit(fake()->text(150), 150),
            'marca'=>Str::limit(fake()->text(100), 100),
            'revisione'=>fake()->date('Y_m_d'),
            'manuale'=>fake()->numberBetween(0, 1),
            'dichiarazioneDiConformità'=>fake()->numberBetween(0, 1),
            'assicurazione'=>fake()->date('Y_m_d'),
            'verificaArpa'=>fake()->date('Y_m_d'),
            'iscrizioneANGA'=>fake()->date('Y_m_d'),
            'proprietà'=>fake()->numberBetween(0, 1),
            'leasing'=>fake()->date('Y_m_d'),
        ];
    }
}
