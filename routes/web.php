<?php

use Illuminate\Support\Facades\Route;

// App::setLocale('ar');
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
    Route::post('/dashboard/flights/save', [App\Http\Controllers\FligthController::class, 'save'])->name('flights.save');

    Route::get('/dashboard/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
    Route::post('/dashboard/categories/save', [App\Http\Controllers\CategoryController::class, 'save'])->name('categories.save');
    Route::get('/dashboard/categories/edit/{category:id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/dashboard/categories/update/{category:id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::get('/dashboard/categories/delete/{category:id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('categories.delete');
    
    Route::get('/dashboard/programs', [App\Http\Controllers\ProgramController::class, 'index'])->name('programs');
    Route::post('/dashboard/programs/save', [App\Http\Controllers\ProgramController::class, 'save'])->name('programs.save');

    Route::get('/dashboard/hotels', [App\Http\Controllers\HotelController::class, 'index'])->name('hotels');
    Route::post('/dashboard/hotels/save', [App\Http\Controllers\HotelController::class, 'save'])->name('hotels.save');
    Route::get('/dashboard/hotels/edit/{hotel:id}', [App\Http\Controllers\HotelController::class, 'edit'])->name('hotels.edit');
    Route::post('/dashboard/hotels/update/{hotel:id}', [App\Http\Controllers\HotelController::class, 'update'])->name('hotels.update');
    Route::get('/dashboard/hotels/delete/{hotel:id}', [App\Http\Controllers\HotelController::class, 'delete'])->name('hotels.delete');
    
    Route::get('/dashboard/airlines', [App\Http\Controllers\AirlineController::class, 'index'])->name('airlines');
    Route::post('/dashboard/airlines/save', [App\Http\Controllers\AirlineController::class, 'save'])->name('airlines.save');
    Route::get('/dashboard/airlines/edit/{airline:id}', [App\Http\Controllers\AirlineController::class, 'edit'])->name('airlines.edit');
    Route::post('/dashboard/airlines/update/{airline:id}', [App\Http\Controllers\AirlineController::class, 'update'])->name('airlines.update');
    Route::get('/dashboard/airlines/delete/{airline:id}', [App\Http\Controllers\AirlineController::class, 'delete'])->name('airlines.delete');

    Route::get('/dashboard/pricing', [App\Http\Controllers\PricingController::class, 'index'])->name('pricing');
    Route::post('/dashboard/pricing/save', [App\Http\Controllers\PricingController::class, 'save'])->name('pricing.save');

    Route::get('/dashboard/discounts', [App\Http\Controllers\DiscountController::class, 'index'])->name('discounts');
    Route::post('/dashboard/discounts/save', [App\Http\Controllers\DiscountController::class, 'save'])->name('discounts.save');
    Route::get('/dashboard/discounts/edit/{discount:id}', [App\Http\Controllers\DiscountController::class, 'edit'])->name('discounts.edit');
    Route::post('/dashboard/discounts/update/{discount:id}', [App\Http\Controllers\DiscountController::class, 'update'])->name('discounts.update');
    Route::get('/dashboard/discounts/delete/{discount:id}', [App\Http\Controllers\DiscountController::class, 'delete'])->name('discounts.delete');

    Route::get('/dashboard/rooms', [App\Http\Controllers\RoomController::class, 'index'])->name('rooms');
    Route::post('/dashboard/rooms/save', [App\Http\Controllers\RoomController::class, 'save'])->name('rooms.save');
    Route::get('/dashboard/rooms/edit/{room:id}', [App\Http\Controllers\RoomController::class, 'edit'])->name('rooms.edit');
    Route::post('/dashboard/rooms/update/{room:id}', [App\Http\Controllers\RoomController::class, 'update'])->name('rooms.update');
    Route::get('/dashboard/rooms/delete/{room:id}', [App\Http\Controllers\RoomController::class, 'delete'])->name('rooms.delete');
});