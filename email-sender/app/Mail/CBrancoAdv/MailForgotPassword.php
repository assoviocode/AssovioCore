<?php
namespace App\Mail\CBrancoAdv;

class MailForgotPassword extends MailBrancoAdv
{

    public $linkButton;

    public $clientName;

    public function __construct(string $linkButton, string $clientName)
    {
        $this->linkButton = $linkButton;
        $this->clientName = $clientName;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), $this->fromName)->subject('Redefinição de Senha')->view('emails.cbrancoadv.forgot_password');
    }
}

