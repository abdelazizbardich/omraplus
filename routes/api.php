<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/flights/{flight:id}', [App\Http\Controllers\GuestController::class, 'apiGetFight']);