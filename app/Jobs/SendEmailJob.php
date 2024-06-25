<?php
namespace App\Jobs;

use App\Mail\Products;
use App\Mail\OrderShipped;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $name;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function handle()
    {
        try {
            Log::debug(' trước khi mail to.');
            Mail::to($this->email)->send(new Products());
            // Log or output success message if needed
            echo('Success');
        } catch (\Exception $e) {
            // Log or handle failure if needed
            echo("failed r"), $e->getMessage(),"";
        }
    }
}
