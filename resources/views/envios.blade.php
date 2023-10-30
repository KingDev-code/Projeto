<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>Veste-me</title>
    <link rel="icon" type="image/x-icon" href="/img/Logo Veste-me - Círculo - Preta.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/envios.css">
    <link rel="stylesheet" href="/css/envios-resp.css">
    <link rel="stylesheet" href="/css/footer-resp.css">
    <link rel="stylesheet" href="/css/menu-resp.css">

    
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <script src="/https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
    body {
      font-family: "Inter", "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
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
      color: black;
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

    p {
      margin: 5px 10px 0px;
      margin-top: 2px solid black ;
      display: block;
      font-size: 0.7em;
      text-align: center;
    }

    a{
      color: black;
      text-align: left;
      font-size: 0.9em;
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
  
</style>

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
    <a href="/" class="logo"><img id="logo" src="/img/Logo Veste-me - Preta.png" alt="Veste-me"></a>
    <nav>
        <button type="button" class="button-icone">
            <a href="envios"><i class="material-icons-sharp">email</i></a>
            <a href="favoritos"><i id="iconeCoracao" class="material-icons-outlined">favorite_border</i></a>
            <a href="dadospessoais"><i id="iconeUsuario" class="material-icons-sharp">person</i></a>
        </button>
    </div>

  <div class="linha-menu"></div>

  <div class="menu-sul">

    <div class="menu-itens">
      <ul>
      <li><a href="/">Início</a></li>
      <li><a href="{{ route('executivos') }}">Executivos</a></li>
      <li><a href="{{ route('esportivos') }}">Esportivas</a></li>
      <li><a href="{{ route('comemoracoes') }}">Comemorações</a></li>
      <li><a href="{{ route('diaadia') }}">Dia a dia</a></li>
      <li><a href="{{ route('modapraia') }}">Moda praia</a></li>
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
    
<!-- Seção 2 - Combinação e suas peças -->
<!-- Seção 2 - Look1 -->
<div class="content">

    <div id="indicator">
        <ul>
            <li><a href="/">Veste-me</a></li>
            <div id="arrow"></div>
            <li><a href="envios">Enviar combinação</a></li>
        </ul>
    </div>

    <div class="title-section">
        <h2 class="section-title"><b>Combinação</b></h2>
    </div>

    <div class="combinacoes">

        <div class="align-circle">
            <div class="circle" onclick="document.getElementById('file-input').click()">
                <span class="material-icons-sharp">add_photo_alternate</span>
            </div>
        </div>

    <div class="combinacoes">
        <div class="align-circle">
            <div class="circle" onclick="document.getElementById('file-input').click()">
                <span class="material-icons-sharp">add_photo_alternate</span>
            </div>
        </div>

        <form method="POST" action="{{ route('pecas.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="pecas">
                <input id="file-input" type="file" style="display: none;">
                <h2 class="titulo">PEÇAS</h2>
                <div class="forms">
                    <div class="peca">
                        <div class="peca">
                        <label for="cod_comb">Selecione uma Combinação:</label>
                        <select name="cod_comb" id="cod_comb">
                            
                        </select>
                        <label for="desc_peca">Descrição da Peça:</label>
                        <input type="text" name="desc_peca" id="desc_peca" required>
                        <label for="preco_peca">Preço da Peça:</label>
                        <input type="text" name="preco_peca" id="preco_peca" required>
                        <label for="img_peca">Imagem da Peça:</label>
                        <input type="file" name="img_peca" id="img_peca" required accept="image/*" onchange="previewImage()">
                        <img id="img-preview" src="/#" alt="Imagem da peça" width="300" height="300" style="display: none;">
                        <label for="link_peca">Link da Peça:</label>
                        <input type="text" name="link_peca" id="link_peca" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <button type="submit">Adicionar Peça</button>
            </div>
        </form>
    </div>

    </div>

</div>

<div class="tabela" style="overflow-x:auto;">
        <table>
            <tr>
              <th>Ações</th>
              <th>Status</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Registro</th>
              <th>CNPJ</th>
              <th>Tipo Corporal</th>
              <th>Estilo</th>
            </tr>
            <tr>
              <td><a class="icones"><button onclick="inativar()"><span class="material-icons-sharp">delete</span></button><button><span class="material-icons-sharp">edit</span></button></td>
              <td><button onclick="atualizar()" style="background-color:rgb(255, 166, 83);height: 35px;"><span class="material-icons-sharp">refresh</span></button></td></a>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>(11)8954-9875</td>
              <td>123.568.912</td>
              <td>123.568.912</td>
              <td>Triângulo Invertido</td>
              <td>Dramático Urbano</td>
            </tr>
            <tr>
              <td><a class="icones"><button onclick="inativar()" class="icones"><span class="material-icons-sharp">delete</span></button><button><span class="material-icons-sharp">edit</span></button></td>
              <td><button style="background-color:rgb(252, 68, 68);height: 35px;"><span class="material-icons-sharp">highlight_off</span></button></td></a>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>(11)8954-9875</td>
              <td>123.568.912</td>
              <td>123.568.912</td>
              <td>Triângulo Invertido</td>
              <td>Dramático Urbano</td>
            </tr>
            <tr>
              <td><a class="icones"><button onclick="inativar()"><span class="material-icons-sharp">delete</span></button><button><span class="material-icons-sharp">edit</span></button></td>
              <td><button style="background-color:rgb(81, 174, 255);height: 35px;"><span class="material-icons-sharp">description</span></button></td></a>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>(11)8954-9875</td>
              <td>123.568.912</td>
              <td>123.568.912</td>
              <td>Triângulo Invertido</td>
              <td>Dramático Urbano</td>
            </tr>
            <tr>
              <td><a class="icones"><button onclick="inativar()"><span class="material-icons-sharp">delete</span></button><button><span class="material-icons-sharp">edit</span></button></td>
              <td><button style="background-color:rgb(21, 85, 38);height: 35px;"><span class="material-icons-sharp">done</span></button></td></a>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>(11)8954-9875</td>
              <td>123.568.912</td>
              <td>123.568.912</td>
              <td>Triângulo Invertido</td>
              <td>Dramático Urbano</td>
            </tr>
        </table>
</div>

    <!-- Footer -->
<footer class="footer">
  <div class="linha-footer"></div>

  <div class="container-footer">
    <div>
      <a href="/#sobrenos"><h2>Conheça nossa história</a></h2>
    </div>

    <div>
      <h2>Todos os direitos reservados</h2>
    </div>

    <div>
      <a href="/">
      <img src="/img/Logo Veste-me - Branca.png" alt="Veste-me - Branca">
      </a>
    </div>

    <div>
      <h2>CONTATOS: <a href="mailto:veste_me@hotmail.com">veste_me@hotmail.com</a></h2>
    </div>

    <div>
      <h2><a href="https://www.instagram.com/">@veste-me</a></h2>
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
<script src="/js/menu.js"></script>
        <script>
          function atualizar() {
          Swal.fire({
            showCloseButton: true,
            title: 'ATUALIZAR COMBINAÇÃO',
            html: '<div class="container"><div class="flex-container"><h5> Observação!<br><br><br>Trocar imagem da peça 3<br>- Não vísivel</h5></div></div><a onclick="atualizar()">Envio anterior?</a><br><p>Aperte sobre o botão editar (onde o icone é um lapís) dessa mesma combinação, os dados seram apresentados no formulário, faça as alterações necessárias e aperte em "enviar". Aguardamos seu retorno! :)</p>',       
            confirmButtonColor: 'black',
            reverseButtons: true,
            confirmButtonText: 'OK',
            customClass: {
                title: 'titulo1',
                confirmButton: 'btn2',
                html: 'html',
                closeButton: 'fechar',
            }
  
      }).then((result) => {
        if (result.isConfirmed) {
    }
  })
}

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
              confirmButton: "btn2",
              cancelButton: "btn3",
              html:"html",
              closeButton: "fechar",
              confirmButton: "sim",
          }

    })}
      </script>

<script>
            function previewImage() {
                var input = document.getElementById('img_peca');
                var preview = document.getElementById('img-preview');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    }

                    reader.readAsDataURL(input.files[0]);
                } else {
                    preview.src = '#';
                    preview.style.display = 'none';
                }
            }
        </script>

</body>
</html>
