<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    // definar uma funcao para trabalhar no controler

    public function principal()
    {
        // esse site.principal é o diretorio e o arquivo que quero abrir respectivamente
        return view('site.principal');
    }
}
