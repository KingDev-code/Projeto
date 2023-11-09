<!DOCTYPE html>
<html>
  <head>

    <title>Veste-me</title>
    <link rel="icon" type="image/x-icon" href="public/associate/img/Logo Veste-me - Círculo - Preta.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="public/associate/css/combcad.css" />

  </head>
  <body>

  <div class="estrutura">
     <!-- Pre-Header -->
     <div class="pre-header"></div>

     <!--Menu Lateral-->
    <header>
          <nav>
            <div class="sidebar">
              <div class="logo">
              <h1>ADM</h1>
              <a href="admin"><img  src="public/associate/img/l2.png"></a>
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
          </nav>
    </header>

    <div class="content">
     <!--Indicadores-->
     <div id="indicator">
        <ul>
          <li><a href="admin">VESTE-ME</a></li>
          <div id="arrow"></div>
          <li><a href="{{ route('') }}">CADASTRAR COMBINAÇÃO</a></li>
        </ul>
      </div>
      <div class="tela">
        <h1>Desfrute da melhor experiência em um dispositivo de tela maior.</h1>
      </div>
    <section id="form">
      <form action="">
        <h1>CADASTRAR <br> COMBINAÇÃO</h1>
          <h3 class="lateralup">IMAGEM DA <br>COMBINAÇÃO</h3>
          <button id="botaolateral" onclick="document.getElementById('file-input').click()">
            <span class="material-icons-sharp">upload</span>
          </button>
          <input id="file-input" type="file" style="display: none;">
        <div class="forms">
          <div class="form-group">
                <input type="text1" placeholder="Código da Combinação">
              <select name="estilo" id="estilo" required>
                <option value="" disabled selected>Escolha o estilo</option>
                <option value="casual">Casual</option>
                <option value="classico">Clássico</option>
                <option value="criativo">Criativo</option>
                <option value="dramatico">Dramático Urbano</option>
                <option value="romantico">Romântico</option>
                <option value="sexy">Sexy</option>
              </select>
                <select name="tipocorporal" id="tipocorporal" required>
                <option value="" disabled selected>Escolha o tipo corporal</option>
                <option value="ampulheta">Ampulheta/Trapézio</option>
                <option value="oval">Oval</option>
                <option value="retangulo">Retângulo</option>
                <option value="triangulo">Triângulo</option>
                <option value="trianguloinvertido">Triângulo Invertido</option>
              </select>
              <select name="ocasiao" id="ocasiao" required>
                <option value="" disabled selected>Escolha a ocasião</option>
                <option value="comemoracoes">Comemorações</option>
                <option value="diaadia">Dia a Dia</option>
                <option value="esportivas">Esportivas</option>
                <option value="executivas">Executivas</option>
                <option value="modapraia">Moda Praia</option>
              </select>
          </div>

          <div class="form-group">
            <select name="genero" id="genero" required>
              <option value="" disabled selected>Escolha o gênero</option>
              <option value="genero">Feminino</option>
              <option value="genero">Masculino</option>
            </select>
            <input type="text" placeholder="Ocasião Específica">
          </div>
          <h2>PEÇAS</h2>
            <br>
            
            <div class="form-group">
              <input type="text" placeholder="Nome da peça" required>
              <input type="text" placeholder="Valor" required>
              <input type="text" placeholder="Link da peça" required>
              <button  class="botaopeca1" onclick="document.getElementById('file-input').click()"><span class="material-icons-sharp">upload</span></button>
            </div>

            <div class="form-group">
              <input type="text" placeholder="Nome da peça">
              <input type="text" placeholder="Valor">
              <input type="text" placeholder="Link da peça">
              <button class="botaopeca2" onclick="document.getElementById('file-input').click()"><span class="material-icons-sharp">upload</span></button>
            </div>

            <div class="form-group">
              <input type="text" placeholder="Nome da peça">
              <input type="text" placeholder="Valor">
              <input type="text" placeholder="Link da peça">
              <button class="botaopeca3" onclick="document.getElementById('file-input').click()"><span class="material-icons-sharp">upload</span></button>
            </div>
          
            <a href="#maispeças">
              <h4>ADICIONAR MAIS PEÇAS</h4>
            </a>
            <div class="form-group">
              <div class="btn2">
                <button class="botaoregistrar">Registrar Combinação</button>
              </div>
          </div>
    
          <div class="btn4">
            <div class="form-group">
              <input type="text" placeholder="" id="link">
              <button class="icon" id="icon1"><span class="material-icons-sharp" >sync</span></button>
              <button class="icon" id="icon2"><span class="material-icons-sharp">file_copy</span></button>
            </div>
          </div>
        </div>

      </form>
    </section>
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