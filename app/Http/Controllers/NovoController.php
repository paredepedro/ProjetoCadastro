<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Endereco;

use Illuminate\Http\Request;

class NovoController extends Controller
{
    public function createUsuarioEndereco(){
        return view('cadastroUsuarioEndereco');
    }
    public function save(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();

        $endereco = new Endereco();
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->usuario_id= $usuario->id;
        $endereco->save();
        
        return redirect(route('listEndereco'));
    }
}
