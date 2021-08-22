<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeseController extends Controller
{
    public function printar_info(string $usuario,string $senha)
    {
        //echo "Usuario: $usuario - Senha: $senha";
        //return view('teste',['usuario' => $usuario,'senha' => $senha]); // array associativa

        //return view('teste',compact('usuario','senha')); // usando o compact do proprio php


        // with(pa1,pa2), pa1 é o nome que sera usado na view e o pa2 é oq recebemos aq no controler
        return view('teste') -> with('usuario',$usuario) -> with('senha',$senha); // método do laravel nao muito amigável

    }
}
