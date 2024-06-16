<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\Operator;
use Livewire\Attributes\On;

class Option extends Component
{
    public $opzioniOperatore = [];
    public $scadenzaUnilav;
    public $option = [];

    public function render(){
        $this->opzioniOperatore = Operator::all();
        return view('livewire.cebat.option');
    }

    public function mount(){
        $this->filterOption();
    }

    #[On('Option')]
    public function filterOption() {

        $columnsToExclude = [
            'id', 
            'nome',
            'cognome',
            'created_at', 
            'updated_at',
        ];

        $filteredAttributes = collect($this->opzioniOperatore)->flatMap(function ($operator) use ($columnsToExclude) {
            return collect($operator->getAttributes())->keys()->filter(function ($key) use ($columnsToExclude) {
                return !in_array($key, $columnsToExclude);
            });
        })->unique();

        $this->option = $filteredAttributes;
    }

    public function optionForm($selectedOption){
        $this->dispatch('optionFormSelected', $selectedOption);
    }
}
