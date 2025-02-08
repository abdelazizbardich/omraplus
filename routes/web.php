<?php

use Illuminate\Support\Facades\Route;

App::setLocale('ar');
Route::get('/lang/{locale}', function ($locale) { })->name('lang');

Route::get('/', [App\Http\Controllers\GuestController::class, 'home'])->name('home');
Route::get('/flight/{flight:id}', [App\Http\Controllers\GuestController::class, 'flight'])->name('flight');
Route::get('/about-us', [App\Http\Controllers\GuestController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\GuestController::class, 'contactUs'])->name('contact-us');
Route::get('/checkout/{flight:id}', [App\Http\Controllers\GuestController::class, 'checkout'])->name('checkout');
Route::get('/umrah-guide', [App\Http\Controllers\GuestController::class, 'umrahGuide'])->name('umrah-guide');
Route::get('/faqs', [App\Http\Controllers\GuestController::class, 'faqs'])->name('faqs');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});