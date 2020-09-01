<?php

use Illuminate\Support\Facades\Route;
use App\Models\Competidores;

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/listagem', 'ListagemController@listagem')->name('listagem.competidor');
Route::get('/ranking', 'RankingController@ranking_Competidor')->name('ranking.competidor');
Route::get('/informação-competidor', 'CompetidorController@informacao_Competidor')->name('informacao.competidor');

Route::get('/criar-competidor', 'CadastroController@cadastro')->name('cadastro.competidor');
Route::post('/salvar-competidor', 'CadastroController@salvarcompetidor')->name('salvar.competidor');