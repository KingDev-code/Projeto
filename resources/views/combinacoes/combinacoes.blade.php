@extends('layouts.usuario')

@section('conteudo')

    <div class="container">
        <h1>Adicionar Combinação</h1>
        <form method="POST" action="{{ route('combinacoes.store') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="cod_estilo">Código de Estilo:</label>
                <select name="cod_estilo" id="cod_estilo" required>
                    @foreach ($estilos as $estilo)
                        <option value="{{ $estilo->id }}">{{ $estilo->estilo }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="cod_tipocorporal">Código de Tipo Corporal:</label>
                <select name="cod_tipocorporal" id="cod_tipocorporal" required>
                    @foreach ($tiposcorporal as $tipocorporal)
                        <option value="{{ $tipocorporal->id }}">{{ $tipocorporal->tipocorporal }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="cod_ocasiao">Selecione uma Ocasião:</label>
                <select name="cod_ocasiao" id="cod_ocasiao" required>
                    @foreach ($ocasioes as $ocasiao)
                        <option value="{{ $ocasiao->id }}">{{ $ocasiao->ocasiao }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="img_comb">Imagem da Combinação:</label>
                <input type="file" name="img_comb" id="img_comb" required>
            </div>

            <div>
                <label for="link_comb">Link da Combinação:</label>
                <input type="text" name="link_comb" id="link_comb" required>
            </div>

            <div>
                <label for="oca_esp">Ocasião Específica:</label>
                <input type="text" name="oca_esp" id="oca_esp" required>
            </div>

            <div>
                <button type="submit">Adicionar Combinação</button>
            </div>
        </form>
    </div>
@endsection