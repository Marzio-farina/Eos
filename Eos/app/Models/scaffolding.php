<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scaffolding extends Model
{
    use HasFactory;

    protected $fillable = [
        'librettoAutorizzazione',
        'Pimus',
        'progetto',
        'dichiarazione',
    ];
}
