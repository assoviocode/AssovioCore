<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactWebsite extends Model
{

    protected $table = 'contact_website';

    protected $fillable = [
        'email',
        'phone',
        'subject',
        'message',
        'sent',
        'client_id'
    ];
    
    public function client(){
        return $this->belongsTo('App\Client');
    }
    
    public function setSentAttribute(bool $sent){
        $this->attributes['sent'] = $sent;
    }
}

