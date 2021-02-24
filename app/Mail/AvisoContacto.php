<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AvisoContacto extends Mailable
{
    use Queueable, SerializesModels;

    // creación variable global

    public $detallecontacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detallecontacto)
    {
        //
        $this->detallecontacto=$detallecontacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('ItSolutionStuff.com')
            ->view('mails.avisocontacto');
    }
    
}
