<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\Operator;
use Livewire\Attributes\On;

class OptionForm extends Component
{
    public $selectedOption;
    public $nome;
    public $cognome;
    public $showForm = false;

    public function render(){
        return view('livewire.cebat.option-form');
    }

    // #[On('optionFormSelected')]
    #[On('OperatoreSelezionato')]
    public function showForm($selectedOption){
        $this->selectedOption = $selectedOption;
        $this->showForm = true;
        
        $operator = Operator::find($selectedOption);
        dd($operator);
        if ($operator) {
            $this->nome = $operator->nome;
            $this->cognome = $operator->cognome;
        }
    }

    public function store(){
        Operator::create([
            'nome' => $this->nome,
            'cognome' => $this->cognome,
        ]);
        $this->resetForm();
    }

    public function update(){
        $operator = Operator::find($this->selectedOption);
        if ($operator) {
            $operator->update([
                'nome' => $this->nome,
                'cognome' => $this->cognome,
            ]);
            $this->resetForm();
        }
    }

    public function resetForm()
    {
        $this->nome = '';
        $this->cognome = '';
        $this->showForm = false;
    }
}
