<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descrizione',
        'CIG',
        'subaAppaltatrice_id',
        'committenza_id',
        'invioRichiesta',
        'ricevutaRichiesta',
        'sollecito_id',
        'statoCommessa_id',
        'dataInvioAlCSE',
        'referentiCebat_id',
        'user_id',
    ];
}
