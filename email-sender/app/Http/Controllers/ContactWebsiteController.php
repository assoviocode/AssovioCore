<?php
namespace App\Http\Controllers;

use App\ContactWebsite;
use App\Mail\EmailContactWebSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Client;

class ContactWebsiteController extends Controller
{

    public function __construct()
    {
        $this->classModel = ContactWebsite::class;
    }
    
    public function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|max:800',
            'key' => 'required'
        ]);
        
        $client = Client::where('key', $request->key)->first();
        
        if (is_null($client)) {
            return response()->json([
                'message' => 'Bad request'
            ], 401);
        }
        
        $request['client_id'] = $client->id;
        
        parent::store($request);       
        
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
