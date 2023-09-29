<x-app-layout>
    <div class="container">
    <h1>Adicionar Combinação</h1>
        <form method="POST" action="{{ route('combinacoes.store') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="cod_estilo">Código de Estilo:</label>
                <input type="text" name="cod_estilo" id="cod_estilo">
            </div>

            <div>
                <label for="cod_tipocorporal">Código de Tipo Corporal:</label>
                <input type="text" name="cod_tipocorporal" id="cod_tipocorporal">
            </div>

            <div>
                <label for="cod_ocasiao">Código de Ocasião:</label>
                <input type="text" name="cod_ocasiao" id="cod_ocasiao">
            </div>

            <div>
                <label for="img_comb">Imagem da Combinação:</label>
                <input type="file" name="img_comb" id="img_comb">
            </div>

            <div>
                <label for="link_comb">Link da Combinação:</label>
                <input type="text" name="link_comb" id="link_comb">
            </div>

            <div>
                <label for="oca_esp">Ocasião Específica:</label>
                <input type="text" name="oca_esp" id="oca_esp">
            </div>

            <div>
                <button type="submit">Adicionar Combinação</button>
            </div>
        </form>
    </div>
</x-app-layout>