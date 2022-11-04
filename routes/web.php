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

Route::get('/login', function(){return "login";});


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return "clientes";});
    Route::get('/fornecedores', function(){return "fornecedores";});
    Route::get('/produtos', function(){return "produtos";});
});


Route::get('/categoria/{nome}/{categoria_id}', function(String $nome = "Unkown", int $categoria_id = 1){
    echo 'Nome '.$nome."<br>";
    echo 'Categoria ID '.$categoria_id."<br>";
})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');

