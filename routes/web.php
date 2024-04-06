<?php
use App\Livewire\Search;
use App\Livewire\departurelist;
use App\Livewire\Auth\Login;

use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use Spatie\Valuestore\Valuestore;

Route::get('/', function () {
    $valuestore = Valuestore::make('visit.json');
    $valuestore->increment('visit');
    return view('home');
})->name('app.home');

Route::get('/login',Login::class)->name('app.login');

Route::get('/register',Register::class)->name('app.Register');

Route::get('/Search',Search::class)->name('app.Search');
Route::get('/departurelist',departurelist::class)->name('app.departurelist');
