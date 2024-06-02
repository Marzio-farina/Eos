<?php

namespace App\Livewire\Utenti;

use Livewire\Component;

class Edit extends Component
{
    public $user;
    public $name;

    public function render(){
        // $this->name= $this->user->name;
        return view('livewire.utenti.edit');
    }

    public function mount (){
        $this->name= $this->user->name;
    }

    public function update(){
        $this->user->update([
            'name'=>$this->name,
        ]);
        return view('livewire.utenti.show');
    }
}
