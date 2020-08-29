<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }
     
    public function salvarcompetidor(Request $r){
        $r->validate([
            'nome' => 'required|max:30',
            'descricao' => 'required|max:300|descripiton',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pontos' => 'required|max:5',
        ]);
    }
}
