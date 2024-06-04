<?php

namespace App\Livewire\Cebat;

use App\Models\Unilav;
use Livewire\Component;

class Vidimazione extends Component
{
    public function render()
    {
        $Unilav = Unilav::all();
        return view('livewire.cebat.vidimazione', compact('Unilav'));
    }
}
