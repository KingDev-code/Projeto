<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <title>Veste-me</title>
      <link rel="icon" type="image/x-icon" href="img/Logo Veste-me - Círculo - Preta.svg">

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- CSS -->
      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="css/index-resp.css">
      <link rel="stylesheet" href="css/footer-resp.css">
      <link rel="stylesheet" href="css/menu-resp.css">
      <link rel="stylesheet" href="css/menu-respquiz.css">

      <!-- Fonte -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <!-- icons -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

      <!-- Quiz -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<section id="menu">
    <!-- Pre Header -->
    <div class="pre-header" id="pre-header">
            <span>Encontre seu look ideal!</span>
    </div>

      <!-- Menu Superior -->
      <header class="header">

        <div class="menu-norte">
        <a href="index.html#pre-header" class="logo"><img id="logo" src="img/Logo Veste-me - Preta.svg" alt="Veste-me"></a>
        <nav>
            <button type="button" class="button-icone">
              <i href="#default" id="icone"class="material-icons-outlined" onclick="AvalAlerta()">star_border</i>
              <i href="#default" id="icon" class="material-icons-outlined"  aria-hidden="true" onclick="toggleIcon()">face_6</i>
              <a href="favoritos.html"><i id="iconeCoracao" class="material-icons-outlined">favorite_border</i></a>
              <a href="#default"><i id="iconeUsuario" class="material-icons-outlined">person_outline</i></a>
            </button>
      </div>
  
      <div class="linha-menu"></div>
  
      <div class="menu-sul">
  
        <div class="menu-itens">
          <ul>
          <li><a href="index.html"  class="active">Início</a></li>
          <li><a href="executivos.html">Executivas</a></li>
          <li><a href="esportivos.html">Esportivas</a></li>
          <li><a href="comemoracoes.html">Comemorações</a></li>
          <li><a href="diaadia.html">Dia a dia</a></li>
          <li><a href="modapraia.html">Moda praia</a></li>
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
    <!-- 
    <div id="navbar" class="center">
    <a href="/">
    <img class="logo_principal" id="logo" src="/img/img_logo.png" alt="img_logo">
    </a>
      <div class="icone-container">
        <div class="button-container">
        <i href="#default" id="iconeCoração" class="icone fa-regular fa-heart" ></i>

        <a href="{{ route('profile.edit') }}" style="padding: 0px;">
        <i href="#default" id="iconeUsuário" class="icone fa-solid fa-user" ></i> 
        </a>

    <div name="content">
        Authentication 
        <form method="POST" action="{{ route('logout') }}" style="margin: 0px; position: absolute; left: 100px; top: -10px; ">
        @csrf
        <div>{{ Auth::user()->name }}</div>
        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="margin: 0px;">
            {{ __('Sair') }}
        </a>
        </form>
    </div>

    </div>
    </div>  
      <div id="navbar-bottom">
    <div class="linha"></div>
    <a href="#produtos">TODOS OS PRODUTOS</a>
    <a href="#executivos">EXECUTIVOS</a>
    <a href="#esportivos">ESPORTIVOS</a>
    <a href="#comemoracoes">COMEMORAÇÕES</a>
    <a href="#diaadia">DIA A DIA</a>
    <a href="#modapraia">MODA PRAIA</a>
    <div class="topnav">
      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Procurar" name="search">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
    </div>
  </div>
  </div>

        <div>
            Page Content 
                {{ $slot }}
        </div>

         Footer 
<footer>
  <div class="linha-footer"></div>
  <div class="container-footer">
    <div>
      <h2 class="desc-footer1" href="Menu - versão 1.html#titulo-sn">Conheça nossa história</h2>
    </div>

    <div>
      <h2 class="desc-footer2">Todos os direitos reservados</h2>
    </div>

    <div>
      <img class="logo_branca" id="logo_branca" src="/img/logo_branca.png" alt="logo_branca" href="Menu - versão 1.html">
    </div>

    <div>
      <h2 class="desc-footer3">CONTATOS: <a class="link" href="mailto:veste_me@hotmail.com">veste_me@hotmail.com</a></h2>
    </div>

    <div>
      <h2 class="desc-footer4"><a class="link" href="https://www.instagram.com/">@veste-me</a></h2>
    </div>

  </div>
  <div class="linha-footer"></div>
</footer>

<p class="titulo-footer">Veste-me | São Paulo - SP</p>
<p class="titulo-footer">Davi Rodrigues Costa Souza | Gabriela Souza Correia | Isabela Souza Correia</p>-->
</div>
</body>
</html>
