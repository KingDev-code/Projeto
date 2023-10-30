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

<div class="align-circle">
 <div class="circle" onclick="document.getElementById('file-input').click()">
     <input id="file-input" type="file" style="display: none;">
     <span class="material-icons-sharp">add_photo_alternate</span>
 </div>
</div>

 <div class="usu">
     <p>NOVA FOTO DE PERFIL</p>
     <h2>Gabriela</h2>
     
 </div>

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
                <button type="submit">Sair</button>
            </form>
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

@endsection
