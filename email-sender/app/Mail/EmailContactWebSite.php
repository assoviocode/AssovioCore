<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;

class EmailContactWebSite extends Mailable
{    
    public function build()
    {
        return $this->view('emails.contact_website');
    }
}

