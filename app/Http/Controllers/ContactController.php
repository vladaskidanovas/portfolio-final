<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\ContactForm;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{

    public function index()
    {
        return view('pages.contact');
    }

    public function send_message(Request $request) {

        if (!RateLimiter::attempt('send-message:'.$request->ip(),$perMinute = 2, function(){})) {
            return redirect('/contact')->with('status', 'Too many messages sent!');
        }

        $input = $request->all();
        array_walk_recursive($input, function(&$input) {$input = strip_tags($input);});
        $request->merge($input);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email_address' => 'required|email',
            'message_text' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/contact')->withErrors($validator)->withInput();
        }

        // Mail::to('vladaskidanovas@gmail.com')->send(new ContactForm($request->all()));

        return redirect('/contact')->with('status', 'Your message has been delivered');

     }

}
