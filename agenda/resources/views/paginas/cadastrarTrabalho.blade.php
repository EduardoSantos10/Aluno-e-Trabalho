<x-layout titulo="Cadastrar">
    <form action="cadastrar/salvar" method="GET">

        @csrf <!-- Libera as Portas de cadastro -->
        <label name="nome">Nome do Aluno</label>
        <input type="text" name="nome"><br><br>

        <label name="idade">Idade</label>
        <textArea type="number" name="idade"></textArea>
        <br><br>

        <label name="telefone">Telefone</label>
        <textArea type="number" name="telefone"></textArea>
        <br><br>

        <label name="endereco">Endereço</label>
        <textArea type="number" name="endereco"></textArea>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>