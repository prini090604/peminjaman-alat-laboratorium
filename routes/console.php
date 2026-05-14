<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Schedule::command('peminjaman:update-status')
    ->everyFiveMinute();
Schedule::command('peminjaman:reminder')
    ->everyFiveMinute();
    
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
