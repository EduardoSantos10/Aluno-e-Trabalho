<x-layout titulo="Editar">
    <form action="/atualizarTrabalho/{{$dado->id}}" method="get">
    
        <label>Alterar Tema </label>
        <input type="text" id="tema" name="tema" value="{{$dado->tema}}" required/>
        <br><br>
 
        <label>Selecione Uma Matéria </label>
        <input type="text" id="materia" name="materia"  value="{{$dado->materia}}" required/>
        <br><br>
 
        <label>Alterar Inicio </label>
        <input type="date" id="dataInicio" name="dataInicio" value="{{$dado->dataInicio}}" required/>
        <br><br>

        <label>Alterar Término </label>
        <input type="date" id="dataTermino" name="dataTermino" value="{{$dado->dataTermino}}" required/>
        <br><br>

        <label>Modificar Nota </label>
        <input type="text" id="nota" name="nota" value="{{$dado->nota}}" required/>
        <br><br>
 
        <button type="submit">Atualizar</button>

        
    </form>

    <a href="/index"><button>Voltar</button></a>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Excluir
    </button>

            <!--Modal-->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir o código: {{$dado->id}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <a type="button" class="btn btn-primary" href="/excluirTrabalho/{{$dado->id}}">Sim</a>
            </div>
            </div>
        </div>
        </div>

</x-layout>