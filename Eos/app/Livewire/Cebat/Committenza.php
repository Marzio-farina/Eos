<?php

namespace App\Livewire\Cebat;

use App\Models\Client;
use Livewire\Component;

class Committenza extends Component
{
    public $committenze;
    public $selectedButton = null;

    public function render()
    {
        return view('livewire.cebat.committenza', [
            'committenze' => $this->committenze,
            'selectedButton' => $this->selectedButton,
        ]);
    }

    public function mount()
    {
        $this->committenze = Client::all();
    }

    public function changeColor($index)
    {
        $this->selectedButton = $index;
    }
}
