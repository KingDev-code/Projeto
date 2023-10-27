@extends('layouts.usuario')

@section('conteudo')

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/login-resp.css">
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    

    <!-- Seção 2 - Combinação e suas peças -->
    <!-- Seção 2 - Look1 -->
<div class="content">

        <div id="indicator">
            <ul>
                <li><a href="index.html">Veste-me</a></li>
                <div id="arrow"></div>
                <li><a href="login.html">Login</a></li>
              </ul>
          </div>

<div class="logar">

    <div class="title-section">
      <img class="logo-comb" src="img/Logo Veste-me - Círculo - Preta.png" alt="Logo">
        <h2 class="section-title"><b>Login</b></h2>
      </div>

      <form class="form" method="POST" action="{{ route('empresa.login') }}">
        @csrf

    <!-- Email Address -->
        <label for="email">E-mail: <input type="email" id="email" name="email" autofocus autocomplete="email" required></label>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <br>

    <!-- Password -->
        <label for="senha">Senha: <input type="password" id="senha" name="password" autocomplete="current-password" required></label>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <br>

                
                
        <div class="button">
            <ul>

                <!-- Remember Me 
                <li>
                <label for="remember_me" class="container-checkbox">
                    <input id="remember_me" type="checkbox" name="remember">
                    <h2 class="manter">{{ __('Manter-me conectado') }}</h2>
                    <span class="checkmark"></span>
                </label>
                </li>-->

                <li>
                @if (Route::has('password.request'))
                    <a class="esq_senha" href="{{ route('password.request') }}">
                    <h4>
                        {{ __('Esqueci minha senha') }}
                    </h4>
                    </a>
                @endif
                </li>

                <li><button type="submit">Entrar</button></li>

                <li>
                @if (Route::has('register'))
                    <a class="cad" href="{{ route('register') }}">
                        Ainda não sou cadastrado - Cadastrar-me
                    </a>
                @endif
                </li>
            </ul>
        </div>
    </form>
  </div>
</div>
@endsection