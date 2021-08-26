<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //use HasFactory;

    // para indicar em qual tabela vai ser salvo os negocios podemos usar
    protected $table = 'fornecedors';
    protected $fillable = ['nome','site','uf','email'];
}
