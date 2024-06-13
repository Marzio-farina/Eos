<?php

namespace App\Livewire\Cebat;

use App\Models\campiClient;
use Livewire\Component;
use Livewire\Attributes\On;

class CampiCommittenza extends Component
{
    public $campiCommittenza;
    public $filteredCampiCommittenza= [];

    public function render()
    {
        return view('livewire.cebat.campi-committenza', [
            'filteredCampiCommittenza' => $this->filteredCampiCommittenza,
        ]);
    }

    public function mount()
    {
        $this->campiCommittenza = campiClient::all();
    }
    
    #[On('index')]
    public function filterCommittenza($index)
    {
        $client = $this->campiCommittenza[$index];
        $this->filteredCampiCommittenza = collect($client->getAttributes())->filter(function($value, $key) {
            return $value == 1 && $key !== 'id';
        });
    }
}
