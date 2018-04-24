<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailInfoTest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sujet;
    public $message;
    public function __construct($sujet,$message)
    {
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {return $this->subject('Envoi email avec Laravel')
       ->view('hello');
        
    }
}
