@extends('layouts.usuario')

@section('conteudo')

<link rel="stylesheet" href="public/css/cadastro-clie.css">
<link rel="stylesheet" href="public/css/cadastro-clie-resp.css">

<!-- Seção 2 - Combinação e suas peças -->
    <!-- Seção 2 - Look1 -->
    <div class="content">

        <div id="indicator">
            <ul>
              <li><a href="index">Veste-me</a></li>
                <div id="arrow"></div>
                <li><a href="cadastro-clie.html">Cadastrar-se</a></li>
              </ul>
          </div>

<div class="cadastrar">

    <div class="title-section">
        <h2 class="section-title"><b>Cadastrar-se</b></h2>
      </div>

    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome -->
        <label for="nome">Nome: <input type="text" id="name" name="name" required autofocus autocomplete="name" required></label>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <br>

        <!-- Sobrenome -->
        <label for="sobrenome">Sobrenome: <input type="text" id="sobrenome" name="sobrenome" autocomplete="sobrenome" required></label>
        <x-input-error :messages="$errors->get('sobrenome')" class="mt-2" />
        <br>
        
        <!-- Data de Nascimento -->
        <label id="date">Data de Nascimento: <input type="date" id="datanasc" name="datanasc" autocomplete="datanasc" required></label>
        <x-input-error :messages="$errors->get('date')" class="mt-2" />
        <br>

        <!-- Email Address -->
        <label for="email">E-mail: <input type="email" id="email" name="email" autocomplete="email" required></label>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <br>

        <!-- Password -->
        <label for="senha">Senha: <input type="password" id="senha" name="password" autocomplete="new-password" required></label>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <br>
    
        <!-- Confirm Password -->
        <label for="confirmar">Confirmar Senha: <input type="password" id="confirmar" autocomplete="new-password" name="password_confirmation" required></label>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        <br>

        <div class="button">
        <ul>
            <li><button type="submit">Cadastrar</button></li>
            <li><a class="login" href="/login">Já sou cadastrado - Logar</a></li>
        </ul>
       </div>
    </form>
    </div>
    </div>
</div>
@endsection