<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\GaleriaController;

//Route::get('App\Http\Controllers\principal', 'PrincipalController@principal');
//Route::get('App\Http\Controllers\sobre-nos', 'SobreNosController@sobreNos');
//Route::get('App\Http\Controllers\contato', 'ContatoController@contato');

Route::get('/', [PrincipalController::class, 'principal']) ->name('site.principal');
Route::get('/contato', [ContatoController::class, 'contato']) ->name('site.contato');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']) ->name('site.sobre-nos');
Route::get('/galeria', [GaleriaController::class, 'galeria']) ->name('site.galeria');