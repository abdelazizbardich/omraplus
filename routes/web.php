<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/deploy', function () {
    Artisan::call('deploy');
    // save the output from the command in a log file
    $output = Artisan::output();
    file_put_contents(storage_path('logs/deploy.log'), $output);
});
