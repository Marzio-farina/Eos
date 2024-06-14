<?php

namespace App\Livewire\Cebat;

use App\Models\Operator;
use Livewire\Component;
use Livewire\Attributes\On;

class PersonaleCampoDettaglio extends Component
{
    public $showFormAdd;
    public $nome;
    public $cognome;
    public $selectedKey;

    public function render()
    {
        return view('livewire.cebat.personale-campo-dettaglio', 
        ['showFormAdd' => $this->showFormAdd]
        );
    }
    
    #[On('AddForm')]
    public function handleAddForm($params)
    {
        $this->showFormAdd = $params['showFormAdd'];
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
        $this->dispatch('nascondiAddOperatore');
    }

    #[On('EditForm')]
    public function Edit(){

    }
}