<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\Operator;
use Livewire\Attributes\On;

class OptionForm extends Component
{
    public $selectedOption;
    public $operatoreSelezionato;
    public $fileSelezionato;
    public $valoreCampo1;
    public $cognome;
    public $showForm = false;
    public $testoCampo1;

    public function render(){
        return view('livewire.cebat.option-form');
    }

    #[On('OperatoreSelezionato')]
    public function operatoreSelezionato($operatoreSelezionato){
        $this->operatoreSelezionato = $operatoreSelezionato;
    }

    #[On('optionFormSelected')]
    public function fileSelezionato($fileSelezionato){
        $this->fileSelezionato=$fileSelezionato;
        $this->dispatch('formfileOperatore');
    }
    
    #[On('formfileOperatore')]
    public function showForm(){         
        if ($this->fileSelezionato =="unilav_id") {
            $this->showForm = true;
            $operator = Operator::find($this->operatoreSelezionato);
            $this->valoreCampo1 = $operator->unilav->scadenza;
            $this->cognome = $operator->cognome;
            $this->testoCampo1="Presente";
        }

        // $operator = Operator::find($selectedOption);
        // if ($operator) {
        //     $this->nome = $operator->nome;
        //     $this->cognome = $operator->cognome;
        // }
    }

    // public function store(){
    //     Operator::create([
    //         'nome' => $this->nome,
    //         'cognome' => $this->cognome,
    //     ]);
    //     $this->resetForm();
    // }

    // public function update(){
    //     $operator = Operator::find($this->selectedOption);
    //     if ($operator) {
    //         $operator->update([
    //             'nome' => $this->nome,
    //             'cognome' => $this->cognome,
    //         ]);
    //         $this->resetForm();
    //     }
    // }

    public function resetForm()
    {
        $this->cognome = '';
        $this->showForm = false;
    }
}

