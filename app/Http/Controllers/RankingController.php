<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function ranking_Competidor(){
        return view('ranking');
    }
}