<x-app-layout>
<div class="container">
        <h1><a href="{{ route('pecas.create') }}">Adicionar Peça</a></h1>
        <h1><a href="{{ route('combinacoes.create') }}">Adicionar Combinação</a></h1>

        <!-- Lista de Combinações -->
        <h2>Combinações</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Estilo</th>
                    <th>Tipo Corporal</th>
                    <th>Ocasião Específica</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($combinacoes as $combinacao)
                <tr>
                    <td>{{ $combinacao->id }}</td>
                    <td>{{ $combinacao->cod_estilo }}</td>
                    <td>{{ $combinacao->cod_tipocorporal }}</td>
                    <td>{{ $combinacao->oca_esp }}</td>
                    <td>
                        <a href="{{ route('combinacoes.show', $combinacao->id) }}">Ver Peças</a>
                    </td>
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
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pecas as $peca)
                <tr>
                    <td>{{ $peca->id }}</td>
                    <td>{{ $peca->desc_peca }}</td>
                    <td>{{ $peca->preco_peca }}</td>
                    <td>
                        <!-- Link para a Combinação associada -->
                        <a href="{{ route('combinacoes.show', $peca->combinacao->id) }}">Ver Combinação</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>