<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ControllerCadastro extends Controller
{
    public function cadastroUsuario(){
        return view('usuario.cadastroUsu');
    }
    
    public function salvar(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();
        // dd($usuario);
        return view('usuario.infoCadastro', compact('usuario'));
    }
    public function lista(){
        $usuarios = Usuario::All();
        // dd($usuario);
        return view('usuario.listaUsuario', compact('usuarios'));
    }
    public function editaUsuario($id){
        
        // dd($id);
        $usuario = Usuario::where('id',$id)->first();
        // dd($usuario);
        return view('usuario.editacadastro', compact('usuario'));
    }

    public function salvarEdicao(Request $request){
        
        $usuario = Usuario::where('id',$request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->update();
        // dd($usuario);
        return redirect(route('listaUsuario'));
    }
    public function excluirUsuario($id){
        
        // $usuario = Usuario::where('id',$id)->first();
        Usuario::destroy($id);
        // dd($usuario);
        return redirect(route('listaUsuario'));
    }

    public function menu(){
        return view('menu');
    }


}
