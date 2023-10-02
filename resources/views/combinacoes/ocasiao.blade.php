<x-app-layout>
    <div class="container">
        <h1>Adicionar Ocasião</h1>
        <form method="POST" action="{{ route('ocasioes.store') }}">
            @csrf

            <div>
                <label for="ocasiao">Ocasião:</label>
                <input type="text" name="ocasiao" id="ocasiao" required>
            </div>

            <div>
                <button type="submit">Adicionar Ocasião</button>
            </div>
        </form>
    </div>
</x-app-layout>