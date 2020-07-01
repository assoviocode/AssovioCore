<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    
    protected $fillable = [
        'name',
        'email',
        'key',
        'url_site',
        'url_logo'
    ];
    
    public function getEmailAttribute() {
        return $this->attributes['email'];
    }
    
    public function setEmailAttribute(string $email) {
        $this->attributes['email'] = $email;
    }
}

