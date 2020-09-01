<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competidores;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }

    public function salvarcompetidor(Request $r){
        $r->validate([
            'nome' => 'required|max:80',
            'descricao' => 'required',
            'ponto' => 'required',
        ]);
        
        Competidores::create($r->except('_token'));
        return redirect()->route('home');
    }
}
