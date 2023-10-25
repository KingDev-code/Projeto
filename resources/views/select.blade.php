@extends('layouts.usuario')

@section('conteudo')



<link rel="stylesheet" href="css/categoria.css">
<link rel="stylesheet" href="css/categoria-resp.css">

    <!-- Seção 2 - Combinação e suas peças -->
    <!-- Seção 2 - Look1 -->
    <div class="content">

        <div id="indicator">
            <ul>
              <li><a href="/">Veste-me</a></li>
                <div id="arrow"></div>
                <li><a href="/select">Categoria</a></li>
              </ul>
          </div>

<div class="cat">

    <div class="title-section">
        <h2 class="section-title"><b>Cadastrar-se</b></h2>
        <li><a class="cad">Indique em que tipo de usuário você se encaixa</a></li>
      </div>

      
        <div class="buttons">
            <a href="register" class="botao-link">
                <span id="icone_" class="material-icons-sharp">
                    supervised_user_circle
                    </span> <!-- Ícone (substitua pelo seu ícone) -->
                <br>
                Usuário 
                <br>
                Comum <!-- Texto do botão -->
            </a><br>
            <a href="/empresa/register" class="botao-link">
                <span id="icone_" class="material-icons-sharp">
                    store
                    </span> <!-- Ícone (substitua pelo seu ícone) -->
                <br>
                Empresa<!-- Texto do botão -->
            </a><br>
        </div>
    </div>

    </div>
@endsection