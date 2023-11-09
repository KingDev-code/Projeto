@extends('layouts.usuario')

@section('conteudo')
<link rel="stylesheet" href="public/css/cadastro-emp.css">
<link rel="stylesheet" href="public/css/cadastro-emp-resp.css">

<div class="content">
    <div id="indicator">
        <ul>
            <li><a href="/">Veste-me</a></li>
            <div id="arrow"></div>
            <li><a href="/cadastro-admin">Cadastrar-se como Administrador</a></li>
        </ul>
    </div>

    <div class="cadastrar">
        <div class="title-section">
            <h2 class="section-title"><b>Cadastrar-se como Administrador</b></h2>
        </div>

        <form class="form" action="{{ route('admin.register') }}" method="POST">
            @csrf

            <!-- Nome do Administrador -->
            <label for="nome_admin">Nome: <input type="text" id="nome_admin" name="nome_admin" autofocus autocomplete="nome_admin" required></label>
            @error('nome_admin')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br>

            <!-- Sobrenome do Administrador -->
            <label for="sobrenome_admin">Sobrenome: <input type="text" id="sobrenome_admin" name="sobrenome_admin" autocomplete="sobrenome_admin" required></label>
            @error('sobrenome_admin')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br>

            <!-- CPF do Administrador -->
            <label for="cpf_admin">CPF: <input type="text" id="cpf_admin" name="cpf_admin" autocomplete="cpf_admin" required></label>
            @error('cpf_admin')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br>

            <!-- Telefone do Administrador -->
            <label for="telefone">Telefone: <input type="tel" id="telefone" name="telefone" autocomplete="telefone" required></label>
            @error('telefone')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br>

            <!-- Data de Nascimento do Administrador -->
            <label id="date">Data de Nascimento: <input type="date" id="dtanasc_admin" name="dtanasc_admin" autocomplete="dtanasc_admin" required></label>
            @error('dtanasc_admin')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br>

            <!-- Data de Admissão do Administrador -->
            <label id="date">Data de Admissão: <input type="date" id="dtaadmissao_admin" name="dtaadmissao_admin" autocomplete="dtaadmissao_admin" required></label>
            @error('dtaadmissao_admin')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br>

            <!-- E-mail do Administrador -->
            <label for="email">E-mail: <input type="email" id="email" name="email" autocomplete="email" required></label>
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br>

            <!-- Senha do Administrador -->
            <label for="senha">Senha: <input type="password" id="senha" name="senha" autocomplete="new-password" required></label>
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br>

            <!-- Confirmar Senha -->
            <label for="confirmar-senha">Confirmar Senha: <input type="password" id="confirmar-senha" name="password_confirmation" autocomplete="new-password" required></label>
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
@endsection

