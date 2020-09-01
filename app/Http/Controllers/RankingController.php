<?php

namespace App\Http\Controllers;
use App\Models\Competidores;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function ranking_Competidor(){
        $competidor = Competidores::orderBy('ponto', 'DESC')->get();
        return view('ranking', compact('competidor'));
    }
}
