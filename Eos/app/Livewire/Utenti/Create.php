<?php

namespace App\Livewire\Utenti;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required',message:'nome obbligatorio')] 
    #[Validate('min:3',message:'Username minimo di 3 caratteri')]     
    public $name;

    #[Validate('required',message:'email obbligatoria')] 
    #[Validate('min:3',message:'email minima di 3 caratteri')]
    #[Validate('unique')]
    public $email;

    #[Validate('required',message:'password obbligatoria')] 
    #[Validate('min:3',message:'password minima di 3 caratteri')] 
    public $password;

    public function render()
    {
        return view('livewire.utenti.create');
    }

    public function store(){

        $this->validate();

            User::create([

            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ]);

        session()->flash('success','Utente creato con successo');
        $this->reset();
    }
}
