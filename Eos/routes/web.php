<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Providers\FortifyServiceProvider;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'Dashboard'])->middleware('auth')->name('Dashboard');
Route::get('/impostazioni', [PageController::class,'impostazioni'])->middleware('auth')->name('impostazioni');

Route::get('/utenti', [UserController::class,'index'])->middleware('auth')->name('Utenti.index');
Route::get('/utente/{id}', [UserController::class,'show'])->middleware('auth')->name('Utente.show');