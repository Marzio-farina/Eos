<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubContractor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'DVR',
        'DURC',
        'CCIA',
        'VCCIA',
        'nominaMedicoCompetente',
        'POS_id',
        'nominaRLST',
    ];
}
