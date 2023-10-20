@extends('layouts.usuario')

@section('conteudo')

<link rel="stylesheet" href="css/cadastro-emp.css">
   <link rel="stylesheet" href="css/cadastro-emp-resp.css">

<div class="content">
    <div id="indicator">
        <ul>
            <li><a href="index.html">Veste-me</a></li>
            <div id="arrow"></div>
            <li><a href="cadastro-emp.html">Cadastrar-se</a></li>
        </ul>
    </div>

    <div class="cadastrar">
        <div class="title-section">
            <h2 class="section-title"><b>Cadastrar-se</b></h2>
        </div>

        <form class="form" action="{{ route('register-empresa') }}" method="POST">
            @csrf

            <!-- Nome da Empresa -->
            <label for="nome">Empresa: <input type="text" id="nome" name="nome" autofocus autocomplete="nome" required></label>
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
            <br>

            <!-- Responsável -->
            <label for="resp">Responsável: <input type="text" id="resp" name="resp" autocomplete="resp" required></label>
            <x-input-error :messages="$errors->get('resp')" class="mt-2" />
            <br>

            <!-- CNPJ -->
            <label for="cnpj">CNPJ:<input type="text" id="cnpj" name="cnpj" autocomplete="cnpj" required></label>
            <x-input-error :messages="$errors->get('cnpj')" class="mt-2" />
            <br>

            <!-- Telefone -->
            <label for="telefone">Telefone: <input type="tel" id="telefone" name="telefone" autocomplete="telefone" required></label>
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
            <br>

            <!-- Data de Fundação -->
            <label id="date">Data de Fundação: <input type="date" id="data_fundacao" name="data_fundacao" autocomplete="data_fundacao" required></label>
            <x-input-error :messages="$errors->get('data_fundacao')" class="mt-2" />
            <br>

            <!-- E-mail da Empresa -->
            <label for="email">E-mail: <input type="email" id="email" name="email" autocomplete="email" required></label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <br>

            <!-- Senha da Empresa -->
            <label for="senha">Senha: <input type="password" id="senha" name="password" autocomplete="new-password" required></label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <br>

            <!-- Confirmar Senha -->
            <label for="confirmar">Confirmar Senha: <input type="password" id="confirmar" autocomplete="new-password" name="password_confirmation" required></label>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <br>

            <div class="button">
                <ul>
                    <li><button type="submit">Cadastrar</button></li>
                    <li><a class="login" href="login.html">Já sou cadastrado - Logar</a></li>
                </ul>
            </div>
        </form>
    </div>
</div>
@endsection