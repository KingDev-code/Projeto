@extends('layouts.empresa')

@section('conteudo')

    <link rel="stylesheet" href="css/envios.css">
    <link rel="stylesheet" href="css/envios-resp.css">

<!-- Seção 2 - Combinação e suas peças -->
<!-- Seção 2 - Look1 -->
<div class="content">

    <div id="indicator">
        <ul>
            <li><a href="/empresa">Veste-me</a></li>
            <div id="arrow"></div>
            <li><a href="envios">Enviar combinação</a></li>
        </ul>
    </div>

    <div class="title-section">
        <h2 class="section-title"><b>Combinação</b></h2>
    </div>

    <div class="combinacoes">
        <div class="align-circle">
            <div class="circle" onclick="document.getElementById('file-input').click()">
                <span class="material-icons-sharp">add_photo_alternate</span>
            </div>
        </div>

        <form method="POST" action="{{ route('pecas.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="pecas">
                <input id="file-input" type="file" style="display: none;">
                <h2 class="titulo">PEÇAS</h2>
                <div class="forms">
                    <div class="peca">
                        <div class="peca">
                        <label for="cod_comb">Selecione uma Combinação:</label>
                        <select name="cod_comb" id="cod_comb">
                            
                        </select>

                        <input type="text" name="desc_peca" placeholder="Nome da peça" required>
                        <input type="text" name="preco_peca" placeholder="Valor" required>
                        <input type="text" name="link_peca" placeholder="Link da peça" required><input type="file" name="img_peca_nova" id="img_peca_nova" required accept="image/*" onchange="previewImage('img_peca_nova', 'img-preview-nova')"><!--<button onclick="document.getElementById('file-input').click()"><span class="material-icons-sharp">upload</span></button> -->
                        <!--<input id="file-input" name="img_peca" type="file" style="display: none;" required accept="image/*" onchange="previewImage()">-->
                        
                    </div>
                    </div>
                </div>
            <div>
                <img id="img-preview-nova" src="#" alt="Imagem da peça" width="300" height="300" style="display: none;">
            </div>
            <div class="button">
                <button type="submit">Enviar</button>
            </div>
            </div>
        </form>
    </div>
    </div>

    


<div class="tabela" style="overflow-x:auto;">
        <table>
            <tr>
              <th>Ações</th>
              <th>Status</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Registro</th>
              <th>CNPJ</th>
              <th>Tipo Corporal</th>
              <th>Estilo</th>
            </tr>
            <tr>
              <td><a class="icones"><button onclick="inativar()"><span class="material-icons-sharp">delete</span></button><button><span class="material-icons-sharp">edit</span></button></td>
              <td><button onclick="atualizar()" style="background-color:rgb(255, 166, 83);height: 35px;"><span class="material-icons-sharp">refresh</span></button></td></a>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>(11)8954-9875</td>
              <td>123.568.912</td>
              <td>123.568.912</td>
              <td>Triângulo Invertido</td>
              <td>Dramático Urbano</td>
            </tr>
            <tr>
              <td><a class="icones"><button onclick="inativar()" class="icones"><span class="material-icons-sharp">delete</span></button><button><span class="material-icons-sharp">edit</span></button></td>
              <td><button style="background-color:rgb(252, 68, 68);height: 35px;"><span class="material-icons-sharp">highlight_off</span></button></td></a>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>(11)8954-9875</td>
              <td>123.568.912</td>
              <td>123.568.912</td>
              <td>Triângulo Invertido</td>
              <td>Dramático Urbano</td>
            </tr>
            <tr>
              <td><a class="icones"><button onclick="inativar()"><span class="material-icons-sharp">delete</span></button><button><span class="material-icons-sharp">edit</span></button></td>
              <td><button style="background-color:rgb(81, 174, 255);height: 35px;"><span class="material-icons-sharp">description</span></button></td></a>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>(11)8954-9875</td>
              <td>123.568.912</td>
              <td>123.568.912</td>
              <td>Triângulo Invertido</td>
              <td>Dramático Urbano</td>
            </tr>
            <tr>
              <td><a class="icones"><button onclick="inativar()"><span class="material-icons-sharp">delete</span></button><button><span class="material-icons-sharp">edit</span></button></td>
              <td><button style="background-color:rgb(21, 85, 38);height: 35px;"><span class="material-icons-sharp">done</span></button></td></a>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>(11)8954-9875</td>
              <td>123.568.912</td>
              <td>123.568.912</td>
              <td>Triângulo Invertido</td>
              <td>Dramático Urbano</td>
            </tr>
        </table>
        @if (auth('empresa')->check())
        <h1>Pecas Cadastradas pela Sua Empresa</h1>
        @forelse (auth('empresa')->user()->pecas as $peca)
            <div>
                <h2>{{ $peca->descricao }}</h2>
                <!-- Outras informações da peça -->
            </div>
        @empty
            <p>Nenhuma peça cadastrada pela sua empresa.</p>
        @endforelse
    @else
        <p>Você não está logado como empresa.</p>
    @endif
</div>

<script>
    function previewImage(inputId, previewId) {
        var input = document.getElementById(inputId);
        var preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
</script>


@endsection