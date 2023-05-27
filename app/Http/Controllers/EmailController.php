<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\MailDemo;

class EmailController extends Controller
{
    public function index (Request $request)
    {
       
        $mailData = [
            'title' => $request->input('title'),
            'body' => $request->input('message')
        ];
        Mail::to('hayatdargui72@gmail.com')->send(new MailDemo($mailData));
        dd('email sent successfully  :)');
    }
}
