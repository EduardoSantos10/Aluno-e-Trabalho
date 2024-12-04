<x-layout titulo="Atualizar">
    <form action="atualizar/salvar" method="GET">

        <label name="nome">Atualizar Nome</label>
        <input type="text" name="nome"><br><br>

        <label name="idade">Idade</label>
        <textArea type="text" name="idade"></textArea>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>