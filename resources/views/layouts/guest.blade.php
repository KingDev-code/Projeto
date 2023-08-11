<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

        <!-- Css -->
        <link rel="stylesheet" href="/css/login.css">

        <!-- Referência a pasta em que está o Java Script -->
        <script src="/js/login.js"></script>

</head>
<body class="font-sans text-gray-900 antialiased">
    <div id="navbar" class="center">
    <a href="/">
    <img class="logo_principal" id="logo" src="/img/img_logo.png" alt="img_logo">
    </a>
      <div class="icone-container">
        <div class="button-container">
        <i href="#default" id="iconeCoração" class="icone fa-regular fa-heart" ></i>
        <i href="#default" id="iconeUsuário" class="icone fa-solid fa-user" ></i>
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
                {{ $slot }}
            </div>
        </div>
        <!-- Footer -->
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
<p class="titulo-footer">Davi Rodrigues Costa Souza | Gabriela Souza Correia | Isabela Souza Correia</p>

</div>
    </body>
</html>
