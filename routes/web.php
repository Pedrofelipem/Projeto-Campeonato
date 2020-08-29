<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/listagem', 'ListagemController@listagem')->name('listagem');
Route::get('/ranking', 'RankingController@ranking_Competidor')->name('ranking');

Route::get('/criar-competidor', 'CadastroController@cadastro')->name('cadastro');
Route::post('/salvar-competidor', 'CadastroController@salvarcompetidor')->name('salvarcompetidor');