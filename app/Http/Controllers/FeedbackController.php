<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function sendFeedBack(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'feedback' => 'required'
        ]);
        Mail::to(env('MAIL_TO'))->send(new FeedbackSent($request->input('feedback'), $request->input('email')));
        return redirect()->back();
    }
}
