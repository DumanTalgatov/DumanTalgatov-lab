<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class MailController extends Controller
{
    //
    public function send(){
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'talgatov290701';
        $objDemo->receiver = 'talgatov290701';
        Mail::to("talgatov290701@gmail.com")->send(new DemoEmail($objDemo));
    }
}
