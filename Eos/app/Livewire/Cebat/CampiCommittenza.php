<?php

namespace App\Livewire\Cebat;

use App\Models\campiClient;
use Livewire\Component;

class CampiCommittenza extends Component
{
    public $campiCommittenza;
    public $filteredCampiCommittenza;

    public function render()
    {
        return view('livewire.cebat.campi-committenza');
    }

    public function mount()
    {
        $this->campiCommittenza = campiClient::all();

        $this->filteredCampiCommittenza = $this->campiCommittenza->map(function($client) {
            return collect($client->getAttributes())->filter(function($value) {
                return $value == 1;
            });
        });

        return view('livewire.cebat.committenza');
    }
}
