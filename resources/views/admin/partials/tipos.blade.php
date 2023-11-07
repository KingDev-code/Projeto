<!DOCTYPE html>
<html>
  <head>
    <title>Document</title>
    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="associate/css/tclistar.css" /> 
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
              <a href="/admin"><img  src="associate/img/l2.png"></a>
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
          <li><a href="/admin">VESTE-ME</a></li>
          <div id="arrow"></div>
          <li><a href="tipos">TIPOS CORPORAIS</a></li>
        </ul>
      </div>
      <div class="tela">
        <h1>Desfrute da melhor experiência em um dispositivo de tela maior.</h1>
      </div>
      <div class="conteudo">
      <h1> TIPOS CORPORAIS </h1>
    <div class="list-actions">
      <button onclick="modal_01()"><span class="material-icons-sharp">power_settings_new</span>INATIVAR</button></a>
      <a href="TcAlt.html"><button><span class="material-icons-sharp">mode_edit</span>EDITAR</button></a>
      <a href="TcCad.html"><button><span class="material-icons-sharp">add</span>NOVO</button></a>
    </div>

      <table class="item list-table">
        <thead>
          <tr>
            <th>Selecione</th>
            <th>Código Tipo Corporal</th>
            <th>Tipo Corporal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
    <!-- Antes <div class="list-screen"> -->
            <td><input type="checkbox"></td>
            <td>01</td>
            <td>Ampulheta/Trapézio</td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td>02</td>
            <td>Oval</td>
          </tr>
        </tbody>
      </table>
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
      function modal_01() {
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
