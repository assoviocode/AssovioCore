<?php
namespace app\Http\Controllers;

use App\Client;
use App\Mail\EmailRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravel\Lumen\Routing\Controller as BaseController;

class RegisterController extends BaseController
{

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'link' => 'required',
            'key' => 'required'
        ]);

        $client = Client::where('key', $request->key)->first();

        if (is_null($client)) {
            return response()->json([
                'message' => 'Bad request'
            ], 401);
        }

        Mail::to($request->email)->send(new EmailRegister($request->link, $request->name, $client));

        return response()->json([
            'message' => 'Email enviado com sucesso!'
        ]);
    }
}

