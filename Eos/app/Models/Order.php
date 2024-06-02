<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'subAppaltatrice',
        'commessa',
        'invioRichiesta',
        'ricevutaRichiesta',
        'sollecito1',
        'sollecito2',
        'sollecito3',
        'sollecito4',
        'sollecito5',
        'stato',
        'dataInvioAlCSE',
        'commessa',
    ];
}
