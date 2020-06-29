<?php
namespace App\Http\Controllers;

use App\ContactWebsite;
use App\Mail\EmailContactWebSite;
use Illuminate\Support\Facades\Mail;

class ContactWebsiteController extends Controller
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
                'message' => 'Não há emails a serem enviados!'
            ]);
        }

        $successfullySent = 0;
        
        foreach ($contactsToSend as $contact) {
            try {
                $email = $contact->client->email;
                Mail::to($email)->send(new EmailContactWebSite($contact));
                $contact->sent = true;
                $contact->save();
                $successfullySent++;
            } catch (\Exception $e) {
                echo ($e);
            }
        }
        
        return response()->json([
            'message' => 'Emails enviados com sucesso!',
            'quantity' => $successfullySent
        ]);
    }
}
