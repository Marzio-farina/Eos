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
            'Unilav_id'=>fake()->numberBetween(1, 100),
            'mansione_lavorators_id'=>fake()->numberBetween(1, 10),
            'idoneitàSanitaria'=>fake()->date('Y_m_d'),
            'formazioneBase'=>fake()->date('Y_m_d'),
            'informazione'=>fake()->numberBetween(0, 1),
            'nominaRls'=>fake()->date('Y_m_d'),
            'formazioneRls'=>fake()->date('Y_m_d'),
            'nominaRspp'=>fake()->date('Y_m_d'),
            'formazioneRspp'=>fake()->date('Y_m_d'),
            'inailRls'=>fake()->date('Y_m_d'),
            'nominaPreposto'=>fake()->date('Y_m_d'),
            'formazionePreposto'=>fake()->date('Y_m_d'),
            'nominaAntincendio'=>fake()->date('Y_m_d'),
            'formazioneAntincendio'=>fake()->date('Y_m_d'),
            'nominaPrimoSoccorso'=>fake()->date('Y_m_d'),
            'formazionePrimoSoccorso'=>fake()->date('Y_m_d'),
            'formazioneEscavatorista'=>fake()->date('Y_m_d'),
            'formazioneGruista'=>fake()->date('Y_m_d'),
            'formazionePes'=>fake()->date('Y_m_d'),
            'nominaPes'=>fake()->date('Y_m_d'),
            'formazioneDPI3CAT'=>fake()->date('Y_m_d'),
            'formazionePonteggiatore'=>fake()->date('Y_m_d'),
            'formazioneGas'=>fake()->date('Y_m_d'),
            'formazioneAsic'=>fake()->date('Y_m_d'),
            'nominaAsic'=>fake()->date('Y_m_d'),
            'formazioneSegnaleticaLavoratore'=>fake()->date('Y_m_d'),
            'formazioneSegnaleticaPreposto'=>fake()->date('Y_m_d'),
            'tesserino'=>fake()->numberBetween(0, 1),
            'verbaleDPI'=>fake()->date('Y_m_d'),
            'formazioneTrattorista'=>fake()->date('Y_m_d'),
            'formazionePle'=>fake()->date('Y_m_d'),
            'formazioneCarrellista'=>fake()->date('Y_m_d'),
            'formazionePav'=>fake()->date('Y_m_d'),
            'formazionePei'=>fake()->date('Y_m_d'),
            'nominaPei'=>fake()->date('Y_m_d'),
            'formazioneProfiloC'=>fake()->date('Y_m_d'),
            'formazioneProfiloD'=>fake()->date('Y_m_d'),
            'formazioneProfiloE'=>fake()->date('Y_m_d'),
            'formazioneProfiloF'=>fake()->date('Y_m_d'),
            'formazioneProfiloG'=>fake()->date('Y_m_d'),
            'formazioneProfiloX'=>fake()->date('Y_m_d'),
            'formazioneProfiloY'=>fake()->date('Y_m_d'),
            'formazioneProfiloZ'=>fake()->date('Y_m_d'),
            'documentoDiRiconoscimento'=>fake()->date('Y_m_d'),
        ];
    }
}
