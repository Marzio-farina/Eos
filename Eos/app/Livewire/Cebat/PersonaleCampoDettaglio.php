<?php

namespace App\Livewire\Cebat;

use App\Models\Operator;
use Livewire\Component;
use Livewire\Attributes\On;

class PersonaleCampoDettaglio extends Component
{
    public $showFormAdd = false;
    public $showFormEdit = false;
    public $nome;
    public $cognome;
    public $selectedKey;
    public $selectedOperatorId;

    public function render(){
        return view('livewire.cebat.personale-campo-dettaglio', 
        [
            'showFormAdd' => $this->showFormAdd,
            'showFormEdit' => $this->showFormEdit,
        ]);
    }
    
    #[On('AddForm')]
    public function handleAddForm($params){
        $this->resetForm();
        $this->showFormAdd = $params['showFormAdd'];
        $this->selectedKey = $params['selectedKey'];
    }

    #[On('EditForm')]
    public function handleEditForm($params){
        if (array_key_exists('operatorId', $params)) {
            $this->showFormEdit = $params['showFormEdit'];
            $this->selectedOperatorId = $params['operatorId'];
            if ($this->showFormEdit) {
                $this->retrieveOperator($this->selectedOperatorId);
            }
        } else {
            $this->showFormEdit = false;
            $this->selectedOperatorId = null;
        }
    }

    public function retrieveOperator($operatorId){
        $operator = Operator::find($operatorId);
        if ($operator) {
            $this->nome = $operator->nome;
            $this->cognome = $operator->cognome;
        }
    }
    
    public function store(){
        Operator::create([
            'nome'=> $this->nome,
            'cognome'=> $this->cognome,
        ]);
        $this->resetForm();
        
        $this->dispatch('filterDettaglio',$this->selectedKey);
        if ($this->showFormAdd) {
            $this->dispatch('nascondiAddOperatore');
        }
        
    }

    public function update(){
        $operator = Operator::find($this->selectedOperatorId);
        if ($operator) {
            $operator->update([
                'nome' => $this->nome,
                'cognome' => $this->cognome,
            ]);
            $this->resetForm();
            $this->dispatch('EditForm', ['showFormEdit' => false]);
            $this->dispatch('filterDettaglio', $this->selectedKey);
        }
    }

    public function resetForm(){
        $this->nome = '';
        $this->cognome = '';
        $this->selectedOperatorId = null;
    }
}