<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function mailMe(Request $request){
        
    }
}
