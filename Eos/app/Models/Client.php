<?php

namespace App\Models;

use App\Livewire\Cebat\CampiCommittenza;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function Campi()
    {
        return $this->belongsTo(CampiClient::class, 'campiCommittenza_id'); 
    }

}
