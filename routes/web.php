<?php
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Searchtrip;
Route::get('/', function () {
    return view('home');
})->name('app.home');

Route::get('/login',Login::class)->name('app.login');

Route::get('/register',Register::class)->name('app.Register');
Route::get('/Searchtrip',Searchtrip::class)->name('app.Searchtrip');
