<?php

use App\Http\Controllers\CheckoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Bookingconfirm;
use App\Livewire\CompanyProfile;
use App\Livewire\Checkout;
use App\Livewire\ContactUs;
use App\Livewire\departurelist;
use App\Livewire\seat;

use App\Livewire\Search;
use App\Livewire\Tripdetails;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Valuestore\Valuestore;

Route::get('/seat', function () {
    return view('seat');
})->name('app.seat');
Route::get('/', function () {
    $valuestore = Valuestore::make('visit.json');
    $valuestore->increment('visit');

    return view('home');
})->name('app.home');


Route::get('/login', Login::class)->name('app.login');
// Route::get('/seat', seat::class)->name('app.seat');
Route::get('/register', Register::class)->name('app.Register');
Route::get('/company-profile', CompanyProfile::class)->name('app.companyprofile');
Route::get('/Search', Search::class)->name('app.Search');
Route::get('/departurelist', departurelist::class)->name('app.departurelist');
Route::get('/contactus', ContactUs::class)->name('app.contactus');
Route::get('/trip/{trip}', Tripdetails::class)->name('app.Tripdetails');

Route::get('/bookingconfirm/{trip}', Bookingconfirm::class)->name('app.bookingconfirm')->middleware('auth');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout', Checkout::class)->name('app.checkout');
Route::post('fcm_token', function (Request $request) {
    return auth()->user()?->tokens()->updateOrCreate(['token' => $request->token], ['token' => $request->token]);

    Route::get('/Seat', seat::class)->name('app.seat');

});
