<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\Products;


class PortMarkTestController extends Controller
{
    public function test()
    {
        echo "send mail";
        Mail::to('2000005479@nttu.edu.vn')->send(new Products());
        echo "done";die;
    }
}
