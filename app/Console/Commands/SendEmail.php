<?php
namespace App\Console\Commands;


use App\Mail\Products;
use App\Mail\OrderShipped;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    // Dinh nghia lai cau lenh cho Artisan hieu email:send {email} va gui email theo dia chi 
    // Ex: php artisan email:send example@example.com
    protected $signature = 'email:sendf {email}';
    protected $description = 'Send an email to the specified address';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $email = $this->argument('email');
        $name = 'id';

        Mail::to($email)->send(new Products());

        $this->info("Email sent to {$email} aka {$name}");
    }
}
