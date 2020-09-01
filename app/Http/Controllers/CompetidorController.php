<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competidores;

class CompetidorController extends Controller
{
    public function informacao_competidor(){
        $competidor = Competidores::where(all)
        return view('competidor', compact('competidor'));
    }
}
