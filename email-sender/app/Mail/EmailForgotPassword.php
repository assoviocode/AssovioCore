<?php
namespace App\Mail;

use App\Client;
use Illuminate\Mail\Mailable;

class EmailForgotPassword extends Mailable
{

    public $linkButton;
    public $consumerName;
    public $client;

    public function __construct(string $linkButton, string $consumerName, Client $client)
    {
        $this->linkButton = $linkButton;
        $this->consumerName = $consumerName;
        $this->client = $client;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), $this->client->getName())->subject('Confirmação de Cadastro')->view('emails.'.$this->client->getEmailFolder().'.forgot_password');
    }
    
}

