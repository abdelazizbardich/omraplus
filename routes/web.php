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
    Route::get('/dashboard/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
    Route::get('/dashboard/settings', [App\Http\Controllers\DashboardController::class, 'settings'])->name('settings');

    Route::get('/dashboard/flights', [App\Http\Controllers\FligthController::class, 'index'])->name('flights');
    Route::post('/dashboard/flights', [App\Http\Controllers\FligthController::class, 'save'])->name('flights');

    Route::get('/dashboard/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
    Route::post('/dashboard/categories', [App\Http\Controllers\CategoryController::class, 'save'])->name('categories');
    
    Route::get('/dashboard/programs', [App\Http\Controllers\ProgramController::class, 'index'])->name('programs');
    Route::post('/dashboard/programs', [App\Http\Controllers\ProgramController::class, 'save'])->name('programs');

    Route::get('/dashboard/hotels', [App\Http\Controllers\HotelController::class, 'index'])->name('hotels');
    Route::post('/dashboard/hotels', [App\Http\Controllers\HotelController::class, 'save'])->name('hotels');
    
    Route::get('/dashboard/airlines', [App\Http\Controllers\AirlineController::class, 'index'])->name('airlines');
    Route::post('/dashboard/airlines', [App\Http\Controllers\AirlineController::class, 'save'])->name('airlines');

    Route::get('/dashboard/pricing', [App\Http\Controllers\PricingController::class, 'index'])->name('pricing');
    Route::post('/dashboard/pricing', [App\Http\Controllers\PricingController::class, 'save'])->name('pricing');

    Route::get('/dashboard/discounts', [App\Http\Controllers\DiscountController::class, 'index'])->name('discounts');
    Route::post('/dashboard/discounts', [App\Http\Controllers\DiscountController::class, 'save'])->name('discounts');

    Route::get('/dashboard/rooms', [App\Http\Controllers\RoomController::class, 'index'])->name('rooms');
    Route::post('/dashboard/rooms', [App\Http\Controllers\RoomController::class, 'save'])->name('rooms');
});