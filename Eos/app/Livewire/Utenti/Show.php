<?php

namespace App\Livewire\Utenti;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $user;
    
    public function render()
    {
        return view('livewire.utenti.show');
    }    
}
