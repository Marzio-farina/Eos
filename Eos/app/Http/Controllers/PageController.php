<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PageController extends Controller
{
    public function Dashboard () {
        $users = User::all();
        return view('Dashboard', compact('users'));
    }    

    public function impostazioni () {
        return view('impostazioni');
    } 
    
}
