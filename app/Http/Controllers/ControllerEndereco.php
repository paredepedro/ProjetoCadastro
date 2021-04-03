<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class ControllerEndereco extends Controller
{
    //exibe a tela de cadastramento de endereco
    public function cadastroEndereco(){
        return view('endereco.cadastroEnd');
    }
    public function salvar(Request $request){
        $endereco = new Endereco();
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->save();
        // dd($endereco);
        return view('endereco.infoCadastro', compact('endereco'));
    }
    public function lista(){
        $enderecos = Endereco::All();
        // dd($usuario);
        return view('endereco.listaEndereco', compact('enderecos'));
    }
    
    public function editaEndereco($id){
        
        // dd($id);
        $endereco = Endereco::where('id',$id)->first();
        // dd($usuario);
        return view('endereco.editacadastro', compact('endereco'));
    }
    public function salvarEdicao(Request $request){
        
        $endereco = Endereco::where('id',$request->id)->first();
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->update();
        // dd($endereco);
        return redirect(route('listaEndereco'));
    }
    public function excluirEndereco($id){        
        Endereco::destroy($id);
        return redirect(route('listaEndereco'));
    }
}
