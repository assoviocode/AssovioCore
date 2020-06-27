<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;

class EmailContatoSite extends Mailable
{
    
    public $order;
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contato');
    }
}

