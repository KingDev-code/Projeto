<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!--icons-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

     <!-- Referência a pasta em que está o CSS -->
     <link rel="stylesheet" href="public/associate/css/home.css"> 
</head>
<body>

  <div class="estrutura">

    <!-- Pre-Header -->
    <div class="pre-header"></div>

    <!--Menu Lateral-->
    <header class="header">
      <div class="sidebar">
        <div class="logo">
        <h1>ADM</h1>
        <a href="/admin"><img  src="public/associate/img/l2.png"></a>
        </div>

      <div class="topnav">
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Procurar" name="search">
            <button type="submit"><span class="material-icons-sharp">search</span></button>
          </form>
        </div>
      </div>

      <div id="navbar-bottom">
        <div class="usu">
          <a href="dadospessoais"><span class="material-icons-sharp">person</span>NOME PESSOAL</a> <!--<span class="material-icons-sharp">person_outline</span>-->
          <br> 
        </div>
          <a href="info"><span class="material-icons-sharp">insights</span>   INFORMAÇÕES</a>
          <a href="solicitacoes"><span class="material-icons-sharp">notifications</span>SOLICITAÇÕES</a>  <!--<span class="material-icons-sharp">notifications_none</span>--> <!--<span class="material-icons-sharp">notification_important</span>-->
          <a href="/combinacoes"><span class="material-icons-sharp">checkroom</span>COMBINAÇÕES</a>
          <a href="cadastros"><span class="material-icons-sharp">groups</span>CADASTROS</a>
          <a href="departamentos"><span class="material-icons-sharp">add_business</span>DEPARTAMENTOS</a>
          <a href="estilos"><span class="material-symbols-outlined">eyeglasses</span>ESTILOS</a>
          <a href="tipos"><img src="public/associate/img/tc.png" >TIPOS CORPORAIS</a>
        <br>
        <div class="btn">
          <button class="btn3"><span class="material-icons-sharp">logout</span>SAIR</button>
        </div>
      </div>
      </div>
  </header>

   <!--Conteúdo Principal da Página-->
  <div class="content">
     <!--Indicadores-->
     <div id="indicator">
      <ul>
        <li><a href="admin">VESTE-ME</a></li>
        <div id="arrow"></div>
        <li><a href="admin">PÁGINA INICIAL</a></li>
      </ul>
    </div>
    <div class="tela">
      <h1>Desfrute da melhor experiência em um dispositivo de tela maior.</h1>
    </div>
      <div class="conteudo">
      <h2>BEM-VINDO A ÁREA ADMINISTRATIVA DO VESTE-ME</h2>
      <a href="admin"><img  src="public/associate/img/l1.png"></a>
    </div>
  </div>


  <!-- Footer -->
  <footer class="footer">
    <div class="linha-footer"></div>
    <div class="linha-footer"></div>
  </footer>

  <div class="pos-footer">
  <p class="titulo-footer">Veste-me | São Paulo - SP</p>
  <p class="titulo-footer">Davi Rodrigues Costa Souza | Gabriela Souza Correia | Isabela Souza Correia</p>
  </div>

</div>
</body>
</html>