<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\Operator;
use Livewire\Attributes\On;

class CampoDettaglio extends Component
{
    public $campiDettaglio;
    public $filteredDettaglio = [];

    public function render()
    {
        return view('livewire.cebat.campo-dettaglio', [
            'filteredDettaglio' => $this->filteredDettaglio,
        ]);
    }

    // public function mount()
    // {
    //     $this->campiDettaglio = Operator::all();
    // }

    #[On('filterDettaglio')]
    public function filterDettaglio($selectedKey)
    {
        if ($selectedKey == "03_Attestati_di_formazione") {
            $this->filteredDettaglio = Operator::all();
        }else {
            # code...
        }
    }
}


