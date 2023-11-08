@extends('layouts.home')

@section('conteudo')

<div class="slideshow">
      <div class="slide">
          <img id="banner1" src="public/img/banner1.png">
      </div>

      <div class="slide">
          <img id="banner2" src="public/img/banner2.png">
      </div>

      <div class="slide">
          <img id="banner3" src="public/img/banner3.png">
      </div>

      <div class="slide">
          <img id="banner4" src="public/img/banner4.png">
      </div>

      <div class="slide">
          <img id="banner5" src="public/img/banner5.png">
      </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>

  <div class="slide-pagination">
    <div class="square active" onclick="currentSlide(1)"></div>
    <div class="square" onclick="currentSlide(2)"></div>
    <div class="square" onclick="currentSlide(3)"></div>
    <div class="square" onclick="currentSlide(4)"></div>
    <div class="square" onclick="currentSlide(5)"></div>
  </div>

  </div>

<div class="combinacoes">
 
      <!-- Seção 2 - Combinação e suas peças -->
      <img class="logo-comb" src="{{asset('public/img/Logo Veste-me - Preta.png') }}" alt="Veste-me">
      <h2 class="title-comb"><b>Ocasião Executiva</b></h2>

<div class="combinacoes-looks">
  <!-- Seção 2 - Look1 -->
  <div class="secao-look1">

    <a id="link-look1" href="https://br.pinterest.com/pin/730357264592614830/" target="_blank">
      <img id="look1"  class="look1" src="{{asset('public/img/look1.png') }}" alt="Imagem Look 1">
    </a>

      <div id="iconoverlay1" class="icon-overlay1"><img width="30" height="30" src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/> </div>
    
          <i id="icone_" class="material-icons-sharp">favorite_border</i>
          <i id="icone_"  class="material-icons-sharp">share</i>


      <div id="ocasiao1" class="card ocasiao1-card">
        <p>EXECUTIVA</p>
      </div>
      <div id="estilo1" class="card estilo1-card">
        <p>ESPORTIVO</p>
      </div>

    </div>

    <div class="secao-look1-p2">

      <a id="link-peca1" href="https://www.cea.com.br/camiseta-de-algodao-mindset-preto-9394894-preto/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwWCs_dk5ApQlnn-RbrPU6E8Bm2i1p9XfI2G3cLpZbg3jp_rxNsSAahoCKwMQAvD_BwE" target="_blank">
      <div class="slidec">
          <img id="peca1" src="{{asset('public/img/peca1.png') }}" alt="Imagem 1">
          <p id="desc_1-look1">Camiseta de Algodão mindset preto.                           </p>
      </div>
      </a>
    
      <a id="link-peca2"  href="https://www.cea.com.br/blazer-alongado-com-linho-manga-longa-preto-1041335-preto/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwdJyXQfPRzyANVwNF9lkkpqeb9rsdJlVrQjFLxc6qBpGPyX7g7GbWhoCHl0QAvD_BwE" target="_blank">
      <div class="slidec">
          <img id="peca2" src="{{asset('public/img/peca2.png') }}" alt="Imagem 2">
          <p id="desc_2-look1">Blazer alongado com linho manga longa preto.                 </p>
      </div>
      </a>

      <a id="link-peca3"  href="https://www.cea.com.br/calca-wide-leg-de-viscose-cintura-alta-com-elastico-areia-1048270-areia/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwfjg0dNfmznM2Z3M_ftUqWuwHTm0iewuQdxv1LbWPiae5DmDh-QntRoCeFAQAvD_BwE" target="_blank">
      <div class="slidec">
        <img id="peca3" src="{{asset('public/img/peca3.png') }}" alt="Imagem 3">
        <p id="desc_3-look1">Calça wide leg de viscose cintura alta com elástico areia.   </p>
      </div>
      </a>

    <a id="link-peca4" href="https://www.anacapri.com.br/tenis-cami-branco/p/3034100020005U?gclid=CjwKCAjwyY6pBhA9EiwAMzmfweQJgJDTbhmgGvf2URxiNFusaTdQGX_H8rakFcfHn52GCH80rLELjhoC_vMQAvD_BwE" target="_blank">
    <div class="slidec">
        <img id="peca4" src="{{asset('public/img/peca4.png') }}" alt="Imagem 4">
        <p id="desc_4-look1">Tênis Cami Branco.                                           </p>
    </div>
    </a>
          
      
        <div class="dot-container">
          <a class="prevc" onclick="plusSlidesc(-1)"><i class="material-icons-outlined" aria-hidden="true">expand_less</i></a>

          <span class="dot" id="dot_quad" onclick="currentSlidec(1)"></span>
          <span class="dot" id="dot_quad" onclick="currentSlidec(2)"></span>
          <span class="dot" id="dot_quad" onclick="currentSlidec(3)"></span>
          <span class="dot" id="dot_quad" onclick="currentSlidec(4)"></span>

          <a class="nextc" onclick="plusSlidesc(1)"><i class="material-icons-outlined" aria-hidden="true">expand_more</i></a>
        </div>
       
      </div> 

   <!-- Seção 2 - Look2 -->
   <div class="secao-look2">

          <div class="dotm-container">
            
            <a class="prevcm" onclick="plusSlidescm(-1)"><i class="material-icons-outlined" aria-hidden="true">expand_less</i></a>

            <span class="dotm" id="dotm_quad" onclick="currentSlidecm(1)"></span>
            <span class="dotm" id="dotm_quad" onclick="currentSlidecm(2)"></span>
            <span class="dotm" id="dotm_quad" onclick="currentSlidecm(3)"></span>

            <a class="nextcm" onclick="plusSlidescm(1)"><i class="material-icons-outlined" aria-hidden="true">expand_more</i></a>
       
          </div>

          <a id="link-peca1-look2"  href="https://www.hering.com.br/camisa-feminina-manga-bufante-oversized-hf43nmcen/p?idsku=58275&gclid=CjwKCAjwyY6pBhA9EiwAMzmfwQPcng4ABrD9F4YCvDvafWgRHcmtLbvKtiUwfnAaabGjra6mtvUxkRoCbB8QAvD_BwE" target="_blank">
          <div class="slidecm">
            <img id="peca1-look2" src="{{asset('public/img/peca1-look2.png') }}" alt="Imagem 1">
            <p id="desc_1-look2">Camisa Feminina Manga Bufante Oversized - Off White.         </p>
          </div>
          </a>
  
          <a id="link-peca2-look2" href="https://br.shein.com/Square-Buckle-Belt-p-11385068-cat-1875.html?utm_source=pinterest.com&utm_medium=cpc&utm_campaign=brpin_rmt_dpa_womenaccessory_sc2208251858405004&url_from=brpin_rmt_dpa_womenaccessory_sc2208251858405004&epik=dj0yJnU9Z051V094Ynl2UVVVeXJqTU04eHpwdXFXX3IwVURXeGMmcD0wJm49dFZnYWExTHE2ZTl6M2ZQc0NCUTBFUSZ0PUFBQUFBR1Vrcnlv" target="_blank">
          <div class="slidecm">
            <img id="peca2-look2" src="{{asset('public/img/peca2-look2.png') }}" alt="Imagem 2">
            <p id="desc_2-look2">Cintos Fivela quadrada.                                      </p>
          </div>
          </a>
          
          <a id="link-peca3-look2" href="https://br.shein.com/SHEIN-Frenchy-Solid-Wide-Leg-Pants-p-15495058-cat-1740.html?src_identifier=st%3D2%60sc%3Dcal%C3%A7a%20alfaiataria%20mostarda%60sr%3D0%60ps%3D1&src_module=search&src_tab_page_id=page_other1697060047744&mallCode=1" target="_blank">
          <div class="slidecm">
            <img id="peca3-look2" src="{{asset('public/img/peca3-look2.png') }}" alt="Imagem 3">
            <p id="desc_3-look2">SHEIN Frenchy Calças pernas largas sólido.                   </p>
          </div>
          </a>
             
      </div>

      <div class="secao-look2-p3">

        <a id="link-look2" href="https://br.pinterest.com/pin/Ac7Cs94y6vBbHOc2jnbHDHEx3OGhWRz5hBGENy38jGl7jfZy97Zt_og/" target="_blank">
          <img id="look2" class="look2" src="{{asset('public/img/look2.png') }}" alt="Imagem Look 2" >
        </a>
  
    <div id="iconoverlay2" class="icon-overlay2"><img width="30" height="30" src="https://img.icons8.com/fluency-systems-regular/30/rounded-square.png" alt="rounded-square"/> </div>
      
          <div>
            <i id="icone_" class="material-icons-sharp">favorite_border</i>
            <i id="icone_"  class="material-icons-sharp">share</i>
        </div>

    <div id="ocasiao2" class="card ocasiao2-card">
      <p>EXECUTIVA</p>
    </div>
    <div id="estilo2" class="card estilo2-card">
      <p>CRIATIVO</p>
    </div>

      </div>
</div>
</div>

<!-- Tipos Corporais -->
<div class="tiposcorporais">
    <h2 class="title-tc1">Valorize seu corpo</h2>
    <h2 class="title-tc2">Qual é meu tipo corporal? <button onclick="exibirAlertas()" class="button-tc" id="button">Clique aqui e descubra!</button></h2>

    <div class="corpos">
        <div class="tipo" id="tipo-tc1">
            <h2 id="title1-tc" class="titulo-tc">Triângulo</h2>
            <img id="image1-tc" class="img_tc" src="{{ asset('public/img/triangulo.png') }}" alt="Imagem 1">
        </div>

        <div class="tipo" id="tipo-tc2">
            <h2 id="title2-tc" class="titulo-tc">Triângulo Invertido</h2>
            <img id="image2-tc" class="img_tc" src="{{ asset('public/img/trianguloinvertido.png') }}" alt="Imagem 2">
        </div>

        <div class="tipo" id="tipo-tc3">
            <h2 id="title3-tc" class="titulo-tc">Retângulo</h2>
            <img id="image3-tc" class="img_tc" src="{{ asset('public/img/retangulo.png') }}" alt="Imagem 3">
        </div>

        <div class="tipo" id="tipo-tc4">
            <h2 id="title4-tc" class="titulo-tc">Ampulheta</h2>
            <img id="image4-tc" class="img_tc" src="{{ asset('public/img/ampulheta.png') }}" alt="Imagem 4">
        </div>

        <div class="tipo" id="tipo-tc5">
            <h2 id="title5-tc" class="titulo-tc">Oval</h2>
            <img id="image5-tc" class="img_tc" src="{{ asset('public/img/oval.png') }}" alt="Imagem 5">
        </div>
    </div>
</div>

<!-- Estilos Universais -->
<div class="estilos">

    <h2 class="title-est"><b>ESTILOS UNIVERSAIS</b></h2>

  <div class="estilosuniv">
    
  <div class="estilo" id="estilo-1">
    <img id="image1-e" class="img_e" src="{{asset('public/img/esportivo.png')}}" alt="Imagem 1">
    <h2 class="titulo-e" >Estilo</h2>
    <h2 class="titulo-e" >Esportivo</h2>
  </div>

  <div class="estilo" id="estilo-2">
    <img id="image2-e" class="img_e" src="{{asset('public/img/romantico.png') }}" alt="Imagem 2">
    <h2 class="titulo-e" >Estilo</h2>
    <h2 class="titulo-e" >Romântico</h2>
  </div>

  <div class="estilo" id="estilo-3">
    <img id="image3-e" class="img_e" src="{{asset('public/img/classico.png') }}" alt="Imagem 3">
    <h2 class="titulo-e" >Estilo</h2>
    <h2 class="titulo-e" >Clássico</h2>
  </div>

  <div class="estilo" id="estilo-4">
    <img id="image4-e" class="img_e" src="{{asset('public/img/elegante.png') }}" alt="Imagem 4">
    <h2 class="titulo-e" >Estilo</h2>
    <h2 class="titulo-e" >Elegante</h2>
  </div>

  <div class="estilo" id="estilo-5">
    <img id="image5-e" class="img_e" src="{{asset('public/img/criativo.png') }}" alt="Imagem 5">
    <h2 class="titulo-e" >Estilo</h2>
    <h2 class="titulo-e" >Criativo</h2>
  </div>

  <div class="estilo" id="estilo-6">
    <img id="image6-e" class="img_e" src="{{asset('public/img/dramatico.png') }}" alt="Imagem 5">
    <h2 class="titulo-e" >Estilo</h2>
    <h2 class="titulo-e" >Dramático</h2>
  </div>

  <div class="estilo" id="estilo-7">
    <img id="image7-e" class="img_e" src="{{asset('public/img/sexy.png') }}" alt="Imagem 5">
    <h2 class="titulo-e" >Estilo</h2>
    <h2 class="titulo-e" >Sexy</h2>
  </div>

  </div>
</div>

<!-- Sobre Nós -->
<div class="sobrenos" id="sobrenos">
      <div class="center">
          <img class="logo-slogan" src="{{asset('public/img/Logo Veste-me - Preta com slogan.png') }}" alt="Logo">
      </div>
    <div class="row">
      <div class="col light-grey">
          <h3>MISSÃO</h3>
          <p class="desc-sn">Aumentar a confiança das pessoas, utilizando o autoconhecimento e preferências pessoais.</p>
      </div>
      <div class="col grey">
          <h3>VISSÃO</h3>
          <p class="desc-sn">Introduzir o autoconhecimento e autoconfiança por meio da tecnologia e conceitos da moda.</p>
      </div>
      <div class="col dark-grey">
          <h3>VALORES</h3>
          <p class="desc-sn">Autoestima
              <br>Autoconfiança
              <br>Autoconhecimento</p>
      </div>
      <div class="col black">
          <h3>HISTÓRIA</h3>
          <p class="desc-sn">Acredita em uma perspectiva otimista por parte das pessoas a respeito da autoconfiança, vestimenta e tecnologia.</p>
      </div>
  </div>
</div>

<!-- Criadores -->
<div class="criadores">
  <div class="col-lg-12 col-12">
      <div class="section-title-wrap-c mb-5">
          <h2 class="title-c"><b>Criadores</b></h2>
      </div>

      <div class="criad">
          <div class="criador">
              <img src="{{asset('public/img/davi.jpeg') }}" alt="Davi">
              <h3>Davi Rodrigues Costa</h3>
              <p class="desc">Estudante de Análise e Desenvolvimento de Sistemas, concluindo o 3° ano. Amante da programação e interessado em projetos que envolvem diversas linguagens de programação. Desenvolvedor e colaborador do projeto Veste-me.</p>
              <p><a href="mailto:davirodrigues@gmail.com"><button>Contato</button></p></a>
          </div>
          <div class="criador">
              <img src="{{asset('public/img/gabi.png') }}" alt="Gabi">
              <h3>Gabriela Souza Correia</h3>
              <p class="desc">Estudante de Análise e Desenvolvimento de Sistemas, dedicada, 3 anos de aprendizagem. Admiradora da moda e da fotografia, criou o Veste-me com o objetivo de integrar a moda ao universo da programação. Em 2022, vencedora da competição Startup in School, em parceria com a Empresa Google.</p>
              <p><a href="mailto:gabrielagsc2005@gmail.com"><button>Contato</button></p></a>
          </div>
          <div class="criador">
              <img src="{{asset('public/img/isa.jpg') }}" alt="Isa">
              <h3>Isabela Souza Correia</h3>
              <p class="desc">Estudante de Análise e Desenvolvimento de Sistemas, terminando seu 3° ano. Apaixonada pelo mundo da moda, idealizadora e criadora do Veste-me motivada pela introdução da moda e vestuário á programação. Em 2022, vencedora da competição Startup in School, em parceria com a Empresa Google.</p>
              <p><a href="mailto:isabelaisc2005@gmail.com"><button>Contato</button></p></a>
          </div>
      </div>
  </div>
</div>

<!-- Java Script -->
<script src="{{asset('public/js/menu.js') }}"></script>
    <script src="{{asset('public/js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/js/lightgallery.min.js"></script>

    <script>
      function exibirAlertas() {
        Swal.fire({
          showCloseButton: true,
          title: 'DESCUBRA SEU TIPO CORPORAL',
          html: '<div class="html1"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
          '<h4>ENCONTRANDO MINHAS MEDIDAS</h4>'+
          '<p>Tenha em mãos um caderno, uma caneta e uma fita métrica. Posicione-se em frente a um espelho, com roupas que destacam o seu corpo (como um conjunto de academia ou um biquíni). Vamos medir e anotar as suas medidas:'+
          '<br><br><img src="public/img/f-medidas.png" width=711px" height="284px"/><br><br><span>1° MEÇA A LARGURA DO SEUS OMBROS:</span> Posicione a fita métrica na lateral de um dos seus ombros e meça até encontrar a lateral inicial, unindo as extremidades da fita. Anote essa medida.'+
          '<br><br><span>2° MEÇA A LARGURA DA CINTURA:</span> Utilize a fita métrica para medir, agora, o contorno da sua cintura (no ponto mais estreito, geralmente no término das costelas) e anote a medida.'+
          '<br><br><span>3° MEÇA A LARGURA DO SEU QUADRIL:</span> Por fim, meça o circunferência do seu quadril (cerca de 20cm abaixo da cintura) e anote a medida.</p></div>',
          showCancelButton: true,
          reverseButtons:true,
          confirmButtonColor: 'black',
          cancelButtonColor: 'black',
          confirmButtonText: 'PRÓXIMO PASSO',
          cancelButtonText:'CANCELAR',
          position: 'center',
          width: '58%',
          customClass:{
              title:"titulo1",
              confirmButton: "btn2",
              cancelButton: "btn3",
              html:"html",
              closeButton: "fechar",
              confirmButton: "sim",
          }
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
          showCloseButton: true,
          title: 'DESCUBRA SEU TIPO CORPORAL',
          html: '<div class="html1"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
          '<h4>ENCONTRANDO MINHAS MEDIDAS</h4>'+
          '<p>//Tenha em mãos um caderno, uma caneta e uma fita métrica. Posicione-se em frente a um espelho, com roupas que destacam o seu corpo (como um conjunto de academia ou um biquíni). Meça e anote as suas medidas:'+
          '<br><br><img src="public/img/f-corpos.png" /><br><br><span>1° MEÇA A LARGURA DO SEUS OMBROS:</span> Posicione a fita na lateral de um dos seus ombros e meça até encontrar a outra parte, anote a medida.'+
          '<br><br><span>2° MEÇA A LARGURA DA CINTURA (NO TÉRMINO DA SUA COSTELA, BASTA SENTIR E IDENTIFICAR):</span> como nos ombros, meça com a fita todo o contorno da sua cintura, anote.'+
          '<br><br><span>3° MEÇA A LARGURA DO SEU QUADRIL (20cm A BAIXO DA SUA CINTURA):</span> agora, meça o seu quadril de uma extremidade a outra.</p></div>',
          showCancelButton: true,
          reverseButtons:true,
          confirmButtonColor: 'black',
          cancelButtonColor: 'black',
          confirmButtonText: 'PRÓXIMO PASSO',
          cancelButtonText:'CANCELAR',
          position: 'center',
          width: '58%',
          customClass:{
              title:"titulo1",
              confirmButton: "btn2",
              cancelButton: "btn3",
              html:"html",
              closeButton: "fechar",
              confirmButton: "sim",
          }
        }
        )}
  }).then(async () => {
      const inputOptions = new Promise((resolve) => {
        resolve({
          'Triângulo': '<img src="public/img/f-triangulo.png" width="150" height="300"/><br>Quadris mais largos que os Ombros e a Cintura.',
          'Triângulo Invertido': '<img src="public/img/f-trianguloinvertido.png" width="150" height="300"/><br>Ombros mais largos que os Quadris e a Cintura.',
          'Retângulo': '<img src="public/img/f-retangulo.png" width="150" height="300"/><br>Ombros, Cintura e Quadris com larguras semelhantes.',
          'Ampulheta': '<img src="public/img/f-ampulheta.png" width="150" height="300"/><br>Quadris e Ombros mais largos e Cintura fina.',
          'Oval': '<img src="public/img/f-oval.png" width="150" height="300"/><br>Cintura mais larga que Ombros e Quadris.',
        })
    })

    const { value: corpo } = await Swal.fire({
      title: 'DESCUBRA SEU TIPO CORPORAL',
      showCloseButton: true,
      html: '<div class="html2"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
      '<h4>ASSIMILANDO OS RESULTADOS</h4>'+
      'A partir das medidas encontradas anteriormente e as proporções visualizadas no espelho, compare e selecione o tipo corporal abaixo que melhor corresponde com o seu, tanto na legenda quanto na imagem:',
      showCancelButton: true,
      confirmButtonColor: 'black',
      cancelButtonColor: 'black',
      reverseButtons:true,
      confirmButtonText: 'VER RESULTADO',
      cancelButtonText:'CANCELAR',
      input: 'radio',
      inputOptions: inputOptions,
      width: '950px',
      customClass:{
              resolve: "resolve",
              title:"titulo1",
              confirmButton: "btn2",
              cancelButton: "btn3",
              html:"html4",
              closeButton: "fechar",
              confirmButton: "sim",
              return: "hr",
          },
      inputValidator: (value) => {
        if (!value) {
          return 'Selecione um dos tipos corporais!'
        }
      }
    })

    if (corpo == 'Triângulo') {
      Swal.fire({ 
        title: 'DESCUBRA SEU TIPO CORPORAL',
        showCloseButton: true,
        confirmButtonColor: 'black',
        confirmButtonText: 'CONCLUÍDO',
        width: '950px',
        html: '<div class="html3"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
              '<h4>RESULTADO</h4>'+
              `Provavelmente o seu tipo corporal é ...  ${corpo} `+
              '<br><img src="public/img/f-result1.png" width="auto" height="auto"/>'+
              '<p>Agora que você conhece o seu tipo de corpo, personalize suas escolhas no site e vista apenas o que realça a sua beleza!</p>'+
              '<p><span>"Lembre-se, não existe um tipo de corpo ideal! Priorize sentir-se bem e adequada ao seu estilo de vida e personalidade. Você é extraordinária!"<span></p>',
        customClass:{
              title:"titulo1",
              confirmButton: "btn2",
              closeButton: "fechar",
              confirmButton: "sim",
              html: "html3",
          }
        })
    }
    else if (corpo == 'Triângulo Invertido') {
      Swal.fire({ 
        title: 'DESCUBRA SEU TIPO CORPORAL',
        showCloseButton: true,
        confirmButtonColor: 'black',
        confirmButtonText: 'CONCLUÍDO',
        width: '950px',
        html: '<div class="html3"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
              '<h4>RESULTADO</h4>'+
              `Provavelmente o seu tipo corporal é ...  ${corpo} `+
              '<br><img src="public/img/f-result2.png" width="auto" height="auto"/>'+
              '<p>Agora que você conhece o seu tipo de corpo, personalize suas escolhas no site e vista apenas o que realça a sua beleza!</p>'+
              '<p><span>"Lembre-se, não existe um tipo de corpo ideal! Priorize sentir-se bem e adequada ao seu estilo de vida e personalidade. Você é extraordinária!"<span></p>',
        customClass:{
              title:"titulo1",
              confirmButton: "btn2",
              closeButton: "fechar",
              confirmButton: "sim",
              html: "html3",
          }
        })
    }
    else if (corpo == 'Retângulo') {
      Swal.fire({ 
        title: 'DESCUBRA SEU TIPO CORPORAL',
        showCloseButton: true,
        confirmButtonColor: 'black',
        confirmButtonText: 'CONCLUÍDO',
        width: '950px',
        html: '<div class="html3"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
              '<h4>RESULTADO</h4>'+
              `Provavelmente o seu tipo corporal é ...  ${corpo} `+
              '<br><img src="public/img/f-result3.png" width="auto" height="auto"/>'+
              '<p>Agora que você conhece o seu tipo de corpo, personalize suas escolhas no site e vista apenas o que realça a sua beleza!</p>'+
              '<p><span>"Lembre-se, não existe um tipo de corpo ideal! Priorize sentir-se bem e adequada ao seu estilo de vida e personalidade. Você é extraordinária!"<span></p>',
        customClass:{
              title:"titulo1",
              confirmButton: "btn2",
              closeButton: "fechar",
              confirmButton: "sim",
              html: "html3",
          }
        })
    }
    else if (corpo == 'Ampulheta') {
      Swal.fire({ 
        title: 'DESCUBRA SEU TIPO CORPORAL',
        showCloseButton: true,
        confirmButtonColor: 'black',
        confirmButtonText: 'CONCLUÍDO',
        width: '950px',
        html: '<div class="html3"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
              '<h4>RESULTADO</h4>'+
              `Provavelmente o seu tipo corporal é ...  ${corpo} `+
              '<br><img src="public/img/f-result4.png" width="auto" height="auto"/>'+
              '<p>Agora que você conhece o seu tipo de corpo, personalize suas escolhas no site e vista apenas o que realça a sua beleza!</p>'+
              '<p><span>"Lembre-se, não existe um tipo de corpo ideal! Priorize sentir-se bem e adequada ao seu estilo de vida e personalidade. Você é extraordinária!"<span></p>',
        customClass:{
              title:"titulo1",
              confirmButton: "btn2",
              closeButton: "fechar",
              confirmButton: "sim",
              html: "html3",
          }
        })
    }
    else if (corpo == 'Oval') {
      Swal.fire({ 
        title: 'DESCUBRA SEU TIPO CORPORAL',
        showCloseButton: true,
        confirmButtonColor: 'black',
        confirmButtonText: 'CONCLUÍDO',
        width: '950px',
        html: '<div class="html3"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
              '<h4>RESULTADO</h4>'+
              `Provavelmente o seu tipo corporal é ...  ${corpo} `+
              '<br><img src="public/img/f-result5.png" width="auto" height="auto"/>'+
              '<p>Agora que você conhece o seu tipo de corpo, personalize suas escolhas no site e vista apenas o que realça a sua beleza!</p>'+
              '<p><span>"Lembre-se, não existe um tipo de corpo ideal! Priorize sentir-se bem e adequada ao seu estilo de vida e personalidade. Você é extraordinária!"<span></p>',
        customClass:{
              title:"titulo1",
              confirmButton: "btn2",
              closeButton: "fechar",
              confirmButton: "sim",
              html: "html3",
          }
        })
    }

      })()
          
    }


    function AvalAlerta() {

    Swal.fire({
          showCloseButton: true,
          title: 'AVALIAÇÕES E COMENTÁRIOS',
          html: '<div class="custom-select"><select><option value="0">RELEVÂNCIA</option><option value="1">Melhores</option><option value="2">Piores</option></select></div><div class="fieldset-container"><fieldset class="f1 left-align"><legend><span id="star1" class="material-symbols-sharp star" onmouseover="fillStars(1)" onmouseout="clearStars()">star</span><span id="star2" class="material-symbols-sharp star" onmouseover="fillStars(2)" onmouseout="clearStars()">star</span><span id="star3" class="material-symbols-sharp star" onmouseover="fillStars(3)" onmouseout="clearStars()">star</span><span id="star4" class="material-symbols-sharp star" onmouseover="fillStars(4)" onmouseout="clearStars()">star</span><span id="star5" class="material-symbols-sharp off">star</span></legend><h7 class="h7">Isabela Souza</h7><br><a href="exaval.png" class="lightgallery"><img src="exaval.png" alt="ex imagem avaliação"></a><br><h7>Adorei a combinação!!!</h7></fieldset><fieldset class="f2 left-align" onclick="AdAvalAlerta()"><legend><span id="star1" class="material-symbols-sharp star" onmouseover="fillStars(1)" onmouseout="clearStars()">star</span><span id="star2" class="material-symbols-sharp star" onmouseover="fillStars(2)" onmouseout="clearStars()">star</span><span id="star3" class="material-symbols-sharp star" onmouseover="fillStars(3)" onmouseout="clearStars()">star</span><span id="star4" class="material-symbols-sharp star" onmouseover="fillStars(4)" onmouseout="clearStars()">star</span><span id="star5" class="material-symbols-sharp star" onmouseover="fillStars(5)" onmouseout="clearStars()">star</span></legend><h7>Deixe aqui, suas avaliações, dúvidas, fotos e comentários<br>...</h7></fieldset></div>',           
          showCancelButton: true,
          width: '800px',
          confirmButtonColor: 'black',
          cancelButtonColor: 'black',
          reverseButtons:true,
          confirmButtonText: 'COMENTAR',
          cancelButtonText:'CANCELAR',
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
            AdAvalAlerta();
          }
          lightGallery(document.getElementsByClassName('lightgallery')[0]);
        });

        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
    }


    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);

  }

  function AdAvalAlerta() {
    Swal.fire({
          showCloseButton: true,
          title: 'AVALIAÇÕES E COMENTÁRIOS',
          html: '<fieldset><legend>Nome Sobrenome</legend><span id="star1" class="material-symbols-sharp star" onmouseover="fillStars(1)" onmouseout="clearStars()">star</span><span id="star2" class="material-symbols-sharp star" onmouseover="fillStars(2)" onmouseout="clearStars()">star</span><span id="star3" class="material-symbols-sharp star" onmouseover="fillStars(3)" onmouseout="clearStars()">star</span><span id="star4" class="material-symbols-sharp star" onmouseover="fillStars(4)" onmouseout="clearStars()">star</span><span id="star5" class="material-symbols-sharp star" onmouseover="fillStars(5)" onmouseout="clearStars()">star</span><input type="file" id="uploadFile" accept="image/*, video/*" style="display: none;"><label for="uploadFile" class="upload-btn"><span class="material-icons-sharp upload-icon">cloud_upload</span>Upload</label><textarea></textarea></fieldset>',           
          showCancelButton: true,
          width: '600px',
          confirmButtonColor: 'black',
          cancelButtonColor: 'black',
          reverseButtons:true,
          confirmButtonText: 'SALVAR',
          cancelButtonText:'CANCELAR',
            customClass:{
                title:"titulo1",
                confirmButton: "btn2",
                cancelButton: "btn3",
                html:"html",
                closeButton: "fechar",
                confirmButton: "sim",
            }

          }).then((result) => {
            if (result.isConfirmed) {
              AvalAlerta();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
              AvalAlerta();
            }
          })
        };

        function fillStars(starNumber) {
          for (let i = 1; i <= starNumber; i++) {
            const star = document.getElementById(`star${i}`);
            star.classList.add('filled');
          }
        }

        function clearStars() {
          const stars = document.getElementsByClassName('star');
          for (let i = 0; i < stars.length; i++) {
            stars[i].classList.remove('filled');
          }
        }

    </script>
@endsection