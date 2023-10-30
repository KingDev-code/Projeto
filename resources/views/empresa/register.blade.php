@extends('layouts.usuario')

@section('conteudo')

<link rel="stylesheet" href="css/cadastro-emp.css">
<link rel="stylesheet" href="css/cadastro-emp-resp.css">

    <div class="content">
        <div id="indicator">
            <ul>
                <li><a href="/">Veste-me</a></li>
                <div id="arrow"></div>
                <li><a href="/cadastro-empresa">Cadastrar-se</a></li>
            </ul>
        </div>

        <div class="cadastrar">
            <div class="title-section">
                <h2 class="section-title"><b>Cadastrar-se</b></h2>
            </div>

            <form class="form" action="{{ route('empresa.register') }}" method="POST">
                @csrf

                <!-- Nome da Empresa -->
                <label for="nome">Empresa: <input type="text" id="nome" name="nome" autofocus autocomplete="nome" required></label>
                @error('nome')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <br>

                <!-- Responsável -->
                <label for="resp">Responsável: <input type="text" id="resp" name="resp" autocomplete="resp" required></label>
                @error('resp')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <br>

                <!-- CNPJ -->
                <label for="cnpj">CNPJ:<input type="text" id="cnpj" name="cnpj" autocomplete="cnpj" required></label>
                @error('cnpj')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <br>

                <!-- Telefone -->
                <label for="telefone">Telefone: <input type="tel" id="telefone" name="telefone" autocomplete="telefone" required></label>
                @error('telefone')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <br>

                <!-- Data de Fundação -->
                <label id="date">Data de Fundação: <input type="date" id="data_fundacao" name="data_fundacao" autocomplete="data_fundacao" required></label>
                @error('data_fundacao')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <br>

                <!-- E-mail da Empresa -->
                <label for="email">E-mail: <input type="email" id="email" name="email" autocomplete="email" required></label>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <br>

                <!-- Senha da Empresa -->
                <label for="senha">Senha: <input type="password" id="senha" name="password" autocomplete="new-password" required></label>
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
