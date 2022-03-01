<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\mail;
use App\Mail\MessageReceived;
use App\Mail\EmergencyCallReceived;

class MessageController extends Controller
{

    public function store(){
        $msg = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|max:150'

        ],[
            'name.required' => __('I Need Your Name')
        ]);

       Mail::to('devinson.barrios@gmail.com')->queue( new MessageReceived($msg));

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas');

    }


     public static function sendCorreo($data, $d_email){
        Mail::to($d_email)->send(new EmergencyCallReceived($data));
    }
}
