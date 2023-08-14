<x-app-layout>
    <div class="container">
    <form action="combinacoes" method="post">
        <h1>Combinacões</h1>
        <br>
        <label for="nome">Nome:<input type="text" name="nome" id="nome" placeholder="Nome da Combinaçãp"></label>
        <br><br>
        <label for="img">Imagem:<input type="text" name="img" id="img_campo" placeholder="Nome da Combinaçãp"></label>
        <br><br>
        <label for="link">Link:<input type="text" name="link" id="link" placeholder="Nome da Combinaçãp"></label>
        <br><br>
        <label for="Oca">Ocasião Especifica:<input type="text" name="oca" id="oca" placeholder="Nome da Combinaçãp"></label>
        <br><br>
        <input type="submit" value="Salvar">
    </form>
    </div>
</x-app-layout>