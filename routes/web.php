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

App::setLocale('ar');

// save transate local value
Route::get('/lang/{locale}', function ($locale) {})->name('lang');




Route::middleware(['detect.device'])->group(function () {
        Route::get('/', function () {
            if(request()->get('device') === 'mobile'){
                return view('mobile.pages.home');
            }else{
                return view('desktop.pages.home');
            }
        })->name('home');
        Route::get('/about-us', function () {
            if(request()->get('device') === 'mobile'){
                return view('mobile.pages.about-us');
            }else{
                return view('desktop.pages.about-us');
            }
        })->name('about-us');
        Route::get('/contact-us', function () {
            if(request()->get('device') === 'mobile'){
                return view('mobile.pages.contact-us');
            }else{
                return view('desktop.pages.contact-us');
            }
        })->name('contact-us');
        Route::get('/offer', function () {
            if(request()->get('device') === 'mobile'){
                return view('mobile.pages.offer');
            }else{
                return view('desktop.pages.offer');
            }
        })->name('offer');
        Route::get('/checkout', function () {
            if(request()->get('device') === 'mobile'){
                return view('mobile.pages.checkout');
            }else{
                return view('desktop.pages.checkout');
            }
        })->name('checkout');
        Route::get('/umrah-guide', function () {
            if(request()->get('device') === 'mobile'){
                return view('mobile.pages.umrah-guide');
            }else{
                return view('desktop.pages.umrah-guide');
            }
        })->name('umrah-guide');

});