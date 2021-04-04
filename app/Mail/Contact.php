<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $contact;
    public function __construct(Array $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if(in_array("mdp", $this->contact))
        {
            return $this->from($this->contact['mail'])
                ->view('mail.mdpOublie');
        }
        else
        {
            return $this->from(session('membre')['mail'])
                ->view('mail.mail');
        }
    }

    public function mdpOublie()
    {

    }
}
