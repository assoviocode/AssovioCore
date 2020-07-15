<?php
namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CBrancoAdv\MailForgotPassword;
use Laravel\Lumen\Routing\Controller as BaseController;

class BrancoAdvController extends BaseController
{

    public function sendForgotPassword(Request $request)
    {
        $this->validate($request, [
            'client_name' => 'required|max:255',
            'email' => 'required|email',
            'link_button' => 'required'
        ]);

        Mail::to($request->email)->send(new MailForgotPassword($request->link_button, $request->client_name));

        return response()->json([
            'message' => 'Email enviado com sucesso!'
        ]);
    }
}

