<?php

namespace App\Models;

use App\Models\Unilav;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cognome',
        'unilav_id',
        'mansione_lavorators_id',
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

    public function unilav(){
        return $this->belongsTo(Unilav::class, 'unilav_id');
    }

    public function mansione(){
        return $this->belongsTo(mansionelavorator::class, 'mansione_lavorators_id');
    }

}
