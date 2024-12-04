<x-layout titulo="Cadastrar">
    <form action="cadastrarTrabalho/salvar" method="GET">

        @csrf <!-- Libera as Portas de cadastro -->
        <label name="tema">Tema do Trabalho</label>
        <input type="text" name="nome"><br><br>

        <label name="materia">Selecionar Materia</label>
        <textArea type="text" name="text"></textArea>
        <br><br>

        <label name="dataInicio">Data de Inicio do Trabalho</label>
        <textArea type="dateTime" name="dataInicio"></textArea>
        <br><br>

        <label name="dataTermino">Data de Conclusão</label>
        <textArea type="dateTime" name="dataTermino"></textArea>
        <br><br>

        <label name="nota">Nota Final</label>
        <textArea type="text" name="nota"></textArea>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>