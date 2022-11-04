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

Route::get('/', 'PrincipalController@principal');

Route::get('/contato', 'ContatoController@contato');

Route::get('/sobrenos', 'SobreNosController@sobreNos');

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(String $nome, String $categoria, String $assunto, String $mensagem = null){
    echo 'Nome '.$nome."<br>";
    echo 'Categoria '.$categoria."<br>";
    echo 'Assunto '.$assunto."<br>";
    echo 'Mensagem '.$mensagem."<br>";

});
Route::get('/categoria/{nome}/{categoria_id}', function(String $nome = "Unkown", int $categoria_id = 1){
    echo 'Nome '.$nome."<br>";
    echo 'Categoria ID '.$categoria_id."<br>";
})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');

