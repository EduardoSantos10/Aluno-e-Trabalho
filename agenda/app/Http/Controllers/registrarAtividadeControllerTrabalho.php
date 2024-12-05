<?php

namespace App\Http\Controllers;

use App\Models\modeloTrabalho;
use Illuminate\Http\Request;
use App\Models\modeloAgenda;

class registrarAtividadeControllerTrabalho extends Controller
{
    public function index(){
        $dados = modeloTrabalho::all();// Todos os dados do banco
        return view('paginas.cadastrarTrabalho')->with('dados', $dados);
    }

    public function store(Request $request){
        $tema = $request->input('tema');
        $materia = $request->input('materia');
        $dataInicio = $request->input('dataInicio');
        $dataTermino = $request->input('dataTermino');
        $nota = $request->input('nota');

        $model = new modeloTrabalho();
        $model->tema = $tema;
        $model->materia = $materia;
        $model->dataInicio = $dataInicio;
        $model->dataTermino = $dataTermino;
        $model->nota = $nota;
        

        $model->save(); //Armazena no BD
        return redirect('/cadastrarTrabalho');
    }


    public function consultar(){
        $ids = modeloTrabalho::all();
        return view('paginas.consultarTrabalho', compact('ids'));
    }

    public function editar($id){
        $dado = modeloTrabalho::findOrFail($id);
        return view('paginas.editarTrabalho', compact('dado'));
    }

    public function atualizar(Request $request, $id){
        modeloTrabalho::where('id', $id)-> update($request->all());
        return redirect('/consultarTrabalho');
    }

    public function excluir(Request $request, $id){
        modeloTrabalho::where('id', $id)->delete($request->all());
        return redirect('/consultarTrabalho');
    }
}


?>