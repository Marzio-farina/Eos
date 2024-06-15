<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\Operator;
use Livewire\Attributes\On;

class CampoDettaglio extends Component
{
    public $campiDettaglio;
    public $filteredDettaglio = [];
    public $showFormAdd = false;
    public $showFormEdit = false;
    public $selectedKey;
    public $selectedOperatorId;

    public function render()
    {
        return view('livewire.cebat.campo-dettaglio', [
            'filteredDettaglio' => $this->filteredDettaglio,
        ]);
    }

    #[On('filterDettaglio')]
    public function filterDettaglio($selectedKey)
    {
        $this->selectedKey = $selectedKey;
        switch ($selectedKey) {
            case "03_Attestati_di_formazione":
                $this->filteredDettaglio = Operator::all();
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

    public function toggleFormEdit($operatorId)
    {
        $this->showFormEdit = !$this->showFormEdit;
        $this->selectedOperatorId = $operatorId;
        $this->dispatch('EditForm', [
            'showFormEdit' => $this->showFormEdit, 
            'operatorId' => $this->selectedOperatorId
        ]);
    }
}


