<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*

Método sem controllers

Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso';
});
*/

/*
Passando uma funcao para o Objeto Route ele interpreta que é callback, caso seja uma string ele entende que é um controler na versao 7.x do laravel
Para a nova versão é feito conforme abaixo

Versão 8.x ---> Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);
Versão 7.x ---> Route::get('/','PrincipalController@principal');


Route::get('/sobre-nos', function () {
    return 'Sobre nós';
});

Route::get('/contato', function () {
    return 'Contato';
});

*/
// Podemos renomear as rotas para ficarem melhore com o método name, em vez de usar o caminho absotulo dentro da aplicacao, Ex.: /sobre-nos
Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']) -> name('site.index');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']) -> name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'contato']) -> name('site.contato');
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos']) -> name('site.sobrenos');

/*
// futuramente implementar as informacoes que seram recebidas pelo contato: nome, categoria, assunto e mensagem


// o que importa é a ordem dos parametros, nao importa o nome ser igual
// ? represena valor opcional

Route::get(
    '/contato/{nome}/{categoria}/{assunto}/{mensagem?}',
    function (string $varivavel_entrada, string $segunda_variavel,string $assunto, string $mensagem = 'mensagem padrao'){

        echo("Nome: $varivavel_entrada\nCategoria: $segunda_variavel\nAssunto: $assunto\nMensagem: $mensagem");
});

*/

/*
// where e um parametro que permite fazer tratativas por regex
Route::get(
    '/contato/{nome}/{categoria_id}',
    function (string $nome,
              int $categoria_id
              ){

        echo("Nome: $nome - Categoria: $categoria_id");
}) -> where('categoria_id','[0-9]+') -> where('nome','[A-Za-z]+');

*/


Route::get('/login',function (){ return 'Login';}) -> name('site.login');

// Para agrupar uma lista de rotas podemos usar o Route::prefix e entao definir um nome de grupo qualquer, no caso sera app

Route::prefix('/app') -> group(function (){

    Route::get('/clientes',function (){ return 'Clientes';}) -> name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedorController::class,'index']) -> name('app.fornecedores');
    Route::get('/produtos',function (){ return 'Produtos';}) -> name('app.produtos');


});


// Tudo isso posso ta utilizando controllers que é o mais recomendado, porem so pra fins de aprendizado to fazendo isso
Route::get('/rota1',function (){echo "Rota 1";}) -> name('site.rota1');

Route::get('/rota2',function (){return redirect() -> route('site.rota1');}) -> name('site.rota2');


Route::get('/teste/{usuario}/{senha}',[\App\Http\Controllers\TeseController::class,'printar_info']) -> name('site.teste');



// Rotas de contingencia para controlar rotas que nao existem na aplicacao
Route::fallback(function(){
    echo "Pagina nao encontrada";
});