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

route::get('/cadastro', 'App\Http\Controllers\ControllerCadastro@cadastro');
route::get('/lista-usuario', 'App\Http\Controllers\ControllerCadastro@lista')->name('listaUsuario');

route::post('/cadastro-exibir', 'App\Http\Controllers\ControllerCadastro@salvar')->name('cadastroExibir');

route::get('/editar-cadastro/{id}', 'App\Http\Controllers\ControllerCadastro@editaUsuario')->name('editaUsuario');
route::get('/excluir-cadastro/{id}', 'App\Http\Controllers\ControllerCadastro@excluirUsuario')->name('deletaUsuario');
route::post('/editar-salva', 'App\Http\Controllers\ControllerCadastro@salvarEdicao')->name('salvaEdicao');
