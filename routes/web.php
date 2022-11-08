<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/sobrenos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/login', function(){return "login";})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return "clientes";})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return "produtos";})->name('app.produtos');
});


Route::get('/categoria/{nome}/{categoria_id}', function(String $nome = "Unkown", int $categoria_id = 1){
    echo 'Nome '.$nome."<br>";
    echo 'Categoria ID '.$categoria_id."<br>";
})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


Route::get('/redir1', function(){
    echo 'Rota 1';
})->name('site.redir1');


Route::get('/redir2', function(){
    return redirect()->route('site.redir1');
})->name('site.redir2');

Route::fallback(function(){
    echo  "Rota de Fallback <a href='".route('site.index')."'>Clique aqui para retornar</a>";
});