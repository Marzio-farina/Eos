<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\Operator;
use Livewire\Attributes\On;

class CampoDettaglio extends Component
{
    public $campiDettaglio;
    public $filteredDettaglio = [];
    public $showForm = false;
    public $selectedKey;

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
    public function toggleFormAdd()
    {
        $this->showForm = !$this->showForm;
        $this->dispatch('AddForm', ['showForm' => $this->showForm, 'selectedKey' => $this->selectedKey]);
    }
}


