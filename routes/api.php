<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/flights/{flight:id}', [App\Http\Controllers\GuestController::class, 'apiGetFight']);
Route::get('/lang/{value}', function(string $value){
    return __($value);
});
Route::get('/asset/{value}', function(string $value){
    return Vite::asset($value);
});
Route::get('/route/{value}', function(string $value){
    return route($value);
});



Route::any('/deploy', function () {
    return Artisan::call('deploy');
});