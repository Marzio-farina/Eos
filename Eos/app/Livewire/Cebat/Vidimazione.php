<?php

namespace App\Livewire\Cebat;

use App\Models\Operator;
use App\Models\Unilav;
use Livewire\Component;

class Vidimazione extends Component
{
    public $IdentificativoOperatore;
    public $OperatoreVidimato;

    public function render()
    {
        $Operatori = Operator::all();
        $Unilavs = Unilav::all();
        return view('livewire.cebat.vidimazione', compact('Unilavs','Operatori'));
    }

    // public function mount(){
    //     $Operatori = Operator::all();
    //     $Unilavs = Unilav::all();
    //     return view('livewire.cebat.vidimazione', compact('Unilavs','Operatori'));
    // }

    public function store(){
        Operator::create([
            'nome' => $this->IdentificativoOperatore,
        ]);
    }

    public function OpzioniOperatore($Operatore){
        $OperatoreVidimato = $Operatore;
        return $OperatoreVidimato;
    }

}
