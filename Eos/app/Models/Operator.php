<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cognome',
        'unilav_id',
        'mansioneLavoratore_id',
        'idoneitàSanitaria',
        'formazioneBase',
        'informazione',
        'nominaRls',
        'formazioneRls',
        'nominaRspp',
        'formazioneRspp',
        'inailRls',
        'nominaPreposto',
        'formazionePreposto',
        'nominaAntincendio',
        'formazioneAntincendio',
        'nominaPrimoSoccorso',
        'formazionePrimoSoccorso',
        'formazioneEscavatorista',
        'formazioneGruista',
        'formazionePes',
        'nominaPes',
        'formazioneDPI3CAT',
        'formazionePonteggiatore',
        'formazioneGas',
        'formazioneAsic',
        'nominaAsic',
        'formazioneSegnaleticaLavoratore',
        'formazioneSegnaleticaPreposto',
        'tesserino',
        'verbaleDPI',
        'formazioneTrattorista',
        'formazionePle',
        'formazioneCarrellista',
        'formazionePav',
        'formazionePei',
        'nominaPei',
        'formazioneProfiloC',
        'formazioneProfiloD',
        'formazioneProfiloE',
        'formazioneProfiloF',
        'formazioneProfiloG',
        'formazioneProfiloX',
        'formazioneProfiloY',
        'formazioneProfiloZ',
        'documentoDiRiconoscimento',
    ];

}
