<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('deploy', function () {
    $output = shell_exec('git reset --hard');
    $output = shell_exec('git pull origin main');
    $output = shell_exec('npm run build');
    $output = shell_exec('php artisan optimize');
    $this->comment($output);
})->purpose('Deploy the latest changes from GitHub');