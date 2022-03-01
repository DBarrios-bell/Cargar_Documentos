<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmergencyCallReceived extends Mailable
{
    // use Queueable, SerializesModels;

    // public $subject ='Asunto';

    // public $distressCall;

    // public function __construct(/*DistressCall $distressCall*/)
    // {
    //     //$this->distressCall = $distressCall;
    // }

    // public function build()
    // {
    //     return $this->view('emails.emergency_call');
    // }
    use Queueable, SerializesModels;

    public $subject ='Mensaje Recibido';

    public $msg;

    public function __construct($msg)
    {
        $this->msg =$msg;
    }


    public function build()
    {
        return $this->view('emails.emergency_call');
    }
}
