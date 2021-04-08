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

Route::get('/', function () {
    return view('welcome');
});

//Rota da home page
// route::get('/home-page', 'App\Http\Controllers\ControllerCadastro@menu')->name('menu');


// //rotas de cadastro de usuário e de endereço
// route::get('/cadastro-usuario', 'App\Http\Controllers\ControllerCadastro@cadastroUsuario')->name('cadastroUsuario');
// route::get('/cadastro-endereco', 'App\Http\Controllers\ControllerEndereco@cadastroEndereco')->name('cadastroEndereco');


// //rotas para exibir o cadastro
// route::post('/cadastro-exibir-usuario', 'App\Http\Controllers\ControllerCadastro@salvar')->name('cadastroExibirUsuario');
// route::post('/cadastro-exibir-endereco', 'App\Http\Controllers\ControllerEndereco@salvar')->name('cadastroExibirEndereco');

// //rotas para exibir a lista de cadastro
// route::get('/lista-usuario', 'App\Http\Controllers\ControllerCadastro@lista')->name('listaUsuario');
// route::get('/lista-endereco', 'App\Http\Controllers\ControllerEndereco@lista')->name('listaEndereco');



// //rotas para editar, excluir e salvar edição do cadastro
// route::get('/editar-cadastro-usuario/{id}', 'App\Http\Controllers\ControllerCadastro@editaUsuario')->name('editaUsuario');
// route::get('/excluir-cadastro-usuario/{id}', 'App\Http\Controllers\ControllerCadastro@excluirUsuario')->name('deletaUsuario');
// route::post('/editar-salva-usuario', 'App\Http\Controllers\ControllerCadastro@salvarEdicao')->name('salvaEdicaoUsuario');

// route::get('/editar-cadastro-endereco/{id}', 'App\Http\Controllers\ControllerEndereco@editaEndereco')->name('editaEndereco');
// route::get('/excluir-cadastro-endereco/{id}', 'App\Http\Controllers\ControllerEndereco@excluirEndereco')->name('deletaEndereco');
// route::post('/editar-salva-endereco', 'App\Http\Controllers\ControllerEndereco@salvarEdicao')->name('salvaEdicaoEndereco');
// ;

route::get('/home-page', function(){
    return view('menu');
});

route::prefix('usuario-endereco')->group(function(){
    Route::get('usuario-endereco', 'App\Http\Controllers\NovoController@createUsuarioEndereco')->name('createUsuarioEndereco');
    Route::post('salva','App\Http\Controllers\NovoController@save')->name('saveUsuarioEndereco');
});

route::prefix('usuario')->group(function(){
    Route::get('create', 'App\Http\Controllers\UsuarioController@create')->name('createUsuario');
    Route::post('save', 'App\Http\Controllers\UsuarioController@save')->name('saveUsuario');
    Route::get('edit', 'App\Http\Controllers\UsuarioController@edit')->name('editUsuario');
    Route::post('update', 'App\Http\Controllers\UsuarioController@update')->name('updateUsuario');
    Route::get('list', 'App\Http\Controllers\UsuarioController@list')->name('listUsuario');
    Route::get('delete', 'App\Http\Controllers\UsuarioController@delete')->name('deleteUsuario');
});
route::prefix('endereco')->group(function(){
    Route::get('create', 'App\Http\Controllers\EnderecoController@create')->name('createEndereco');
    Route::post('save', 'App\Http\Controllers\EnderecoController@save')->name('saveEndereco');
    Route::get('edit', 'App\Http\Controllers\EnderecoController@edit')->name('editEndereco');
    Route::post('update', 'App\Http\Controllers\EnderecoController@update')->name('updateEndereco');
    Route::get('list', 'App\Http\Controllers\EnderecoController@list')->name('listEndereco');
    Route::get('delete', 'App\Http\Controllers\EnderecoController@delete')->name('deleteEndereco');
});