<?php

namespace App\Livewire\Cebat;

use Livewire\Component;

class Unilav extends Component
{
    public $unilav1;
    public $unilav2;
    public $unilav3;
    public $scadenzaUnilav;

    public function render()
    {
        return view('livewire.cebat.unilav');
    }
}
