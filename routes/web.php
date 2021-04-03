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
route::get('/home-page', 'App\Http\Controllers\ControllerCadastro@menu')->name('menu');


//rotas de cadastro de usuário e de endereço
route::get('/cadastro-usuario', 'App\Http\Controllers\ControllerCadastro@cadastroUsuario')->name('cadastroUsuario');
route::get('/cadastro-endereco', 'App\Http\Controllers\ControllerEndereco@cadastroEndereco')->name('cadastroEndereco');


//rotas para exibir o cadastro
route::post('/cadastro-exibir-usuario', 'App\Http\Controllers\ControllerCadastro@salvar')->name('cadastroExibirUsuario');
route::post('/cadastro-exibir-endereco', 'App\Http\Controllers\ControllerEndereco@salvar')->name('cadastroExibirEndereco');

//rotas para exibir a lista de cadastro
route::get('/lista-usuario', 'App\Http\Controllers\ControllerCadastro@lista')->name('listaUsuario');
route::get('/lista-endereco', 'App\Http\Controllers\ControllerEndereco@lista')->name('listaEndereco');



//rotas para editar, excluir e salvar edição do cadastro
route::get('/editar-cadastro-usuario/{id}', 'App\Http\Controllers\ControllerCadastro@editaUsuario')->name('editaUsuario');
route::get('/excluir-cadastro-usuario/{id}', 'App\Http\Controllers\ControllerCadastro@excluirUsuario')->name('deletaUsuario');
route::post('/editar-salva-usuario', 'App\Http\Controllers\ControllerCadastro@salvarEdicao')->name('salvaEdicaoUsuario');

route::get('/editar-cadastro-endereco/{id}', 'App\Http\Controllers\ControllerEndereco@editaEndereco')->name('editaEndereco');
route::get('/excluir-cadastro-endereco/{id}', 'App\Http\Controllers\ControllerEndereco@excluirEndereco')->name('deletaEndereco');
route::post('/editar-salva-endereco', 'App\Http\Controllers\ControllerEndereco@salvarEdicao')->name('salvaEdicaoEndereco');
;
