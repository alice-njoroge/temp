<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * display the mail us page
     */
    public function mailUs()
    {
        return view('projects.mail');
    }
}
