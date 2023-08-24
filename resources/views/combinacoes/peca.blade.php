<x-app-layout>
    <div class="container">
        <form action="peca" method="post">
        @csrf
        <h1>Cadastrar Peca</h1>
            <p>Nome da Peça</p>
            <input type="text" name="nome" id="nome" placeholder="Nome da Peça">
            <br>
            <p>Valor da Peça</p>
            <input type="text" name="valor" id="valor" placeholder="Valor da Peça">
            <br><br>
            <input type="submit" value="Salvar" >
        </form>

        <a href="dashboard">Voltar</a>
    </div>
</x-app-layout>