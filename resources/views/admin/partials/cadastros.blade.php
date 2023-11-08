<!DOCTYPE html>
<html>
  <head>
    <title>Document</title>
    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="public/associate/css/cadlistar.css" /> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
      function mostrarFormulario() {
          var selectBox = document.getElementById("tipoFormulario");
          var selectedValue = selectBox.options[selectBox.selectedIndex].value;
          var formulario = document.getElementById(selectedValue + "Formulario");
          
          var formularios = document.getElementsByClassName("formulario");
          for (var i = 0; i < formularios.length; i++) {
              formularios[i].style.display = "none";
          }
          
          formulario.style.display = "block";
      }

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
                <a href="comb"><span class="material-icons-sharp">checkroom</span>COMBINAÇÕES</a>
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
          <li><a href="CadListar.html">CADASTROS</a></li>
        </ul>
      </div>
      <div class="tela">
        <h1>Desfrute da melhor experiência em um dispositivo de tela maior.</h1>
      </div>
      <div class="conteudo">
      <h1> CADASTROS </h1>
        <div class="forms">
          <div class="form-group" style="display: flex;">
            <label>Selecione o usuário Desejado
            <br><br>
            <select id="tipoFormulario" onchange="mostrarFormulario()">
              <option value="" disabled selected>Selecione</option>
              <option value="administrador">Administrador</option>
              <option value="empresa">Empresa</option>
              <option value="cliente">Cliente</option>
            </select>
            </label>
          </div>
        </div>
        <div id="administradorFormulario" class="formulario" style="display: none">
          <h1>ADMINISTRADORES</h1>
            <div class="form-group">
              <div class="list-actions">
                <button onclick="modal_01()"><span class="material-icons-sharp">power_settings_new</span>INATIVAR</button>
                <a href="CadAdmAlt.html"><button><span class="material-icons-sharp">mode_edit</span>EDITAR</button></a>
                <a href="CadCad.html"><button><span class="material-icons-sharp">add</span>NOVO</button></a>
              </div>
              <table class="item list-table" style="width:90%; display: block; overflow-x:auto;">
                <thead>
                  <tr>
                    <th>Selecione</th>
                    <th>Cód Admin</th>
                    <th>Cód Login</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Data de Admissão</th>
                    <th>Foto de Perfil</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
            <!-- Antes <div class="list-screen"> -->
                    <td><input type="checkbox"></td>
                    <td>01</td>
                    <td>01</td>
                    <td>Maria</td>
                    <td>Clara Santana</td>
                    <td>210.521.568-02</td>
                    <td>(11)9999-9999</td>
                    <td>01/01/2023</td>
                    <td>05/05/2023</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>02</td>
                    <td>02</td>
                    <td>Junior</td>
                    <td>Moreira Cunha</td>
                    <td>125.658.214-01</td>
                    <td>(11)9999-9999</td>
                    <td>01/01/2023</td>
                    <td>05/05/2023</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div id="empresaFormulario" class="formulario" style="display: none">
          <h1>CADASTRAR EMPRESA</h1>
            <div class="form-group">
              <div class="list-actions">
                <button onclick="modal_01()"><span class="material-icons-sharp">power_settings_new</span>INATIVAR</button>
                <a href="CadEmpAlt.html"><button><span class="material-icons-sharp">mode_edit</span>EDITAR</button></a>
                <a href="Cadcad.html"><button><span class="material-icons-sharp">add</span>NOVO</button></a>
              </div>
              <table class="item list-table" style="width:90%; display: block; overflow-x:auto;">
                <thead>
                  <tr>
                    <th>Selecione</th>
                    <th>Cód Empresa</th>
                    <th>Cód Login</th>
                    <th>Nome do Responsável</th>
                    <th>Sobrenome do Responsável</th>
                    <th>Nome da Empresa</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Foto de Perfil</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
            <!-- Antes <div class="list-screen"> -->
                    <td><input type="checkbox"></td>
                    <td>01</td>
                    <td>05</td>
                    <td>Iago</td>
                    <td>Batista Machado</td>
                    <td>Look</td>
                    <td>99.999.999/9999-99</td>
                    <td>(11)9999-9999</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>02</td>
                    <td>06</td>
                    <td>Renata</td>
                    <td>Machado Campos</td>
                    <td>Look</td>
                    <td>99.999.999/9999-99</td>
                    <td>(11)9999-9999</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
        <div id="clienteFormulario" class="formulario" style="display: none">
          <h1>CADASTRAR <br> CLIENTE</h1>
          <div class="form-group">
            <div class="list-actions">
              <button onclick="modal_01()"><span class="material-icons-sharp">power_settings_new</span>INATIVAR</button>
              <a href="CadClieAlt.html"><button><span class="material-icons-sharp">mode_edit</span>EDITAR</button></a>
              <a href="CadCad.html"><button><span class="material-icons-sharp">add</span>NOVO</button></a>
            </div>
            <table class="item list-table" style="width:90%; display: block; overflow-x:auto;">
              <thead>
                <tr>
                  <th>Selecione</th>
                  <th>Cód Cliente</th>
                  <th>Cód Login</th>
                  <th>Nome</th>
                  <th>Sobrenome</th>
                  <th>Data de Nascimento</th>
                  <th>Foto de Perfil</th>
                </tr>
              </thead>
              <tbody>
                <tr>
          <!-- Antes <div class="list-screen"> -->
                  <td><input type="checkbox"></td>
                  <td>01</td>
                  <td>03</td>
                  <td>Giovanne</td>
                  <td>Costa Nunes</td>
                  <td>11/11/2023</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>02</td>
                  <td>04</td>
                  <td>Janaina</td>
                  <td>Mattos Souza</td>
                  <td>11/11/2023</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
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
  </body>
</html>
