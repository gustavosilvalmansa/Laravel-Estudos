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
