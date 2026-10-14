<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inventory:about', function () {
    $this->info('Inventory Management System — Laravel P5');
})->purpose('Display inventory project information');
