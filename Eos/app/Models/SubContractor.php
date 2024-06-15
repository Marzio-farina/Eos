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
        'CCIA',
        'VCCIA',
        'nominaMedicoCompetente',
        'POS_id',
        'nominaRLST',
    ];
}
