<?php

namespace App\Livewire\Utenti;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $q = "";

    public function render()
    {
        $users = User::where('name','LIKE', '%'.$this->q .'%')->orderBy('created_at','DESC')->paginate(5);
        return view('livewire.utenti.index',compact('users'));
    }
}
