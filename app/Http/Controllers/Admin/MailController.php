<?php
namespace App\Http\Controllers\Admin;

use App\Jobs\ClearBrandTable;
use App\Jobs\SendEmailJob;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    public function sendEmail()
    {
        Log::debug('Mail Controller Sendmail');
        SendEmailJob::dispatch();
        // ClearBrandTable::dispatch()->onQueue('emails');

        return "Email sending job dispatched successfully!";
    }
}