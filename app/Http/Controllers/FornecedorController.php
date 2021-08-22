<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        //$lista_fornecedores = ['Leticia Magalhaes','Lucas Migliorin'];

        $lista_fornecedores = [0 => ['nome' => 'Lucas',
                                     'idade' => 20,
                                     'cidade' => 'amazonas',
                                     'sexo' => 'M']
                                ,1 => ['nome' => 'Leticia',
                                            'idade' => 20,
                                            'cidade' => 'amazonas',
                                            ]];
        //$lista_fornecedores = ['nomes'=> []];
        return view('app.fornecedor.index',compact('lista_fornecedores'));
    }
}
