<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('deploy', function () {
    $output = shell_exec('git reset --hard && git pull && npm run build && php artisan optimize');
    return $this->comment($output);
})->purpose('Deploy the latest changes from GitHub');


Artisan::command('stop', function () {
    // reset all changes
    $output = shell_exec('php artisan up');
    $output = shell_exec('php artisan down --with-secret --secret=pass');
    $this->comment($output);
})->purpose('Rollback the latest changes from GitHub');