<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>Veste-me</title>
    <link rel="icon" type="image/x-icon" href="public/img/Logo Veste-me - Círculo - Preta.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->

    <link rel="stylesheet" href="public/css/menu-resp.css">
    <link rel="stylesheet" href="public/css/footer-resp.css">
    
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

</head>
<body>
<div class="estrutura">

<section id="menu">
  <!-- Pre Header -->
  <div class="pre-header" id="pre-header">
          <span>Encontre seu look ideal!</span>
  </div>

    <!-- Menu Superior -->
    <header class="header">

      <div class="menu-norte">
      <a href="index" class="logo"><img id="logo" src="public/img/Logo Veste-me - Preta.png" alt="Veste-me"></a>
      <nav>
          <button type="button" class="button-icone">
            <a href="favoritos"><i id="iconeCoracao" class="material-icons-outlined">favorite_border</i></a>
            <a href="#default"><i id="iconeUsuario" class="material-icons-outlined">person_outline</i></a>
          </button>
    </div>

    <div class="linha-menu"></div>

    <div class="menu-sul">

      <div class="menu-itens">
        <ul>
        <li><a href="index">Início</a></li>
        <li><a href="executivos">Executivas</a></li>
        <li><a href="esportivos">Esportivas</a></li>
        <li><a href="comemoracoes" class="active">Comemorações</a></li>
        <li><a href="diaadia">Dia a dia</a></li>
        <li><a href="modapraia">Moda praia</a></li>
        </ul>
      </nav>
    </div>
    
       <div class="pesquisar">
        <form action="/action_page.php">
          <input class="search-input"  type="text" placeholder="Procurar" name="search"></input>
          <button class="search-button" type="submit">
            <span class="material-icons-outlined">search</span>
          </button>
        </form>
      </div>
  </div>
      
    </header>
  </section>


    @yield('conteudo')
<!-- Footer -->
<footer class="footer">
  <div class="linha-footer"></div>

  <div class="container-footer">
    <div>
      <a href="index#sobrenos"><h2>Conheça nossa história</a></h2>
    </div>

    <div>
      <h2>Todos os direitos reservados</h2>
    </div>

    <div>
      <a href="index">
      <img src="public/img/Logo Veste-me - Branca.png" alt="Veste-me - Branca">
      </a>
    </div>

    <div>
      <h2>CONTATOS: <a href="mailto:veste_me@hotmail.com">veste_me@hotmail.com</a></h2>
    </div>

    <div>
      <h2><a href="https://instagram.com/use.veste_me?igshid=MTFoYTlsMnhhbHFvbg==">@veste-me</a></h2>
    </div>

  </div>
  <div class="linha-footer"></div>
</footer>

<div class="pos-footer">
<div class="row1">
<p class="titulo-footer">Veste-me | São Paulo - SP</p>
</div>
<div class="row2">
<p class="titulo-footer">Davi Rodrigues Costa Souza | Gabriela Souza Correia | Isabela Souza Correia</p>
</div>
</div>

</div>

        <!-- Java Script -->
        <script src="public/js/menu.js"></script>
</body>
</html>
