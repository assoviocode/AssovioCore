<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoSite extends Model
{

    protected $table = 'core_contato_site';

    protected $fillable = [
        'email',
        'phone',
        'subject',
        'message',
        'sent'
    ];
}

