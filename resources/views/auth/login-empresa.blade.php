@extends('layouts.usuario')

@section('conteudo')

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/login-resp.css">

<div class="content">
    <div class="title-section">
        <h2 class="section-title"><b>Logar como Empresa</b></h2>
    </div>

    <form class="form" action="{{ route('empresa.login') }}" method="POST">
        @csrf

        <!-- E-mail da Empresa -->
        <label for="email">E-mail: <input type="email" id="email" name="email" required></label>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <br>

        <!-- Senha da Empresa -->
        <label for="senha">Senha: <input type="password" id="senha" name="password" required></label>
        @error('password')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <br>

        <div class="button">
            <ul>
                <li><button type="submit">Entrar</button></li>
                <li><a class="register" href="{{ route('empresa.register') }}">Ainda não é cadastrado? Cadastrar-se</a></li>
            </ul>
        </div>
    </form>
</div>
@endsection