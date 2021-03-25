<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCadastro extends Controller
{
    function cadastro(){
        return view('cadastro');
    }
}
