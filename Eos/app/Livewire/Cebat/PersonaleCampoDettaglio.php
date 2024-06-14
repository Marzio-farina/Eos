<?php

namespace App\Livewire\Cebat;

use App\Models\Operator;
use Livewire\Component;
use Livewire\Attributes\On;

class PersonaleCampoDettaglio extends Component
{
    public $showForm;
    public $nome;
    public $cognome;
    public $selectedKey;

    public function render()
    {
        return view('livewire.cebat.personale-campo-dettaglio', 
        ['showForm' => $this->showForm]
        );
    }
    
    #[On('AddForm')]
    public function handleAddForm($params)
    {
        $this->showForm = $params['showForm'];
        $this->selectedKey = $params['selectedKey'];
    }

    public function store(){
        Operator::create([
            'nome'=> $this->nome,
            'cognome'=> $this->cognome,
        ]);
        $this->nome = "";
        $this->cognome = "";
        
        $this->dispatch('filterDettaglio',$this->selectedKey);
    }
}
