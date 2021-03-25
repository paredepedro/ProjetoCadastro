<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCadastro extends Controller
{
    function cadastro(){
        return view('cadastro');
    }
    function exibir(Request $request){
        $nomeCompleto = $request->nome;
        $dataNascimento = $request->data;
        $senha = $request->senha;
        $matricula = $request->matricula;

        return view('infoCadastro', compact('nomeCompleto','dataNascimento','senha','matricula'));
    }
    function lista(){
        return view('listaUsuario');
    }
}
