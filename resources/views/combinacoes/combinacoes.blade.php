<x-app-layout>
    <div class="container">
    <form method="POST" action="combinacoes" enctype="multipart/form-data">
    @csrf

    <h1>Combinações</h1>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <br>

    <label for="link">Link:</label>
    <input type="text" id="link" name="link" required>
    <br>

    <label for="oca_esp">Oca Esp:</label>
    <input type="text" id="oca_esp" name="oca_esp" required>
    <br>

    <label for="imagem">Imagem:</label>
    <input type="file" id="imagem" name="imagem">
    <br>

    <button type="submit">Enviar</button>
</form>

    </div>
</x-app-layout>