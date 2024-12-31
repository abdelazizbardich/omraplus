<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('deploy', function () {
        logger('Deploying the latest changes from GitHub');
    $output = shell_exec('php artisan optimize:clear');
        logger("php artisan optimize:clear =>".$output);
    $output = shell_exec('git reset --hard');
        logger("git reset --hard =>".$output);
    $output = shell_exec('git pull origin main');
        logger("git pull origin main =>".$output);
    $output = shell_exec('composer install');
        logger("composer install =>".$output);
    $output = shell_exec('php artisan migrate');
        logger("php artisan migrate =>".$output);
    $output = shell_exec('php artisan config:cache');
        logger("php artisan config:cache =>".$output);
    $output = shell_exec('php artisan route:cache');
        logger("php artisan route:cache =>".$output);
    $output = shell_exec('php artisan view:cache');
        logger("php artisan view:cache =>".$output);
    $output = shell_exec('php artisan queue:restart');
        logger("php artisan queue:restart =>".$output);
    $output = shell_exec('php artisan optimize');
        logger("php artisan optimize =>".$output);
    $output = shell_exec('cp ../deploy-files/.env.production ./.env');
        logger("copy .env.production to .env =>".$output);
    $this->comment($output);
})->purpose('Deploy the latest changes from GitHub');


Artisan::command('down-serve', function () {
    // reset all changes
    $output = shell_exec('php artisan up');
    $output = shell_exec('php artisan down --with-secret --secret=pass');
    $output = shell_exec('php artisan serve');
    $this->comment($output);
})->purpose('Rollback the latest changes from GitHub');