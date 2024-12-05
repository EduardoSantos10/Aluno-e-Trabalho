<x-layout titulo="Cadastrar">
    <form action="cadastrar/salvar" method="GET">

        @csrf <!-- Libera as Portas de cadastro -->
        <label name="nome">Nome do Aluno</label>
        <input type="text" name="nome"><br><br>

        <label name="idade">Idade</label>
        <input type="text" name="idade"></input>
        <br><br>

        <label name="telefone">Telefone</label>
        <input type="text" name="telefone"></input>
        <br><br>

        <label name="endereco">Endereço</label>
        <input type="text" name="endereco"></input>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>