<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListagemController extends Controller
{
    public function listagem(){
        return view('listagem');
    }
    
}
