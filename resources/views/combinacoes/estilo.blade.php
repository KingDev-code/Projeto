<x-app-layout>
    <div class="container">
        <h1>Adicionar Estilo</h1>
        <form method="POST" action="{{ route('estilos.store') }}">
            @csrf

            <div>
                <label for="estilo">Nome do Estilo:</label>
                <input type="text" name="estilo" id="estilo" required>
            </div>

            <div>
                <button type="submit">Adicionar Estilo</button>
            </div>
        </form>
    </div>
</x-app-layout>