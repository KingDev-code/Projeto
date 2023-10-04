<x-app-layout>
    <div class="container">
        <h1><a href="{{ route('pecas.create') }}">Adicionar Peça</a></h1>
        <h1><a href="{{ route('combinacoes.create') }}">Adicionar Combinação</a></h1>
        <h1><a href="{{ route('ocasioes.create') }}">Adicionar Ocasião</a></h1>
        <h1><a href="{{ route('tiposcorporal.create') }}">Adicionar Tipo Corporal</a></h1>
        <h1><a href="{{ route('estilos.create') }}">Adicionar Estilo</a></h1>

        <!-- Lista de Ocasiões -->
        <h2>Ocasiões</h2>
        <table>
            @foreach($ocasioes as $ocasiao)
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ocasião</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ocasiao->id }}</td>
                    <td>{{ $ocasiao->ocasiao }}</td>
                </tr>
                <!-- Lista de Combinações da Ocasião -->
                <tr>
                    <td colspan="2">
                        @foreach($ocasiao->combinacoes as $combinacao)
                        <h3>Combinações</h3>
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
                                <tr>
                                    <td>{{ $combinacao->id }}</td>
                                    <td>{{ $combinacao->estilo->estilo }}</td>
                                    <td>{{ $combinacao->tipocorporal->tipocorporal }}</td> <!-- Mostrar o tipo corporal -->
                                    <td>{{ $combinacao->oca_esp }}</td>
                                    <td><img src="{{ asset('storage/' . $combinacao->img_comb) }}" alt="Imagem da combinação" width="300" height="300"></td>
                                </tr>
                                <!-- Lista de Peças da Combinação -->
                                <tr>
                                    <td colspan="5">
                                        <h4>Peças da Combinação</h4>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Descrição</th>
                                                    <th>Preço</th>
                                                    <th>Imagem da Peça</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($combinacao->pecas as $peca)
                                                <tr>
                                                    <td>{{ $peca->id }}</td>
                                                    <td>{{ $peca->desc_peca }}</td>
                                                    <td>{{ $peca->preco_peca }}</td>
                                                    <td><img src="{{ asset('storage/' . $peca->img_peca) }}" alt="Imagem da peça" width="300" height="300"></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endforeach
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</x-app-layout>