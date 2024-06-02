<?php

namespace App\Livewire\Utenti;

use Livewire\Component;

class Edit extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.utenti.edit');
    }
}
