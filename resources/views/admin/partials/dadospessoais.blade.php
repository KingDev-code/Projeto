<!DOCTYPE html>
<html>
  <head>
    <title>Document</title>
    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="associate/css/dadospessoais.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style> 
      body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
      }
   
      .titulo1{
        color:black;
        font-weight:700;
        text-align:left;
        font-size: 20px;
        padding-top: -8px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgb(0, 0, 0);
      }
  
      .h7{
        color:black;
        font-weight:none;
      }
      
      .html{
          align-items:right;
          padding-top: 450px;
      }
  
      .fechar{
        color:black;
      }
  
      .fechar:hover{
        color: grey;
      }
  
      .line{
        color: black;
      }
  </style>
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
              <a href="Home.html"><img  src="associate/img/l2.png"></a>
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
                <a href="DadosPessoais.html"><span class="material-icons-sharp">person</span>NOME PESSOAL</a> <!--<span class="material-icons-sharp">person_outline</span>-->
                <br> 
              </div>
                <a href="Info.html"><span class="material-icons-sharp">insights</span>   INFORMAÇÕES</a>
                <a href="Solicitações.html"><span class="material-icons-sharp">notifications</span>SOLICITAÇÕES</a>  <!--<span class="material-icons-sharp">notifications_none</span>--> <!--<span class="material-icons-sharp">notification_important</span>-->
                <a href="CombListar.html"><span class="material-icons-sharp">checkroom</span>COMBINAÇÕES</a>
                <a href="CadListar.html"><span class="material-icons-sharp">groups</span>CADASTROS</a>
                <a href="DepListar.html"><span class="material-icons-sharp">add_business</span>DEPARTAMENTOS</a>
                <a href="EstListar.html"><span class="material-symbols-outlined">eyeglasses</span>ESTILOS</a>
                <a href="TcListar.html"><img src="associate/img/tc.png" >TIPOS CORPORAIS</a>
              <br>
              <div class="btn">
                <button class="btn3"><span class="material-icons-sharp">logout</span>SAIR</button>
              </div>
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
          <li><a href="dadospessoais">Dados PESSOAIS</a></li>
        </ul>
      </div>
      <div class="tela">
        <h1>Desfrute da melhor experiência em um dispositivo de tela maior.</h1>
      </div>
        <div class="foto">
        <h3 class="lateralup">FOTO DE PERFIL</h3>
        <button id="botaolateral" onclick="document.getElementById('file-input').click()">
          <span class="material-icons-sharp">upload</span>
        </button>
        <input id="file-input" type="file" style="display: none;">
      </div>
          <div class="forms">
            <a onclick="document.getElementById('file-input').click()"><img style="width:15%;" src="associate/img/dadospessoaisicon.png"></a>
              <div class="form-group">
                <h1>Nome Sobrenome</h1>
                <p>CPF: 111.111.111-01</p>
                <p>Telefone: (00) 9999-9999</p>
                <p>Email: nome@example.com</p>
                <p>Data de Nascimento: 11/11/1990</p>
                <p>Data de Admissão: 11/11/2023</p>
                <div class="list-actions">
                  <button onclick="inativar()" class="inactivate">Inativar</button>
                  <a href="CadAdmAlt.html"><button class="edit">Editar</button></a>
                  <a href="novasenha.html"><button class="new-password">Nova Senha</button></a>
                </div>
              </div>
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
    <script>
      function inativar() {
        Swal.fire({
          showCloseButton: true,
          title: 'INATIVAR',
          html: '<h7 class="h7">Tem certeza que deseja inativar o objeto selecionado?!</h7>',
          showCancelButton: true,
          confirmButtonColor: 'black',
          cancelButtonColor: 'black',
          confirmButtonText: 'SIM',
          cancelButtonText:'CANCELAR',
          customClass:{
              title:"titulo1",
              confirmButton: "conf",
              cancelButton: "canc",
              html:"html",
              closeButton: "fechar",
              confirmButton: "sim",
          }

        }).then((result) => {
          if (result.isConfirmed) {}
        });
      }
    </script>
  </body>
</html>
