<?php

use App\Livewire\Search;
use App\Livewire\Departurelist;
use App\Livewire\Auth\Login;

use App\Livewire\Auth\Register;
use App\Livewire\ContactUs;
use App\Livewire\Tripdetails;
use Illuminate\Support\Facades\Route;
use Spatie\Valuestore\Valuestore;

Route::get('/', function () {
    $valuestore = Valuestore::make('visit.json');
    $valuestore->increment('visit');
    return view('home');
})->name('app.home');

Route::get('/login', Login::class)->name('app.login');

Route::get('/register', Register::class)->name('app.Register');

Route::get('/Search', Search::class)->name('app.Search');
Route::get('/departurelist', Departurelist::class)->name('app.departurelist');
Route::get('/contactus', ContactUs::class)->name('app.contactus');
Route::get('/trip/{trip}', Tripdetails::class)->name('app.Tripdetails');
