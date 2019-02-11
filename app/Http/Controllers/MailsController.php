<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use Illuminate\Http\Request;
use App\Mail;

class MailsController extends Controller
{
    public function store()   
    {
        request()->validate([

            'name' => ['required','min:3'],
            'mail' => ['required'],
            'phone' => ['required'],
            'message' => ['required']
            
            ]);
        ContactMessage::create(request()->all());
        

        return redirect('/projects');
    }
}
