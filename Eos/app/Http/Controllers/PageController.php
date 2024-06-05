<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;

use App\Models\Unilav;
use App\Models\Operator;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Dashboard () {
        $users = User::all();
        $commesseCebat = Order::all();
        return view('Dashboard', compact('users','commesseCebat'));
    }    

    public function impostazioni () {
        return view('impostazioni');
    } 

    public function vidimazione () {
        $Operatori= Operator::all();
        $Unilavs = Unilav::all();
        return view('Cebat.vidimazione', compact('Unilavs','Operatori'));
    }
    
}
