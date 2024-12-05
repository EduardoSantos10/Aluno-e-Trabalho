<x-layout titulo="Cadastrar">
    <form action="cadastrarTrabalho/salvar" method="GET">

        @csrf <!-- Libera as Portas de cadastro -->
        <label name="tema">Tema do Trabalho</label>
        <input type="text" name="tema"><br><br>

        <label name="materia">Selecionar Materia</label>
        <input type="text" name="materia"></input>
        <br><br>

        <label name="dataInicio">Data de Inicio do Trabalho</label>
        <input type="date" name="dataInicio"></input>
        <br><br>

        <label name="dataTermino">Data de Conclusão</label>
        <input type="date" name="dataTermino"></input>
        <br><br>

        <label name="nota">Nota Final</label>
        <input type="text" name="nota"></input>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>