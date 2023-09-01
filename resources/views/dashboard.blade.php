<x-app-layout>
<div class="container">
    <h1><a href="/peca">davi</a></h1>
    <h1><a href="/combinacoes">Comb</a></h1>

    @foreach ($combinacao as $combinacao)
    <div>
        <p>Nome: {{ $combinacao->nome }}</p>
        <p>Link: {{ $combinacao->link }}</p>
        <p>Oca Esp: {{ $combinacao->oca_esp }}</p>

        @if ($combinacao->img)
            <img src="{{ asset('storage/' . $combinacao->img) }}" alt="Imagem da Combinacao">
        @else
            <p>Nenhuma imagem disponível.</p>
        @endif
    </div>
@endforeach

</div>
</x-app-layout>
