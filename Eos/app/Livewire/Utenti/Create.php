<?php

namespace App\Livewire\Utenti;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.utenti.create');
    }

    public function store(){
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ]);

        session()->flash('success','Utente creato con successo');
        $this->reset();
    }
}
