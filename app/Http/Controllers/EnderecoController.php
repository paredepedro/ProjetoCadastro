<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Endereco;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    //exibe a tela de cadastramento de endereco
    public function create(){
        return view('endereco.cadastroEnd');
    }
    public function save(Request $request){
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
    public function list(){
        $enderecos = Endereco::All();
        // dd($usuario);
        return view('endereco.listaEndereco', compact('enderecos'));
    }
    
    public function edit($id){
        
        // dd($id);
        $endereco = Endereco::where('id',$id)->first();
        // dd($usuario);
        return view('endereco.editacadastro', compact('endereco'));
    }
    public function update(Request $request){
        
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
        return redirect(route('listEndereco'));
    }
    public function delete($id){        
        Endereco::destroy($id);
        return redirect(route('listEndereco'));
    }
}
