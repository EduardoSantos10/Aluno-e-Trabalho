<x-layout titulo="Atualizar">
    <form action="atualizar/salvar" method="GET">

        
        <label name="metodoAtualizar">Atualizar Dado</label>
        <input type="date" name="dataEvento"><br><br>

        <label name="descricao">Descrição</label>
        <textArea type="text" name="descricaoTexto"></textArea>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>