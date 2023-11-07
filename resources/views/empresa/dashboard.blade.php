@extends('layouts.empresa')

@section('conteudo')
    <!-- CSS -->
    <link rel="stylesheet" href="css/dadospessoais.css">
    <link rel="stylesheet" href=".css/dadospessoais-resp.css">

    <div class="content">
        <!-- Filtro -->
    <nav class="filtro">

<div id="indicator">
  <ul>
    <li><a href="/">Veste-me</a></li>
      <div id="arrow"></div>
      <li><a href="/profile">Dados Pessoais</a></li>
    </ul>
</div>

<form action="{{ route('upload.image.empresa') }}" method="POST" enctype="multipart/form-data">
    <div class="align-circle">
        @csrf
        <div class="circle">
            <label for="file-input" style="cursor: pointer;">
                <!-- Exibir a imagem existente ou um ícone padrão -->
                <img class="circle" id="image-preview" src="{{ asset('images/' . $empresaData->img_empresa) }}" alt="Imagem do Usuário" style="display: none; max-width: 150px; max-height: 150px;">
                @if (auth('empresa')->check() && $empresaData->img_empresa)
                    <img class="circle" id="image" src="{{ asset('images/' . $empresaData->img_empresa) }}" alt="Imagem do Usuário" style="display: block; max-width: 150px; max-height: 150px;">
                @else
                    <span class="material-icons-sharp" id="add-icon">add_photo_alternate</span>
                @endif
                
            </label>
            <input id="file-input" type="file" style="display: none;" name="image" accept="image/*" onchange="previewImage(this)">
        </div>
    </div>

    <div class="usu">
        <button type="submit">NOVA FOTO DE PERFIL</button>
        @if (auth('empresa')->check())
            <h2>{{ $empresaData->nome }}</h2>
        @endif
    </div>
</form>

          <div class="menu">
            <a href="javascript:void(0);" onclick="toggleForm('profile-form')">Dados Pessoais</a>
            <div class="top-line"></div>
            <br>
            <br>
            <a href="javascript:void(0);" onclick="toggleForm('password-form')">Senha</a>
            <div class="top-line"></div>
            <br>
            <br>
            <a href="javascript:void(0);" onclick="toggleForm('delete-form')">Desativar Conta</a>
            <div class="top-line"></div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"><a>Sair</a></button>
            </form>
            <div class="top-line"></div>
          </div>
</nav>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form id="profile-form" method="POST" action="{{ route('empresa.update') }}">
    @csrf
    @method('PATCH')

    <div class="combinacoes-looks">
        <div class="title-section">
            <h2 class="section-title"><b>Dados Pessoais</b></h2>
        </div>

        <div class="forms">
            <label for="nome">NOME: <input type="text" value="{{ old('nome', $empresaData->nome) }}" id="nome" name="nome" autocomplete="nome" required></label>
            <label for="resp">RESPONSÁVEL: <input type="text" value="{{ old('resp', $empresaData->resp) }}" id="resp" name="resp" autocomplete="resp" required></label>
            <label for="cnpj">CNPJ: <input type="text" value="{{ old('cnpj', $empresaData->cnpj) }}" id="cnpj" name="cnpj" autocomplete="cnpj" required></label>
            <label for="telefone">TELEFONE: <input type="text" value="{{ old('telefone', $empresaData->telefone) }}" id="telefone" name="telefone" autocomplete="telefone" required></label>
            <label for="data_fundacao">DATA DE FUNDAÇÃO: <input type="date" value="{{ old('data_fundacao', $empresaData->data_fundacao) }}" id="data_fundacao" name="data_fundacao" autocomplete="data_fundacao" required></label>
            <label for="email">EMAIL: <input type="text" value="{{ old('email', auth('empresa')->user()->email) }}" id="email" name="email" autocomplete="email" required></label>

            

            <button type="submit">Salvar Alterações</button>
        </div>
    </div>
</form>


        @if (session('status') === 'empresa-updated')
            <div class="alert alert-success">
                Informações da empresa atualizadas com sucesso.
            </div>
        @endif

        <form id="password-form" class="user-form" style="display: none">
            @include('empresa.profile.update-password-form')
        </form>

        <form id="delete-form" class="user-form" style="display: none">
            @include('empresa.profile.delete-user-form')
        </form>


    </div>

    <!-- JavaScript para mostrar/ocultar formulários -->
    <script>
    function toggleForm(formId) {
        const forms = document.querySelectorAll('.user-form');
        forms.forEach(form => form.style.display = 'none');

        const selectedForm = document.getElementById(formId);
        selectedForm.style.display = 'block';

        // Ocultar o formulário de dados pessoais quando outro for exibido
        const profileForm = document.getElementById('profile-form');
        if (formId !== 'profile-form' && profileForm) {
            profileForm.style.display = 'none';
        }
    }
    </script>

    <script>
    // Função para ocultar elementos e mostrar a imagem de visualização
    function previewImage(input) {
        var imagePreview = document.getElementById('image-preview');
        var addIcon = document.getElementById('add-icon');
        var editIcon = document.getElementById('edit-icon');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // Mostrar apenas a imagem de visualização e ocultar os ícones
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
                image.style.display = 'none';
                addIcon.style.display = 'none';
                editIcon.style.display = 'none';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            // Ocultar a imagem de visualização e mostrar os ícones
            imagePreview.style.display = 'none';
            image.style.display = 'none';
            addIcon.style.display = 'block';
            editIcon.style.display = 'block';
        }
    }
    </script>

@endsection