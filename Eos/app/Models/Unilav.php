<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unilav extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipologia',
        'scadenza',        
    ];
}
