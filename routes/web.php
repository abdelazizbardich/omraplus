<?php

use Illuminate\Support\Facades\Route;

App::setLocale('ar');
Route::get('/lang/{locale}', function ($locale) { })->name('lang');

Route::get('/', [App\Http\Controllers\GuestController::class, 'home'])->name('home');
Route::get('/flight/{flight:id}', [App\Http\Controllers\GuestController::class, 'flight'])->name('flight');
Route::get('/about-us', [App\Http\Controllers\GuestController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\GuestController::class, 'contactUs'])->name('contact-us');
Route::get('/checkout', [App\Http\Controllers\GuestController::class, 'checkout'])->name('checkout');
Route::get('/umrah-guide', [App\Http\Controllers\GuestController::class, 'umrahGuide'])->name('umrah-guide');
Route::get('/faqs', [App\Http\Controllers\GuestController::class, 'faqs'])->name('faqs');





Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard/home', function () {return view('dashboard', ["name" => "Dashboard"]);})->name('dashboard');
    Route::get('/dashboard/flights', function () {return view('flights',["name"=> "Flights"]);})->name('flights');
    Route::get('/dashboard/programs', function () {return view('programs',["name"=> "Programs"]);})->name('programs');
    Route::get('/dashboard/hotels', function () {return view('hotels',["name"=> "Hotels"]);})->name('hotels');
    Route::get('/dashboard/airlines', function () {return view('airlines',["name"=> "Airlines"]);})->name('airlines');
    Route::get('/dashboard/pricing', function () {return view('pricing',["name"=> "Pricing"]);})->name('pricing');
    Route::get('/dashboard/discounts', function () {return view('discounts',["name"=> "Discounts"]);})->name('discounts');
});