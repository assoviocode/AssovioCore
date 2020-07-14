<?php
namespace App\Mail\CBrancoAdv;

class MailForgotPassword extends MailBrancoAdv
{

    public $token;

    public $clientName;

    public function __construct(string $token, string $clientName)
    {
        $this->token = $token;
        $this->clientName = $clientName;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), $this->fromName)->subject('Redefinição de Senha')->view('emails.cbrancoadv.forgot_password');
    }
}

