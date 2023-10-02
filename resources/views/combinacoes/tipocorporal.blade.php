<x-app-layout>
<div class="container">
    <h1>Adicionar Tipo Corporal</h1>
    <form method="POST" action="{{ route('tiposcorporal.store') }}">
        @csrf

        <div>
            <label for="tipocorporal">Tipo Corporal:</label>
            <input type="text" name="tipocorporal" id="tipocorporal" required>
        </div>

        <div>
            <label for="icone">Ícone:</label>
            <input type="text" name="icone" id="icone" required>
        </div>

        <div>
            <button type="submit">Adicionar Tipo Corporal</button>
        </div>
    </form>
</div>
</x-app-layout>