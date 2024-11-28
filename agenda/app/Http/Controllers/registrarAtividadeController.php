<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloAgenda;

class registrarAtividadeController extends Controller
{
    public function index(){
        $dados = modeloAgenda::all();// Todos os dados do banco
        return view('paginas.cadastrar')->with('dados', $dados);
    }

    public function store(Request $request){
        $data = $request->input('dataEvento');
        $descricao = $request->input('descricaoTexto');

        $model = new modeloAgenda();
        $model->dataEvento = $data;
        $model->descricao = $descricao;

        $model->save(); //Armazena no BD
        return redirect('/cadastrar');
    }

    public function consultar(){
        $ids = modeloAgenda::all();
        return view('paginas.consultar', compact('ids'));
    }
}
