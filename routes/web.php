<?php

use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;

App::setLocale('ar');

Route::get('/lang/{locale}', function ($locale) { })->name('lang');

Route::middleware(['detect.device'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/offer', [App\Http\Controllers\OfferController::class, 'index'])->name('offer');
    Route::get('/about-us', [App\Http\Controllers\StaticController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact-us', [App\Http\Controllers\StaticController::class, 'contactUs'])->name('contact-us');
    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/umrah-guide', [App\Http\Controllers\StaticController::class, 'umrahGuide'])->name('umrah-guide');
});