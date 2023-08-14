<x-app-layout>
<div class="container">
    <h1><a href="/peca">davi</a></h1>
    <h1><a href="/combinacoes">Comb</a></h1>

    @foreach($peca as $pecas)
        <p>{{ $pecas->nome }} -- {{ $pecas->valor }}</p>
    @endforeach
</div>
</x-app-layout>
