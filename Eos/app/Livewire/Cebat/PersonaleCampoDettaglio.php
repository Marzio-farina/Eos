<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use Livewire\Attributes\On;

class PersonaleCampoDettaglio extends Component
{
    public $showForm;

    public function render()
    {
        return view('livewire.cebat.personale-campo-dettaglio', ['showForm' => $this->showForm]);
    }
    
    #[On('AddForm')]
    public function handleAddForm($showForm)
    {
        $this->showForm = $showForm;
    }
}
