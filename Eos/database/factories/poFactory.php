<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\po>
 */
class poFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nominativoDatoreDiLavoro'=>fake()->numberBetween(0, 1),
            'indirizzo'=>fake()->numberBetween(0, 1),
            'riferimentiTelefonici'=>fake()->numberBetween(0, 1),
            'specificheAttivitàSvolte'=>fake()->numberBetween(0, 1),
            'nominativiDelleFigureDellaSicurezza'=>fake()->numberBetween(0, 1),
            'nominativoDelMedico'=>fake()->numberBetween(0, 1),
            'nominativoRSPP'=>fake()->numberBetween(0, 1),
            'nominativoPreposto'=>fake()->numberBetween(0, 1),
            'numeroOperatori'=>fake()->numberBetween(0, 1),
            'mansioniSicurezza'=>fake()->numberBetween(0, 1),
            'turniDiLavoro'=>fake()->numberBetween(0, 1),
            'elencoMezziPonteggi'=>fake()->numberBetween(0, 1),
            'sostanzePericolose'=>fake()->numberBetween(0, 1),
            'valutazioneRumore'=>fake()->numberBetween(0, 1),
            'rischiLavorazione'=>fake()->numberBetween(0, 1),
            'procedureComplementariPsc'=>fake()->numberBetween(0, 1),
            'DPI'=>fake()->numberBetween(0, 1),
            'formazioneLavoratori'=>fake()->numberBetween(0, 1),
            'firmaRLS'=>fake()->numberBetween(0, 1),
            'firmaRSPP'=>fake()->numberBetween(0, 1),
            'firmaMedicoCompetente'=>fake()->numberBetween(0, 1),
            'firmaDatoreDiLavoro'=>fake()->numberBetween(0, 1),
        ];
    }
}
