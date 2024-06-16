<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\Operator;
use Livewire\Attributes\On;

class OptionForm extends Component
{
    public $operatoreSelezionato;
    public $fileSelezionato;
    public $showForm = false;
    public $campi = [];

    public function render(){
        return view('livewire.cebat.option-form');
    }

    #[On('OperatoreSelezionato')]
    public function operatoreSelezionato($operatoreSelezionato){
        $this->operatoreSelezionato = $operatoreSelezionato;
    }

    #[On('optionFormSelected')]
    public function fileSelezionato($fileSelezionato){
        $this->fileSelezionato = $fileSelezionato;
        $this->dispatch('formfileOperatore');
    }
    
    #[On('formfileOperatore')]
    public function showForm(){         
        switch ($this->fileSelezionato) {
            case "unilav_id":
                $this->showForm = true;
                $operator = Operator::find($this->operatoreSelezionato);
                $this->campi = [
                    ['label' => 'Tipologia', 'value' => $operator->unilav?->tipologia ?? ''],
                    ['label' => 'Scadenza', 'value' => $operator->unilav?->scadenza ?? '']
                ];
                break;
            case "mansione_lavorators_id":
                $this->showForm = true;
                $operator = Operator::find($this->operatoreSelezionato);
                $this->campi = [
                    ['label' => 'Tipologia', 'value' => $operator->mansione?->tipologia ?? '']
                ];
                break;
            default:
                $this->showForm = false;
                $this->campi = [];
                break;
        }
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
        $this->showForm = false;
        $this->campi = [];
    }
}

