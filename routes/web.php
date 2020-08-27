<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@homepage')->name('home');
Route::get('/listagem', 'listagemController@homepage')->name('listagem');
Route::get('/ranking', 'rankingController@cadastro')->name('ranking');

Route::get('/criar-competidor', 'CadastroController@cadastro')->name('cadastro');
Route::post('/salvar-competidor', 'CadastroController@salvarcompetidor')->name('salvarcompetidor');