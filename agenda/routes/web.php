<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/index', function(){
    return view('paginas/index');
});

Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});

Route::get('/atualizar', function(){
    return view('paginas/atualizar');
});

Route::get('/excluir', function(){
    return view('paginas/excluir');
});

Route::get('/cadastrar', [\App\Http\Controllers\registrarAtividadeController::class, 'index']);
Route::get('/cadastrar/salvar', [App\Http\Controllers\registrarAtividadeController::class, 'store']);
Route::get('/consultar', [\App\Http\Controllers\registrarAtividadeController::class, 'consultar']);
Route::get('/editar/{id}',[\App\Http\Controllers\registrarAtividadeController::class, 'editar']);
Route::get('/atualizar/{id}',[\App\Http\Controllers\registrarAtividadeController::class, 'atualizar']);
Route::get('/excluir/{id}',[\App\Http\Controllers\registrarAtividadeController::class, 'excluir']);

Route::get('/cadastrarTrabalho',[\App\Http\Controllers\registrarAtividadeControllerTrabalho::class, 'index']);
Route::get('/cadastrarTrabalho/salvar',[App\Http\Controllers\registrarAtividadeControllerTrabalho::class, 'store']);
Route::get('/consultarTrabalho', [\App\Http\Controllers\registrarAtividadeControllerTrabalho::class, 'consultar']);
Route::get('/editarTrabalho/{id}',[\App\Http\Controllers\registrarAtividadeControllerTrabalho::class, 'editar']);
Route::get('/atualizarTrabalho/{id}',[\App\Http\Controllers\registrarAtividadeControllerTrabalho::class, 'atualizar']);
Route::get('/excluirTrabalho/{id}',[\App\Http\Controllers\registrarAtividadeControllerTrabalho::class, 'excluir']);


