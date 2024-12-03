<x-layout titulo="Excluir">
    <form action="excluir/salvar" method="GET">

        @csrf <!-- Libera as Portas de cadastro -->
        <label name="exclusao">Exclusão</label>
        <input type="date" name="dataEvento"><br><br>

        <label name="descricao">Descrição</label>
        <textArea type="text" name="descricaoTexto"></textArea>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>