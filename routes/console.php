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