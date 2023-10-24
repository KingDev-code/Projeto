@extends('layouts.usuario')

@section('conteudo')

    <link rel="stylesheet" href="css/dadospessoais.css">
    <link rel="stylesheet" href="css/dadospessoais-resp.css">

    <!-- Seção 2 - Combinação e suas peças -->
    <!-- Seção 2 - Look1 -->
    <div class="content">

          <!-- Filtro -->
    <nav class="filtro">

      <div id="indicator">
        <ul>
          <li><a href="index.html">Veste-me</a></li>
            <div id="arrow"></div>
            <li><a href="dadospessoais.html">Dados Pessoais</a></li>
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
           <a href="#info">Dados Pessoais</a> 
           <div class="top-line"></div>
           <br> 
           <br>
           <a href="#info">Senha</a>
           <div class="top-line"></div>
           <br> 
           <br>
           <a href="#info">Desativar Conta</a>
           <div class="top-line"></div>
         </div>
 </nav>

<div class="combinacoes-looks">

    <div class="title-section">
        <h2 class="section-title"><b>Dados Pessoais</b></h2>
      </div>

    <div class="forms">
        <label>NOME: <input type="text" placeholder="Isabela Souza Correia" id="nome" name="nome" autocomplete="nome" required></label>
        <label>EMAIL: <input type="text" placeholder="isabela@veste.com" id="email" name="email" autocomplete="email" required></label>
        <label>TELEFONE: <input class="fone" type="text" placeholder="(11)7585-0445" id="telefone" name="tel" autocomplete="tel" required></label>

        <button>Salvar Alterações</button>

      </div>
    </div>

  </div>

@endsection