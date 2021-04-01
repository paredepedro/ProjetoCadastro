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
    function editaUsuario($id){
        
        // dd($id);
        $usuario = Usuario::where('id',$id)->first();
        // dd($usuario);
        return view('usuario.editacadastro', compact('usuario'));
    }

    function salvarEdicao(Request $request){
        
        $usuario = Usuario::where('id',$request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->update();
        // dd($usuario);
        return redirect(route('listaUsuario'));
    }
    function excluirUsuario($id){
        
        // $usuario = Usuario::where('id',$id)->first();
        Usuario::destroy($id);
        // dd($usuario);
        return redirect(route('listaUsuario'));
    }



}
