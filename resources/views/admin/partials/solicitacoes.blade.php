<!DOCTYPE html>
<html>
  <head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="associate/css/solicitacoes.css" /> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
      }
   
      .titulo1 {
        color: black;
        font-weight: 700;
        text-align: left;
        font-size: 15px;
        padding-top: -8px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgb(0, 0, 0);
        padding-left: 30px;
      }
  
      h5 {
        margin-bottom:200px;
        border-bottom: 1px solid rgb(0, 0, 0);
        width: 300px;
        text-align: left;
        margin-top: 15px;
      }
  
      .h7 {
        color: black;
        font-weight: none;
      }
      
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 50px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px;
      }
  
      .forms {
        color: black;
        font-weight: 600;
      }
  
      .forms2 {
        color: black;
        font-weight: 600;
        padding-left: 65px;
        margin-left: -2px;
      }
  
      .flex-container {
        display: flex;
        height: 250px;
        width: 300px;
        background-color: rgba(223, 215, 204, 0.5);
        border-radius: 15px;
        text-align: center;
        color: black;
        padding-top: -25px;
      }
  
      .container h5{
        margin-bottom: 1px solid black;
      }
  
      .flex-container h5 {
        padding-left: 20px;
        margin-top: 2px solid black ;
        display: inline-block;
      }
  
      .flex-container hr {
        border: none;
        border-top: 1px solid black;
        margin: 5px 0;
      }
  
      .flex-container > div {
        background-color: rgba(223, 215, 204, 0.5);
        width: 100px;
        margin: 10px;
        text-align: center;
        line-height: 75px;
        font-size: 30px;
        color: black;
      }
  
      .btn2 {
        color: black;
        margin-bottom: 50px;
      }
  
      .fechar {
        color: black;
      }
  
      .fechar:hover {
        color: grey;
      }
  
      .line {
        color: black;
      }

    legend{
      text-align: left;
      margin-bottom: 15px;
      color: black;
    }

    a{
      text-align: left;
      margin-bottom: 15px;
      color: black;
    }
    
    fieldset {
        border-radius: 10px;
        color: black;
        align-items: left;
        text-align: left;
    } 

    textarea {
      width: 450px;
      height: 200px;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 5px;
      background-color: rgba(223, 215, 204, 0);
      font-size: 17px;
      color: black;
      display: inline-block;
      text-decoration: none;
      background-color: transparent;
      outline: none; /* Remover a borda ao clicar na caixa de texto */
      resize: vertical; /* Permitir o redimensionamento vertical da área de texto */
    }

    form {
      align-items: left;
    }

    .btn1 {
      border: none;
      cursor: pointer;
      background-color: transparent;
      padding-left: 423px;
    }

    .h4 {
      color:black;
      padding-right:360px;
    }

    .html form input[type="text"] {
      width: 200px;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 5px;
      background-color: rgba(223, 215, 204, 0.5);
      font-size: 17px;
      color: black;
      display: inline-block;
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
          <li><a href="admin">VESTE-ME</a></li>
          <div id="arrow"></div>
          <li><a href="solicitacoes">Solicitações</a></li>
        </ul>
      </div>
      <div class="tela">
        <h1>Desfrute da melhor experiência em um dispositivo de tela maior.</h1>
      </div>
      <div class="conteudo">
      <h1> SOLICITAÇÕES </h1>
      <div class="list-actions">
          <a><button onclick="edit()" style="background-color:rgb(255, 166, 83);"><span class="material-icons-sharp">refresh</span></button></a>
          <a><button onclick="inativar()" style="background-color:rgb(252, 68, 68);"><span class="material-icons-sharp">highlight_off</span></button></a>
          <a href="#Publicar"><button style="background-color:rgb(81, 174, 255);"><span class="material-icons-sharp">description</span></button></a>
          <a href="#Aprovado"><button style="background-color:rgb(21, 170, 61);"><span class="material-icons-sharp">done</span></button></a>
      </div>
    
        <table class="item list-table" style="width:75%; display: block; overflow-x:auto;">
          <thead> 
          <tr>
            <th>Selecione</th>
            <th>Cód Combinação</th>
            <th>Cód Estilo</th>
            <th>Cód Tipo Corporal</th>
            <th>Cód Ocasião</th>
            <th>Cód Gênero</th>
            <th>Foto Combinação</th>
            <th>Link Combinação</th>
            <th>Ocasião Específica</th>
            <th>Enviado por</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox"></td>
              <td>01</td>
              <td>01</td>
              <td>03</td>
              <td>04</td>
              <td>01</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Loja1</td>
            </tr>
            <tr>
              <td><input type="checkbox"></td>
              <td>02</td>
              <td>05</td>
              <td>04</td>
              <td>02</td>
              <td>01</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Loja2</td>
            </tr>
            <tr>
              <td><input type="checkbox"></td>
              <td>03</td>
              <td>03</td>
              <td>05</td>
              <td>01</td>
              <td>02</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Loja3</td>           
            </tr>
            <tr>
              <td><input type="checkbox"></td>
              <td>04</td>
              <td>04</td>
              <td>02</td>
              <td>01</td>
              <td>02</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Loja4</td>
            </tr>
          </tbody>
        </table>

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
   function edit() {
    Swal.fire({
      showCloseButton: true,
      title: 'ENVIO Á SER ALTERADO',
      html: '<legend><a onclick="anterior()">Envio anterior?</a><br> Digite as alterações necessárias:</legend><fieldset><textarea></textarea></fieldset>',           
      showCancelButton: true,
      width: '600px',
      confirmButtonColor: 'black',
      cancelButtonColor: 'black',
      reverseButtons:true,
      confirmButtonText: 'ENVIAR',
      cancelButtonText:'CANCELAR',
        customClass:{
            title:"titulo1",
            confirmButton: "btn2",
            html:"html",
            closeButton: "fechar",
            confirmButton: "sim",
        }

      })

    }
</script>
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
<script>
  function anterior() {
  Swal.fire({
    showCloseButton: true,
    title: 'ATUALIZAR COMBINAÇÃO',
    html: '<div class="container"><div class="flex-container"><h5> Observação!<br><br><br>Trocar imagem da peça 3<br>- Não vísivel</h5></div>',       
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonColor: 'black',
    cancelButtonColor: 'black',
    denyButtonColor: 'black',
    reverseButtons: true,
    confirmButtonText: 'EDITAR',
    cancelButtonText: 'CANCELAR',
    denyButtonText: 'EXCLUIR',
    customClass: {
        title: 'titulo1',
        confirmButton: 'btn2',
        cancelButton: 'btn3',
        html: 'html',
        closeButton: 'fechar',
        confirmButton: 'sim',
    }

}).then((result) => {
      if (result.isConfirmed) {
        edit();
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        edit();
      }else if (result.dismiss === Swal.DismissReason.deny) {
        inativar();
      }
})
}
</script>
  </body>
</html>