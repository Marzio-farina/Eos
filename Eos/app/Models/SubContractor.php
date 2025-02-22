<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubContractor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'generale_id',
        'operatori_id',
        'ponteggi_id',
        'mezzi_id',
        'POS_id',
    ];
}
