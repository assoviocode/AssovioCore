<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use App\ContactWebsite;

class EmailContactWebSite extends Mailable
{   
    
    public $contact;
    
    public  function __construct(ContactWebsite $contact){
        $this->contact = $contact;
    }
    
    public function build()
    {
        return $this->view('emails.contact_website');
    }
}

