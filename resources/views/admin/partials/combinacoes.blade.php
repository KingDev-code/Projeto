<!DOCTYPE html>
<html>
  <head>
    <title>Combinações</title>
    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="public/associate/css/comblistar.css" /> 
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
            </div>
          </nav>
    </header>

    <div class="content">
     <!--Indicadores-->
     <div id="indicator">
        <ul>
          <li><a href="admin">VESTE-ME</a></li>
          <div id="arrow"></div>
          <li><a href="combinacoes">COMBINAÇÕES</a></li>
        </ul>
      </div>
      <div class="tela">
        <h1>Desfrute da melhor experiência em um dispositivo de tela maior.</h1>
      </div>
      <div class="conteudo">
      <h1> COMBINAÇÕES </h1>
      <form action="{{ route('inativar.combinacoes') }}" method="POST">
          @csrf <!-- Adicione o token CSRF para proteção contra ataques CSRF -->

          <div class="list-actions">
              <button type="submit" name="action" value="inativar"><span class="material-icons-sharp">power_settings_new</span>INATIVAR</button>
              <button type="submit" name="action" value="editar"><span class="material-icons-sharp">mode_edit</span>EDITAR</button>
              <button type="submit" name="action" value="novo"><span class="material-icons-sharp">add</span>NOVO</button>
          </div>

          <table class="item list-table" style="width:80%; display: block; overflow-x:auto;">
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
                      <th>Cód Cadastro</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($combinacoes as $combinacao)
                      <tr>
                          <td><input type="checkbox" name="selected_combinacoes[]" value="{{ $combinacao->cod_combinacao }}"></td>
                          <td>{{ $combinacao->cod_combinacao }}</td>
                          <td>{{ $combinacao->cod_estilo }}</td>
                          <td>{{ $combinacao->cod_tipocorporal }}</td>
                          <td>{{ $combinacao->cod_ocasiao }}</td>
                          <td>{{ $combinacao->cod_genero }}</td>
                          <td>{{ $combinacao->img_comb }}</td>
                          <td><img src="{{ $combinacao->link_comb }}" alt="Foto da Combinacao"></td>
                          <td>{{ $combinacao->ocasiaoespecif_comb }}</td>
                          <td>{{ $combinacao->cod_login }}</td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </form>
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
