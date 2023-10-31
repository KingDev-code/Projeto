@extends('layouts.usuario')

@section('conteudo')
    <!-- CSS -->
    <link rel="stylesheet" href="css/footer-resp.css">
    <link rel="stylesheet" href="css/menu-resp.css">
    <link rel="stylesheet" href="css/dadospessoais.css">
    <link rel="stylesheet" href="css/dadospessoais-resp.css">

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

<form action="{{ route('upload.image.cliente') }}" method="POST" enctype="multipart/form-data">
    <div class="align-circle">
        @csrf
        <div class="circle">
            <label for="file-input" style="cursor: pointer;">
                <!-- Exibir a imagem existente ou um ícone padrão -->
                <img class="circle" id="image-preview" src="{{ asset('images/' . auth()->user()->img_cliente) }}" alt="Imagem do Usuário" style="display: none; max-width: 150px; max-height: 150px;">
                @if (auth()->user()->img_cliente)
                    <img class="circle" id="image" src="{{ asset('images/' . auth()->user()->img_cliente) }}" alt="Imagem do Usuário" style="display: block; max-width: 150px; max-height: 150px;">
                @else
                    <span class="material-icons-sharp" style="display: block;" id="add-icon">add_photo_alternate</span>
                @endif
            </label>
            <input id="file-input" type="file" style="display: none;" name="image" accept="image/*" onchange="previewImage(this)">
        </div>
    </div>

    <div class="usu">
        <button type="submit">NOVA FOTO DE PERFIL</button>
        <h2>{{ $user->name }}</h2>
    </div>
</form>

          <div class="menu">
            <a href="javascript:void(0);" onclick="toggleForm('profile-form-complete')">Dados Pessoais</a>
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

<form id="profile-form" method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="combinacoes-looks">
        <div class="title-section">
            <h2 class="section-title"><b>Dados Pessoais</b></h2>
        </div>

        <div class="forms">
            <label for="name">NOME: <input type="text" value="{{ old('name', $user->name) }}" id="nome" name="name" autocomplete="name" required></label>
            <label for="sobrenome">SOBRENOME: <input type="text" value="{{ old('sobrenome', $user->sobrenome) }}" id="sobrenome" name="sobrenome" autocomplete="sobrenome" required></label>
            <label for="email">EMAIL: <input type="text" value="{{ old('email', $user->email) }}" id="email" name="email" autocomplete="email" required></label>

            <button type="submit">Salvar Alterações</button>
        </div>
    </div>
</form>

        @if (session('status') === 'profile-updated')
            <div class="alert alert-success">
                Perfil atualizado com sucesso.
            </div>
        @endif

        <form id="profile-form-complete" class="user-form" style="display: none">
            @include('profile.partials.update-profile-information-form')
        </form>

        <form id="password-form" class="user-form" style="display: none">
            @include('profile.partials.update-password-form')
        </form>

        <form id="delete-form" class="user-form" style="display: none">
            @include('profile.partials.delete-user-form')
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
        var image = document.getElementById('image');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // Mostrar apenas a imagem de visualização e ocultar os ícones
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
                image.style.display = 'none';
                addIcon.style.display = 'none';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            // Ocultar a imagem de visualização e mostrar os ícones
            imagePreview.style.display = 'none';
            image.style.display = 'none';
            addIcon.style.display = 'block';
        }
    }
    </script>

@endsection
