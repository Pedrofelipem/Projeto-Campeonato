<?php

namespace App\Http\Controllers;
use App\Models\Competidores;


use Illuminate\Http\Request;

class ListagemController extends Controller
{
    public function listagem (){
        $competidor = Competidores::orderBy('nome', 'ASC')->get();
            return view('listagem', compact('competidor'));
        }
}
   
        