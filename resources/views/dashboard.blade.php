<x-app-layout>
    <div class="container">
        <h1><a href="{{ route('pecas.create') }}">Adicionar Peça</a></h1>
        <h1><a href="{{ route('combinacoes.create') }}">Adicionar Combinação</a></h1>
        <h1><a href="{{ route('ocasioes.create') }}">Adicionar Ocasião</a></h1>

        <!-- Lista de Combinações -->
        <h2>Combinações</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Estilo</th>
                    <th>Tipo Corporal</th>
                    <th>Ocasião Específica</th>
                    <th>Imagem da Combinação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($combinacoes as $combinacao)
                <tr>
                    <td>{{ $combinacao->id }}</td>
                    <td>{{ $combinacao->cod_estilo }}</td>
                    <td>{{ $combinacao->cod_tipocorporal }}</td>
                    <td>{{ $combinacao->oca_esp }}</td>
                    <td><img src="{{ asset('storage/' . $combinacao->img_comb) }}" alt="Imagem da combinação" width="300" height="300"></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Lista de Peças -->
        <h2>Peças</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Imagem da Peça</th>
                    <th>Combinação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pecas as $peca)
                <tr>
                    <td>{{ $peca->id }}</td>
                    <td>{{ $peca->desc_peca }}</td>
                    <td>{{ $peca->preco_peca }}</td>
                    <td><img src="{{ asset('storage/' . $peca->img_peca) }}" alt="Imagem da peça" width="300" height="300"></td>
                    <td>{{ $peca->cod_comb }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>