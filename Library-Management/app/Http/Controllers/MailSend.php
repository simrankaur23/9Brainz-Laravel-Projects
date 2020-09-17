<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;

class MailSend extends Controller
{
    public function mailsend(){
        $details = [
            'title' => 'Title: Mail from Admin',
            'body' => 'Body: Email Verification!'
        ];

        \Mail::to('simran.kaur102867@marwadiuniversity.ac.in')->send(new SendMail($details));
        return view('emails.thanks');
    }
}
