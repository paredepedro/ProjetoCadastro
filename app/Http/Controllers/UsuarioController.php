<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Endereco;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create(){
        return view('usuario.cadastroUsu');
    }
    
    public function save(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();
        // dd($usuario);
        return view('usuario.infoCadastro', compact('usuario'));
    }
    public function list(){
        $usuarios = Usuario::All();
        // dd($usuario);
        return view('usuario.listaUsuario', compact('usuarios'));
    }
    public function edit($id){
        
        // dd($id);
        $usuario = Usuario::where('id',$id)->first();
        // dd($usuario);
        return view('usuario.editacadastro', compact('usuario'));
    }

    public function update(Request $request){
        
        $usuario = Usuario::where('id',$request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->update();
        // dd($usuario);
        return redirect(route('listUsuario'));
    }
    public function delete($id){
        
        // $usuario = Usuario::where('id',$id)->first();
        Usuario::destroy($id);
        // dd($usuario);
        return redirect(route('listUsuario'));
    }
}
