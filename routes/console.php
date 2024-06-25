<?php

use App\Jobs\ClearBrandTable;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

// Artisan::command('inspire', ,ffunction () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote')->hourly();

// Schedule::command('email:send 2000005479@nttu.edu.vn ')->everyMinute();
// Schedule::command('email:send 2000005479@nttu.edu.vn ')->everyMinute();
// Artisan::command("email:send {email} ",function(){
//     SendEmailJob::dispatch('2000005479@nttu.edu.vn');
//     Log::debug('Artisan Run');
// });

Schedule::command('email:send')->daily()->at('14:30');
Artisan::command("email:send ",function(){
    SendEmailJob::dispatch('2000005479@nttu.edu.vn');
    Log::debug('Artisan Run');
});

// Schedule::command('email:sendf 2000005479@nttu.edu.vn')->everyFifteenSeconds();

// Artisan::command('email:sendff', function(){
//     shell_exec("echo '" . date('Y-m-d H:i:s') . " abcd' >> /tmp/abc.txt");

// })->everyFiveSeconds();

// Schedule::command('email:send 2000005479@nttu.edu.vn')->everyFiveSeconds();
// Artisan::command('email:sendf 2000005479@nttu.edu.vn', function(){
//     Log::debug('dfdfdfdf');
// })->everyTenSeconds();

Schedule::exec("touch abcd" . time() . ".txt")
->everyFiveSeconds();

