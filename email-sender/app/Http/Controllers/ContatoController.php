<?php
namespace App\Http\Controllers;

use App\ContatoSite;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailContatoSite;

class ContatoController extends Controller
{

    public function __construct()
    {
        $this->classModel = ContatoSite::class;
    }

    public function send()
    {
        try {
            Mail::to("rodrigo@loopes.com.br")->cc([])
                ->bcc([])
                ->send(new EmailContatoSite());
        } catch (\Exception $e) {
            echo ($e);
        }
    }
}
