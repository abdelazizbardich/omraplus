<?php

use Illuminate\Support\Facades\Route;

// App::setLocale('ar');
Route::get('/lang/{locale}', function ($locale) { })->name('lang');

Route::get('/', [App\Http\Controllers\GuestController::class, 'home'])->name('home');
Route::get('/flight/{flight:id}', [App\Http\Controllers\GuestController::class, 'flight'])->name('flight');
Route::post('/flights', [App\Http\Controllers\GuestController::class, 'search'])->name('flights.search');
Route::get('/about-us', [App\Http\Controllers\GuestController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\GuestController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [App\Http\Controllers\GuestController::class, 'contactUsSend'])->name('contact-us-send');
Route::get('/visa', [App\Http\Controllers\GuestController::class, 'visa'])->name('visa');
Route::get('/umrah-guide', [App\Http\Controllers\GuestController::class, 'umrahGuide'])->name('umrah-guide');
Route::get('/hajj-guide', [App\Http\Controllers\GuestController::class, 'hajjGuide'])->name('hajj-guide');

Route::get('/faqs', [App\Http\Controllers\GuestController::class, 'faqs'])->name('faqs');
Route::get('/checkout/{program:id}', [App\Http\Controllers\GuestController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [App\Http\Controllers\GuestController::class, 'confirmCheckout'])->name('checkout.save');
Route::get('/checkout/success/{order:id}', [App\Http\Controllers\GuestController::class, 'checkoutSuccess'])->name('checkout.success');

Route::get('/booking-instructions', [App\Http\Controllers\GuestController::class, 'bookingInstructions'])->name('booking-instructions');
Route::get('/omra-packs', [App\Http\Controllers\GuestController::class, 'omraPacks'])->name('omra-packs');
Route::get('/ramadan-omra', [App\Http\Controllers\GuestController::class, 'ramadanOmra'])->name('ramadan-omra');
Route::get('/personalizd-omra', [App\Http\Controllers\GuestController::class, 'personalizdOmra'])->name('personalizd-omra');
Route::get('/hadj-2025', [App\Http\Controllers\GuestController::class, 'hadj2025'])->name('hadj-2025');
Route::get('/learn-about-mecca', [App\Http\Controllers\GuestController::class, 'learnAboutMecca'])->name('learn-about-mecca');
Route::get('/get-to-know-medina', [App\Http\Controllers\GuestController::class, 'getToKnowMedina'])->name('get-to-know-medina');





Route::middleware(['auth:sanctum', 'role:super_admin', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
    Route::get('/dashboard/settings', [App\Http\Controllers\DashboardController::class, 'settings'])->name('settings');

    Route::get('/dashboard/flights', [App\Http\Controllers\FligthController::class, 'index'])->name('flights');
    Route::post('/dashboard/flights/save', [App\Http\Controllers\FligthController::class, 'save'])->name('flights.save');
    Route::get('/dashboard/flights/edit/{flight:id}', [App\Http\Controllers\FligthController::class, 'edit'])->name('flights.edit');
    Route::post('/dashboard/flights/update/{flight:id}', [App\Http\Controllers\FligthController::class, 'update'])->name('flights.update');
    Route::get('/dashboard/flights/delete/{flight:id}', [App\Http\Controllers\FligthController::class, 'delete'])->name('flights.delete');

    Route::get('/dashboard/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
    Route::post('/dashboard/categories/save', [App\Http\Controllers\CategoryController::class, 'save'])->name('categories.save');
    Route::get('/dashboard/categories/edit/{category:id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/dashboard/categories/update/{category:id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::get('/dashboard/categories/delete/{category:id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('categories.delete');

    Route::get('/dashboard/programs', [App\Http\Controllers\ProgramController::class, 'index'])->name('programs');
    Route::post('/dashboard/programs/save', [App\Http\Controllers\ProgramController::class, 'save'])->name('programs.save');
    Route::get('/dashboard/programs/edit/{program:id}', [App\Http\Controllers\ProgramController::class, 'edit'])->name('programs.edit');
    Route::post('/dashboard/programs/update/{program:id}', [App\Http\Controllers\ProgramController::class, 'update'])->name('programs.update');
    Route::get('/dashboard/programs/delete/{program:id}', [App\Http\Controllers\ProgramController::class, 'delete'])->name('programs.delete');

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
    Route::get('/dashboard/pricing/edit/{programPrice:program_id}', [App\Http\Controllers\PricingController::class, 'edit'])->name('pricing.edit');
    Route::post('/dashboard/pricing/update/{programPrice:program_id}', [App\Http\Controllers\PricingController::class, 'update'])->name('pricing.update');
    Route::get('/dashboard/pricing/delete/{programPrice:program_id}', [App\Http\Controllers\PricingController::class, 'delete'])->name('pricing.delete');

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

    Route::get('/dashboard/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::post('/dashboard/users/save', [App\Http\Controllers\UserController::class, 'save'])->name('users.save');
    Route::get('/dashboard/users/edit/{user:id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::post('/dashboard/users/update/{user:id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('/dashboard/users/delete/{user:id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');
    
    Route::get('/dashboard/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
    Route::post('/dashboard/orders/save', [App\Http\Controllers\OrderController::class, 'save'])->name('orders.save');
    Route::get('/dashboard/orders/edit/{user:id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit');
    Route::post('/dashboard/orders/update/{user:id}', [App\Http\Controllers\OrderController::class, 'update'])->name('orders.update');
    Route::get('/dashboard/orders/delete/{user:id}', [App\Http\Controllers\OrderController::class, 'delete'])->name('orders.delete');
});


require_once __DIR__ . '/jetstream.php';
