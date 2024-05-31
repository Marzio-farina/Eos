<?php

use App\Http\Controllers\PageController;
use App\Providers\FortifyServiceProvider;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'Dashboard'])->middleware('auth')->name('Dashboard');
Route::get('/impostazioni', [PageController::class,'impostazioni'])->middleware('auth')->name('impostazioni');