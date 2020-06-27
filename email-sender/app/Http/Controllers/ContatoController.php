<?php

namespace App\Http\Controllers;

use App\ContatoSite;

class ContatoController extends Controller
{
    public function __construct()
    {
        $this->classModel = ContatoSite::class;
    }
}
