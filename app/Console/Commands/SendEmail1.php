<?php
namespace App\Console\Commands;


use App\Mail\Products;
use App\Mail\OrderShipped;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmail1 extends Command
{
    // Dinh nghia lai cau lenh cho Artisan hieu email:send {email} va gui email theo dia chi 
    // Ex: php artisan email:send example@example.com
    protected $signature = 'email:fg1 {email}';
    protected $description = 'Send an email to the specified address';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $email = $this->argument('email');
        $name = 'Huynh'; // Bạn có thể thay đổi tên người nhận nếu cần

        Mail::to('2000005479@nttu.edu.vn')->send(new Products());

        $this->info("Email sent to {$email}");
    }
}
