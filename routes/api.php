<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/deploy', function () {
    Artisan::call('deploy');
    // save the output from the command in a log file
    $output = Artisan::output();
    file_put_contents(storage_path('logs/deploy.log'), $output);

    return response(true);
});