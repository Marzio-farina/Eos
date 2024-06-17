<?php

namespace App\Livewire\Cebat;

use App\Models\campiClient;
use Livewire\Component;
use Livewire\Attributes\On;

class CampiCommittenza extends Component
{
    public $campiCommittenza;
    public $filteredCampiCommittenza = [];
    public $selectedKey;

    public function render(){
        return view('livewire.cebat.campi-committenza', [
            'filteredCampiCommittenza' => $this->filteredCampiCommittenza,
        ]);
    }

    public function mount(){
        $this->campiCommittenza = CampiClient::all();
    }
    
    #[On('filterCommittenza')]
    public function filterCommittenza($campiCommittenzaId){
        $client = $this->campiCommittenza->where('id', $campiCommittenzaId)->first();
        if ($client) {
            $this->filteredCampiCommittenza = collect($client->getAttributes())->filter(function($value, $key) {
                return $value == 1 && $key !== 'id';
            });
        } else {
            $this->filteredCampiCommittenza = [];
        }
    }

    public function filterDettaglio(){
        $this->dispatch('filterDettaglio', $this->selectedKey);
    }
}
