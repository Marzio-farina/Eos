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
        $selectedButton = $this->selectedButton;
        $committenze = $this->committenze;
        return view('livewire.cebat.committenza',compact('committenze','selectedButton'));
    }

    public function mount()
    {
        $this->committenze = Client::all();
        return view('livewire.cebat.committenza');
    }

    public function changeColor($index)
    {
        $this->selectedButton = $index;
    }
}
