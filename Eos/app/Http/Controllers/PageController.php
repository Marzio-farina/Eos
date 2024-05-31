<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PageController extends Controller
{
    public function Dashboard () {
        return view('Dashboard');
    }    
}
