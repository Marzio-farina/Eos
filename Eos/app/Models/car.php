<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;

    protected $fillable = [
        'subAppaltatrice_id',
        'matricola',
        'descrizione',
        'marca',
        'revisione',
        'manuale',
        'dichiarazioneDiConformità',
        'assicurazione',
        'verificaArpa',
        'iscrizioneANGA',
        'proprietà',
        'leasing'
    ];

    
}
