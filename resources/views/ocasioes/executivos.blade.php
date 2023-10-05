<x-app-layout>
    <div class="container">
        <h1>Ocasião: {{ $ocasiao->ocasiao }}</h1>
        
        <h2>Combinações</h2>
        <ul>
            @foreach($ocasiao->combinacoes as $combinacao)
                <li>
                    Combinação ID: {{ $combinacao->id }}<br>
                    Estilo: {{ $combinacao->estilo->estilo }}<br>
                    Tipo Corporal: {{ $combinacao->tipocorporal->tipocorporal }}<br>
                    Ocasião Específica: {{ $combinacao->oca_esp }}<br>
                    
                    <h3>Peças da Combinação</h3>
                    <ul>
                        @foreach($combinacao->pecas as $peca)
                            <li>
                                Peça ID: {{ $peca->id }}<br>
                                Descrição: {{ $peca->desc_peca }}<br>
                                Preço: {{ $peca->preco_peca }}<br>
                                <!-- Adicione outros detalhes da peça, se necessário -->
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>