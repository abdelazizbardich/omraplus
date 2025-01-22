<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

App::setLocale(session('locale', 'ar'));

// save transate local value
Route::get('/lang/{locale}', function ($locale) {
    
})->name('lang');




Route::middleware(['detect.device'])->group(function () {


        Route::get('/', function () {
            $device = request()->get('device');
            if($device === 'mobile'){
                return view('mobile.pages.home');
            }else{
                return view('pages.home');
            }
        })->name('home');
        Route::get('/about-us', function () {return view('pages.about-us');})->name('about-us');
        Route::get('/contact-us', function () {return view('pages.contact-us');})->name('contact-us');
        Route::get('/offer', function () {
            $device = request()->get('device');
            if($device === 'mobile'){
                return view('mobile.pages.offer');
            }
            else{
                return view('pages.offer');
            }
        })->name('offer');
        Route::get('/checkout', function () {return view('pages.checkout');})->name('checkout');
        Route::get('/umrah-guide', function () {return view('pages.umrah-guide');})->name('umrah-guide');

});