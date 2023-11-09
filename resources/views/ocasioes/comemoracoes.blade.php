@extends('layouts.ocasioes')

@section('conteudo')

  <link rel="stylesheet" href="public/css/comemoracoes.css">
  <link rel="stylesheet" href="public/css/comemoracoes-resp.css">
  <link rel="stylesheet" href="public/css/menu-resp.css">
  <link rel="stylesheet" href="public/css/footer-resp.css">

  <div class="estrutura">

    <section id="menu">
      <!-- Pre Header -->
      <div class="pre-header" id="pre-header">
              <span>Encontre seu look ideal!</span>
      </div>
  
        <!-- Menu Superior -->
        <header class="header">
  
          <div class="menu-norte">
          <a href="index.html#pre-header" class="logo"><img id="logo" src="img/Logo Veste-me - Preta.png" alt="Veste-me"></a>
          <nav>
              <button type="button" class="button-icone">
                <a href="favoritos.html"><i id="iconeCoracao" class="material-icons-outlined">favorite_border</i></a>
                <a href="#default"><i id="iconeUsuario" class="material-icons-outlined">person_outline</i></a>
              </button>
        </div>
    
        <div class="linha-menu"></div>
    
        <div class="menu-sul">
    
          <div class="menu-itens">
            <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="executivos.html">Executivas</a></li>
            <li><a href="esportivos.html">Esportivas</a></li>
            <li><a href="comemoracoes.html" class="active">Comemorações</a></li>
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
  
  <!-- Seção 2 - Combinação e suas peças -->
    <!-- Seção 2 - Look1 -->
    <div class="content">

         <!-- Filtro -->
    <nav class="filtro">

      <div id="indicator">
        <ul>
          <li><a href="index">Veste-me</a></li>
          <div id="arrow"></div>
          <li><a href="combinacoes">Comemorações</a></li>
        </ul>
      </div>

      <table>
        <thead>
          <tr>
              <th colspan="3">Gênero</th>
          </tr>
      </thead>
    <tr>
      <td>
            <input type="checkbox" checked="checked">
          </td>
          <td>
            <label id="feminino">Feminino</label>
          </td>
          <td>
            <i href="#default" id="icone-fem" class="material-icons-outlined">face_3</i>
          </td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" checked="checked">
          </td>
          <td>
            <label id="masculino">Masculino</label>
          </td>
          <td>
            <i href="#default" id="icone-masc" class="material-icons-outlined">face_6</i>
          </td>
        </tr>


        <thead>
          <tr>
              <th colspan="3">Tipo Corporal</th>
          </tr>
      </thead>
          <tr>
            <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="triangulo">Triângulo</label>
                </td>
                <td>
                  <img class="icone-t" width="20" height="20" src="https://img.icons8.com/fluency-systems-regular/20/triangle.png" alt="triangle"/>
            </td>
          </tr>
          <tr>
            <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="triangulo-invertido">Triângulo Invertido</label>
                </td>
                <td>
                  <img class="icone-ti" width="20" height="20" src="https://img.icons8.com/fluency-systems-regular/20/give-way.png" alt="give-way"/>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="retangulo">Retângulo</label>
                </td>
                <td>
                  <img class="icone-r" width="20" height="20" src="https://img.icons8.com/fluency-systems-regular/48/rounded-square.png" alt="rounded-square"/>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="ampulheta">Ampulheta/Trapézio</label>
                </td>
                <td>
                  <img class="icone-a" width="20" height="20" src="https://img.icons8.com/fluency-systems-regular/20/empty-hourglass.png" alt="empty-hourglass"/>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="oval">Oval</label>
                </td>
                <td>
                  <img class="icone-o" width="20" height="20" src="https://img.icons8.com/fluency-systems-regular/48/filled-circle.png" alt="filled-circle"/>
                </td>
              </tr>

              <thead>
                <tr>
                    <th colspan="3">Estilos</th>
                </tr>
            </thead>
          <tr>
            <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="esportivo">Esportivo</label>
                </td>
                <td>
                  <div class="icone-ep"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="romantico">Romântico</label>
                </td>
                <td>
                  <div class="icone-rm"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="elegante">Elegante</label>
                </td>
                <td>
                  <div class="icone-eg"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="classico">Clássico</label>
                </td>
                <td>
                  <div class="icone-cs"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="criativo">Criativo</label>
                </td>
                <td>
                  <div class="icone-ct"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked">
                </td>
                <td>
                  <label id="dramatico-urbano">Dramático Urbano</label>
                </td>
                <td>
                  <div class="icone-du"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" checked="checked"> 
                </td>
                <td>
                  <label id="sexy">Sexy</label>
                </td>
                <td>
                  <div class="icone-s"></div>
                </tr>
              </td>
    </table>
  </nav>

        <div class="combinacoes-looks">

          
        <div class="title-section">
          <h2 class="section-title"><b>Ocasião Comemorações</b></h2>
        </div>

        <div class="comb">
          <!-- Seção 2 - Look1 -->
          <div class="secao-look">
              <img class="look" src="public/img/look1.png" alt="Imagem 4">
        
              <div class="icon-overlay"><img width="30" height="30" src="https://img.icons8.com/fluency-systems-regular/30/empty-hourglass.png" alt="empty-hourglass"/> </div>
            
                  <i class="icone_ fa fa-regular fa-heart" onclick="toggleLike(this)"></i>
                  <i class="icone_ fa fa-solid fa-share-nodes" onclick="shareImage()"></i>
        
        
              <div class="card ocasiao-card">
                <p>EXECUTIVA</p>
              </div>
              <div class="card estilo-card">
                <p>ELEGANTE</p>
              </div>
        
            </div>
      
            <div class="pecas">
            <div class="secao-pecas">

              <div class="slidec">
                <div class="card">
                  <img id="peca1" src="public/img/peca1-recortada.png" alt="Imagem 1">
                </div>
                  <p id="desc">Descrição 1: Bela paisagem natural com montanhas majestosas e um lago sereno.</p>
              </div>
            
              <div class="slidec">
                <div class="card">
                  <img id="peca2" src="public/img/peca2-recortada.png" alt="Imagem 2">
                </div>
                  <p id="desc">Descrição 2: Uma deliciosa refeição gourmet preparada com ingredientes frescos e coloridos.</p>
              </div>
        
            <div class="slidec">
              <div class="card">
                <img id="peca3" src="public/img/peca3-recortada.png" alt="Imagem 3">
              </div>
                  <p id="desc">Descrição 3: Um grupo diversificado de pessoas sorrindo e interagindo em um ambiente de trabalho colaborativo.</p>
            </div>
          </div>

          <div class="secao-pecas">
            <div class="slidec">
              <div class="card">
                <img id="peca3" src="public/img/peca3-recortada.png" alt="Imagem 1">
              </div>
                <p id="desc">Descrição 1: Bela paisagem natural com montanhas majestosas e um lago sereno.</p>
            </div>
          
            <div class="slidec">
              <div class="card">
                <img id="peca3" src="public/img/peca3-recortada.png" alt="Imagem 2">
              </div>
                <p id="desc">Descrição 2: Uma deliciosa refeição gourmet preparada com ingredientes frescos e coloridos.</p>
            </div>
      
            <div class="slidec">
              <div class="card">
                <img id="peca3" src="public/img/peca3-recortada.png" alt="Imagem 3">
              </div>
                <p id="desc">Descrição 3: Um grupo diversificado de pessoas sorrindo e interagindo em um ambiente de trabalho colaborativo.</p>
            </div>
          </div>
          
            </div>
          </div>
          </div>


          <div class="comb_">
            <!-- Seção 2 - Look1 -->
            <div class="secao-look">
                <img class="look" src="public/img/look1.png" alt="Imagem 4">
          
                <div class="icon-overlay"><img width="30" height="30" src="https://img.icons8.com/fluency-systems-regular/30/empty-hourglass.png" alt="empty-hourglass"/> </div>
              
                    <i class="icone_ fa fa-regular fa-heart" onclick="toggleLike(this)"></i>
                    <i class="icone_ fa fa-solid fa-share-nodes" onclick="shareImage()"></i>
          
          
                <div class="card ocasiao-card">
                  <p>EXECUTIVA</p>
                </div>
                <div class="card estilo-card">
                  <p>ELEGANTE</p>
                </div>
          
              </div>
        
              <div class="pecas">
              <div class="secao-pecas">
                <div class="slidec">
                  <div class="card">
                    <img id="peca1" src="public/img/peca1-recortada.png" alt="Imagem 1">
                  </div>
                    <p id="desc">Descrição 1: Bela paisagem natural com montanhas majestosas e um lago sereno.</p>
                </div>
              
                <div class="slidec">
                  <div class="card">
                    <img id="peca2" src="public/img/peca2-recortada.png" alt="Imagem 2">
                  </div>
                    <p id="desc">Descrição 2: Uma deliciosa refeição gourmet preparada com ingredientes frescos e coloridos.</p>
                </div>
          
              <div class="slidec">
                <div class="card">
                  <img id="peca3" src="public/img/peca3-recortada.png" alt="Imagem 3">
                </div>
                    <p id="desc">Descrição 3: Um grupo diversificado de pessoas sorrindo e interagindo em um ambiente de trabalho colaborativo.</p>
              </div>
            </div>
  
            <div class="secao-pecas">
              <div class="slidec">
                <div class="card">
                  <img id="peca3" src="public/img/peca3-recortada.png" alt="Imagem 1">
                </div>
                  <p id="desc">Descrição 1: Bela paisagem natural com montanhas majestosas e um lago sereno.</p>
              </div>
            
              <div class="slidec">
                <div class="card">
                  <img id="peca3" src="public/img/peca3-recortada.png" alt="Imagem 2">
                </div>
                  <p id="desc">Descrição 2: Uma deliciosa refeição gourmet preparada com ingredientes frescos e coloridos.</p>
              </div>
        
              <div class="slidec">
                <div class="card">
                  <img id="peca3" src="public/img/peca3-recortada.png" alt="Imagem 3">
                </div>
                  <p id="desc">Descrição 3: Um grupo diversificado de pessoas sorrindo e interagindo em um ambiente de trabalho colaborativo.</p>
              </div>
            </div>
            
              </div>
            </div>
              
                </div>
              </div>

        </div>

@endsection