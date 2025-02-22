<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\car;
use App\Models\general;
use App\Models\Operator;
use App\Models\po;
use App\Models\scaffolding;
use Livewire\Attributes\On;

class CampoDettaglio extends Component
{
    public $campiDettaglio;
    public $filteredDettaglio = [];
    public $showFormAdd = false;
    public $showFormEdit = false;
    public $selectedKey;
    public $selectedOperatorId;

    public function render(){
        return view('livewire.cebat.campo-dettaglio', [
            'filteredDettaglio' => $this->filteredDettaglio,
        ]);
    }

    #[On('filterDettaglio')]
    public function filterDettaglio($selectedKey){
        $this->selectedKey = $selectedKey;
        switch ($selectedKey) {
            case "03_Attestati_di_formazione":
            case "Personale":
                $this->filteredDettaglio = Operator::select('id', 'nome', 'cognome')->get();
                // dd($this->filteredDettaglio[0]['nome']);
                $this->dispatch('Option');
                break;
            case "Generale":
                $this->filteredDettaglio = general::all();
                break;
            case "POS":
                $this->filteredDettaglio = po::all();
                break;
            case "Distacchi":
                $this->filteredDettaglio = Operator::select('id', 'nome', 'cognome')->get();
                break;
            case "Mezzi":
                $this->filteredDettaglio = car::all();
                break;
            case "Ponteggi":
                $this->filteredDettaglio = scaffolding::all();
                break;
            default:
                $this->filteredDettaglio = [];
                break;
        }
    }

    #[On('nascondiAddOperatore')]
    public function toggleFormAdd(){
        $this->showFormAdd = !$this->showFormAdd;
        $this->dispatch('AddForm', [
            'showFormAdd' => $this->showFormAdd, 
            'selectedKey' => $this->selectedKey
        ]);
    }

    public function toggleFormEdit($operatorId){
        $this->showFormEdit = !$this->showFormEdit;
        $this->selectedOperatorId = $operatorId;
        $this->dispatch('EditForm', [
            'showFormEdit' => $this->showFormEdit, 
            'operatorId' => $this->selectedOperatorId
        ]);
    }

    public function delete($operatorId){
        $operatore = Operator::find($operatorId);
        if ($operatore) {
            $operatore->delete();
            $this->dispatch('filterDettaglio', $this->selectedKey);
        }        
    }

    public function OperatoreSelezionato($selectedId){
        $this->dispatch('OperatoreSelezionato', $selectedId);
    }
}


