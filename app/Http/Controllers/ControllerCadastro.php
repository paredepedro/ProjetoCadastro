<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class ControllerCadastro extends Controller
{
    function cadastro(){
        return view('cadastro');
    }
    function salvar(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();
        // dd($usuario);
        return view('usuario.infoCadastro', compact('usuario'));
    }
    function lista(){
        $usuarios = Usuario::All();
        // dd($usuario);
        return view('usuario.listaUsuario', compact('usuarios'));
    }
}
