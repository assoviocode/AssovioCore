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
        'url_logo',
        'mail_folder'
    ];
    
    public function getName() {
        return $this->attributes['name'];
    }
    
    public function setName(string $name) {
        $this->attributes['name'] = $name;
    }
    
    public function getEmailAttribute() {
        return $this->attributes['email'];
    }
    
    public function setEmailAttribute(string $email) {
        $this->attributes['email'] = $email;
    }
    
    public function getEmailFolder() {
        return $this->attributes['mail_folder'];
    }
    
    public function setEmailFolder(string $email) {
        $this->attributes['mail_folder'] = $email;
    }
}