<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LinuxScheduleCommand extends Command
{
    protected $signature = 'command:name';
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Logic xử lý lệnh
    }
}
