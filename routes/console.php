<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('deploy', function () {
    $output = shell_exec('php artisan optimize:clear');
    $output = shell_exec('git reset --hard');
    $output = shell_exec('git pull origin main');
    $output = shell_exec('composer install');
    $output = shell_exec('php artisan migrate');
    $output = shell_exec('php artisan config:cache');
    $output = shell_exec('php artisan route:cache');
    $output = shell_exec('php artisan view:cache');
    $output = shell_exec('php artisan queue:restart');
    $output = shell_exec('php artisan optimize');
    $output = shell_exec('cp ../deploy-files/.env.production ./.env');
    $this->comment($output);
    
})->purpose('Deploy the latest changes from GitHub');


Artisan::command('stop', function () {
    // reset all changes
    $output = shell_exec('php artisan up');
    $output = shell_exec('php artisan down --with-secret --secret=pass');
    $this->comment($output);
})->purpose('Rollback the latest changes from GitHub');