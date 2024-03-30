<?php
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('app.home');

Route::get('/login',Login::class)->name('app.login');

Route::get('/register',Register::class)->name('app.Register');

