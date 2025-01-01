<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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






Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about-us', function () {return view('pages.about-us');})->name('about-us');
Route::get('/contact-us', function () {return view('pages.contact-us');})->name('contact-us');
Route::get('/offer', function () {return view('pages.offer');})->name('offer');















Route::get('/deploy', function () {
    Artisan::call('deploy');
    // save the output from the command in a log file
    $output = Artisan::output();
    file_put_contents(storage_path('logs/deploy.log'), $output);

    return redirect()->route('home');
});
