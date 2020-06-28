<?php
namespace App\Http\Controllers;

use App\ContactWebsite;
use App\Mail\EmailContactWebSite;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{

    public function __construct()
    {
        $this->classModel = ContactWebsite::class;
    }

    public function send()
    {
        $contactsToSend = ContactWebsite::where('sent', false)->get();

        if (is_null($contactsToSend) || count($contactsToSend) == 0) {
            return response()->json([
                'message' => 'Não há contato a ser enviado!'
            ], 200);
        }

        foreach ($contactsToSend as $contact) {
            try {
                $email = $contact->client->email;
                Mail::to($email)->send(new EmailContactWebSite());
                $contact->sent = true;
                $contact->save();
            } catch (\Exception $e) {
                echo ($e);
            }
        }
    }
}
