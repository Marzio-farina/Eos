<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class po extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominativoDatoreDiLavoro',
        'indirizzo',
        'riferimentiTelefonici',
        'specificheAttivitàSvolte',
        'nominativiDelleFigureDellaSicurezza',
        'nominativoDelMedico',
        'nominativoRSPP',
        'nominativoPreposto',
        'numeroOperatori',
        'mansioniSicurezza',
        'turniDiLavoro',
        'elencoMezziPonteggi',
        'sostanzePericolose',
        'valutazioneRumore',
        'rischiLavorazione',
        'procedureComplementariPsc',
        'DPI',
        'formazioneLavoratori',
        'firmaRLS',
        'firmaRSPP',
        'firmaMedicoCompetente',
        'firmaDatoreDiLavoro'
    ];
}
