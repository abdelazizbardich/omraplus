<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('deploy', function () {
    // reset all changes
    $output = shell_exec('git reset --hard');
    $output = shell_exec('git pull origin main');
    $output = shell_exec('composer install');
    $output = shell_exec('php artisan migrate');
    $output = shell_exec('php artisan config:cache');
    $output = shell_exec('php artisan route:cache');
    $output = shell_exec('php artisan view:cache');
    // $output = shell_exec('php artisan queue:restart');
    $output = shell_exec('php artisan optimize');
    // move .htaccess file to public folder
    $output = shell_exec('cp ../deploy-files/.htaccess ./.htaccess');
    // move .env file to root folder
    $output = shell_exec('cp ../deploy-files/.env.production ./.env');
    $this->comment($output);
})->purpose('Deploy the latest changes from GitHub');
