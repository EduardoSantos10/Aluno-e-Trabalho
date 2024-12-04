<?php

namespace App\Http\Controllers;

use App\Models\modeloAluno;
use Illuminate\Http\Request;
use App\Models\modeloAgenda;

class registrarAtividadeController extends Controller
{
    public function index(){
        $dados = modeloAluno::all();// Todos os dados do banco
        return view('paginas.cadastrar')->with('dados', $dados);
    }

    public function store(Request $request){
        $nome = $request->input('nome');
        $idade = $request->input('idade');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');

        $model = new modeloAluno();
        $model->nome = $nome;
        $model->idade = $idade;
        $model->telefone = $telefone;
        $model->endereco = $endereco;

        $model->save(); //Armazena no BD
        return redirect('/cadastrar');
    }


    public function consultar(){
        $ids = modeloAluno::all();
        return view('paginas.consultar', compact('ids'));
    }

    public function editar($id){
        $dado = modeloAluno::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }

    public function atualizar(Request $request, $id){
        modeloAluno::where('id', $id)-> update($request->all());
        return redirect('/consultar');
    }

    public function excluir(Request $request, $id){
        modeloAluno::where('id', $id)->delete($request->all());
        return redirect('/excluir');
    }
}


?>