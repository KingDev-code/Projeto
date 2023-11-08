// Slideshow
let slideIndex = 1;
showSlides(slideIndex);

// Adicione esta linha para mudar os slides automaticamente a cada 3 segundos
setInterval(() => plusSlides(1), 3000);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n, no) {
  let i;
  let slides = document.getElementsByClassName("slide");
  let squares = document.getElementsByClassName("square");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < squares.length; i++) {
    squares[i].className = squares[i].className.replace(" active", "");
  }

  slides[slideIndex - 1].style.display = "block";
  squares[slideIndex - 1].className += " active";
}

//Seção 2 - Combinações e peças = look1
var slideIndexc = 1;
showSlidesc(slideIndexc);

function plusSlidesc(n) {
  showSlidesc(slideIndexc += n);
}

function currentSlidec(n) {
  showSlidesc(slideIndexc = n);
}

function showSlidesc(n) {
  var i;
  var slides = document.getElementsByClassName("slidec");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndexc = 1;
  }
  if (n < 1) {
    slideIndexc = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexc - 1].style.display = "block";
  dots[slideIndexc - 1].className += " active";
}

//Seção 2 - Combinações e peças = look2
var slideIndexcm = 1;
showSlidescm(slideIndexcm);

function plusSlidescm(n) {
  showSlidescm(slideIndexcm += n);
}

function currentSlidecm(n) {
  showSlidescm(slideIndexcm = n);
}

function showSlidescm(n) {
  var i;
  var slides = document.getElementsByClassName("slidecm");
  var dots = document.getElementsByClassName("dotm");
  if (n > slides.length) {
    slideIndexcm = 1;
  }
  if (n < 1) {
    slideIndexcm = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexcm - 1].style.display = "block";
  dots[slideIndexcm - 1].className += " active";
}

//Mudança das imagens 
var iconChanged = false;

var iconElement = document.getElementById("icon");
var overlay1Element = document.getElementById("iconoverlay1");
var ocasio1Element = document.getElementById("ocasiao1");
var estilo1Element = document.getElementById("estilo1");
var overlay2Element = document.getElementById("iconoverlay2");
var ocasio2Element = document.getElementById("ocasiao2");
var estilo2Element = document.getElementById("estilo2");

var linklook1 = document.getElementById("link-look1");
var linklook2 = document.getElementById("link-look2");

var linkpeca1 = document.getElementById("link-peca1");
var linkpeca2 = document.getElementById("link-peca2");
var linkpeca3 = document.getElementById("link-peca3");
var linkpeca4 = document.getElementById("link-peca4");

var linkpeca1look2 = document.getElementById("link-peca1-look2");
var linkpeca2look2 = document.getElementById("link-peca2-look2");
var linkpeca3look2 = document.getElementById("link-peca3-look2");

var buttonElement = document.getElementById("button");

function toggleIcon() {
  var iconElement = document.getElementById("icon");

  if (window.innerWidth <= 768) {
  if (iconChanged) {

        // Pelo código a seguir para definir um ícone do Material Icons:
        iconElement.classList.remove("material-symbols-outlined"); // Adiciona a classe para ícones do Material Icons
        iconElement.textContent = "face_3"; // Substitua "nome_do_icone" pelo nome do ícone desejado
    
        // Pelo código a seguir para definir um ícone do Material Icons:
        iconElement.classList.add("material-symbols-outlined"); // Adiciona a classe para ícones do Material Icons
        iconElement.textContent = "face_6"; // Substitua "nome_do_icone" pelo nome do ícone desejado
    
    document.getElementById("title1-tc").innerText = "Triângulo";
    document.getElementById("title2-tc").innerText = "Triângulo Invertido";
    document.getElementById("title3-tc").innerText = "Retângulo";
    document.getElementById("title4-tc").innerText = "Ampulheta";
    document.getElementById("title5-tc").innerText = "Oval";

    document.getElementById("desc_1-look1").innerText = "Camiseta de Algodão mindset preto.                           ";
    document.getElementById("desc_2-look1").innerText = "Blazer alongado com linho manga longa preto.                 ";
    document.getElementById("desc_3-look1").innerText = "Calça wide leg de viscose cintura alta com elástico areia.   ";
    document.getElementById("desc_4-look1").innerText = "Tênis Cami Branco.                                           ";

    document.getElementById("desc_1-look2").innerText = "Camisa Feminina Manga Bufante Oversized - Off White.         ";
    document.getElementById("desc_2-look2").innerText = "Cintos Fivela quadrada.                                      ";
    document.getElementById("desc_3-look2").innerText = "SHEIN Frenchy Calças pernas largas sólido.                   ";

    overlay1Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/>';
    overlay1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';   

    overlay2Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/empty-hourglass.png" alt="empty-hourglass"/>';
    overlay2Element.style.backgroundColor = '#16a51d';

    overlay1Element.style.transform = "translate(20%, -1380%)";
    ocasio1Element.style.transform = "translate(-28%, -1620%) rotate(-90deg)";
    estilo1Element.style.transform = "translate(5%, -230%)";
    overlay2Element.style.transform = "translate(705%, -1270%)";
    ocasio2Element.style.transform = "translate(175%, -1615%) rotate(-90deg)";
    estilo2Element.style.transform = "translate(190%, -235%)";

    buttonElement.addEventListener("click", function() {
      exibirAlertas();
    });

  } else {
        // Pelo código a seguir para definir um ícone do Material Icons:
        iconElement.classList.remove("material-symbols-outlined"); // Adiciona a classe para ícones do Material Icons
        iconElement.textContent = "face_6"; // Substitua "nome_do_icone" pelo nome do ícone desejado
    
        // Pelo código a seguir para definir um ícone do Material Icons:
        iconElement.classList.add("material-symbols-outlined"); // Adiciona a classe para ícones do Material Icons
        iconElement.textContent = "face_3"; // Substitua "nome_do_icone" pelo nome do ícone desejado
    
    document.getElementById("title1-tc").innerText = "Triângulo";
    document.getElementById("title2-tc").innerText = "Triângulo Invertido";
    document.getElementById("title3-tc").innerText = "Retângulo";
    document.getElementById("title4-tc").innerText = "Trapézio";
    document.getElementById("title5-tc").innerText = "Oval";

    document.getElementById("desc_1-look1").innerText = "Fusion Modas Camisa Social Masculina Elastano Masculina.     ";
    document.getElementById("desc_2-look1").innerText = "Manfinity Mode Homens Não Trespassado Blazer e calça Terno.  ";
    document.getElementById("desc_3-look1").innerText = "Manfinity Mode Homens Não Trespassado Blazer e calça Terno.  ";
    document.getElementById("desc_4-look1").innerText = "Tênis Adidas Advantage Base Court Masculino - Branco + Areia.";

    document.getElementById("desc_1-look2").innerText = "Paletó Slim Em Viscolinho Com Bolsos Marrom.                 ";
    document.getElementById("desc_2-look2").innerText = "Camisa masculina manga longa estampada drazzo flourish.      ";
    document.getElementById("desc_3-look2").innerText = "Calça Alfaiatada Em Viscolinho Com Pregas E Bolsos Marrom.   ";
    
    ocasio1Element.innerText = "EXECUTIVA";
    estilo1Element.innerText = "ESPORTIVO";

    ocasio2Element.innerText = "EXECUTIVA";
    estilo2Element.innerText = "CRIATIVO";

  // Aplicar a propriedade backgroundColor com diferentes valores
  ocasio1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';
  estilo1Element.style.backgroundColor = 'rgba(62, 126, 164, 1)';

  ocasio2Element.style.backgroundColor = '#45a049';
  estilo2Element.style.backgroundColor = '#FF4E50';
        
    overlay1Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/>';
    overlay1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';

    overlay2Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/rounded-square.png" alt="rounded-square"/>';
    overlay2Element.style.backgroundColor = 'rgba(242, 15, 15, 1)';

    overlay1Element.style.transform = "translate(20%, -1380%)";
    ocasio1Element.style.transform = "translate(-28%, -1620%) rotate(-90deg)";
    estilo1Element.style.transform = "translate(5%, -230%)";
    overlay2Element.style.transform = "translate(705%, -1270%)";
    ocasio2Element.style.transform = "translate(175%, -1615%) rotate(-90deg)";
    estilo2Element.style.transform = "translate(190%, -235%)";

    buttonElement.addEventListener("click", function() {
      exibirAlertas();
    });
    
  }
  iconChanged = !iconChanged;
  
  if (iconChanged) {

    document.getElementById("look1").src = "public/img/look1-masc.png";
    document.getElementById("peca1").src = "public/img/peca1-masc.png";
    document.getElementById("peca2").src = "public/img/peca2-masc.png";
    document.getElementById("peca3").src = "public/img/peca3-masc.png";
    document.getElementById("peca4").src = "public/img/peca4-masc.png";

    document.getElementById("look2").src = "public/img/look2-masc.png";
    document.getElementById("peca1-look2").src = "public/img/peca1-look2-masc.png";
    document.getElementById("peca2-look2").src = "public/img/peca2-look2-masc.png";
    document.getElementById("peca3-look2").src = "public/img/peca3-look2-masc.png";

    document.getElementById("link-peca1").href = "https://br.shein.com/Fusion-Modas-Men-Shirts-p-13173514-cat-1979.html?mallCode=2";
    document.getElementById("link-peca2").href = "https://br.shein.com/Manfinity-Mode-Men-Single-Breasted-Blazer-Pants-Suit-Set-p-11706526-cat-2484.html?src_identifier=st%3D2%60sc%3DManfinity%20Mode%20Homens%20N%C3%A3o%20Trespassado%20Blazer%20E%20Cal%C3%A7a%20Terno%20Conjuntos%60sr%3D0%60ps%3D1&src_module=search&src_tab_page_id=page_search1697055112071&mallCode=1";
    document.getElementById("link-peca3").href = "https://br.shein.com/Manfinity-Mode-Men-Single-Breasted-Blazer-Pants-Suit-Set-p-11706526-cat-2484.html?src_identifier=st%3D2%60sc%3DManfinity%20Mode%20Homens%20N%C3%A3o%20Trespassado%20Blazer%20E%20Cal%C3%A7a%20Terno%20Conjuntos%60sr%3D0%60ps%3D1&src_module=search&src_tab_page_id=page_search1697055112071&mallCode=1";
    document.getElementById("link-peca4").href = "https://www.netshoes.com.br/tenis-adidas-advantage-base-court-masculino-branco+areia-FB8-3565-440";

    document.getElementById("link-peca1-look2").href = "https://www.lojasrenner.com.br/p/paleto-slim-em-viscolinho-com-bolsos/-/A-672085203-br.lr?sku=672085262&p=refreshContent&gclid=Cj0KCQjwj5mpBhDJARIsAOVjBdrdStBk_LcYmnN4tENu5eDaDX6JzbvInyQJBTO-jFgJoNDer_SB2GkaAptGEALw_wcB";
    document.getElementById("link-peca2-look2").href = "https://www.cea.com.br/camisa-masculina-manga-longa-estampada-drazzo-flourish-4390770/p";
    document.getElementById("link-peca3-look2").href = "https://www.lojasrenner.com.br/p/calca-alfaiatada-em-viscolinho-com-pregas-e-bolsos/-/A-673278955-br.lr?sku=673279069";

    document.getElementById("link-look1").href ="https://br.pinterest.com/pin/730357264592839829/";
    document.getElementById("link-look2").href ="https://br.pinterest.com/pin/730357264605863692/";

    // Selecionar as imagens com os IDs "look1" e "look2"
    var look1Image = document.getElementById("look1");
    var look2Image = document.getElementById("look2");

    // Aplicar as propriedades de estilo apenas a essas imagens
    look1Image.style.maxWidth = "250px";
    look2Image.style.maxWidth = "250px";

    buttonElement.addEventListener("click", function() {
      exibirAlertasMasc();
    });

    document.getElementById("image1-tc").src = "public/img/triangulo-masc.png";
    document.getElementById("image2-tc").src = "public/img/trianguloinvertido-masc.png";
    document.getElementById("image3-tc").src = "public/img/retangulo-masc.png";
    document.getElementById("image4-tc").src = "public/img/trapezio-masc.png";
    document.getElementById("image5-tc").src = "public/img/oval-masc.png";

    document.getElementById("image1-e").src = "public/img/esportivo-masc.png";
    document.getElementById("image2-e").src = "public/img/romantico-masc.png";
    document.getElementById("image3-e").src = "public/img/classico-masc.png";
    document.getElementById("image4-e").src = "public/img/elegante-masc.png";
    document.getElementById("image5-e").src = "public/img/criativo-masc.png";
    document.getElementById("image6-e").src = "public/img/dramatico-masc.png";
    document.getElementById("image7-e").src = "public/img/sexy-masc.png";

    document.getElementById("desc_1-look1").innerText = "Fusion Modas Camisa Social Masculina Elastano Masculina.     ";
    document.getElementById("desc_2-look1").innerText = "Manfinity Mode Homens Não Trespassado Blazer e calça Terno.  ";
    document.getElementById("desc_3-look1").innerText = "Manfinity Mode Homens Não Trespassado Blazer e calça Terno.  ";
    document.getElementById("desc_4-look1").innerText = "Tênis Adidas Advantage Base Court Masculino - Branco + Areia.";

    document.getElementById("desc_1-look2").innerText = "Paletó Slim Em Viscolinho Com Bolsos Marrom.                 ";
    document.getElementById("desc_2-look2").innerText = "Camisa masculina manga longa estampada drazzo flourish.      ";
    document.getElementById("desc_3-look2").innerText = "Calça Alfaiatada Em Viscolinho Com Pregas E Bolsos Marrom.   ";

    ocasio1Element.innerText = "EXECUTIVA";
    estilo1Element.innerText = "ESPORTIVO";

    ocasio2Element.innerText = "EXECUTIVA";
    estilo2Element.innerText = "CRIATIVO";

    ocasio1Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo1Element.style.backgroundColor = 'rgba(62, 126, 164, 1)';

    ocasio2Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo2Element.style.backgroundColor = 'rgba(255, 187, 72, 1)';

    overlay1Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/>';
    overlay1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';

    overlay2Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/rounded-square.png" alt="rounded-square"/>';
    overlay2Element.style.backgroundColor = 'rgba(242, 15, 15, 1)';

    overlay1Element.style.transform = "translate(20%, -1380%)";
    ocasio1Element.style.transform = "translate(-28%, -1620%) rotate(-90deg)";
    estilo1Element.style.transform = "translate(5%, -230%)";
    overlay2Element.style.transform = "translate(705%, -1270%)";
    ocasio2Element.style.transform = "translate(175%, -1615%) rotate(-90deg)";
    estilo2Element.style.transform = "translate(190%, -235%)";

    buttonElement.addEventListener("click", function() {
      exibirAlertasMasc();
    });

  } else {
    document.getElementById("look1").style.maxWidth = "250px";
    document.getElementById("peca1").style.maxWidth = "150px;";
    document.getElementById("peca2").style.maxWidth = "150px;";
    document.getElementById("peca3").style.maxWidth = "150px;";

    document.getElementById("look2").style.maxWidth = "250px";
    document.getElementById("peca1-look2").style.maxWidth = "150px;";
    document.getElementById("peca2-look2").style.maxWidth = "150px;";
    document.getElementById("peca3-look2").style.maxWidth = "150px;";

    document.getElementById("look1").src = "public/img/look1.png";
    document.getElementById("peca1").src = "public/img/peca1.png";
    document.getElementById("peca2").src = "public/img/peca2.png";
    document.getElementById("peca3").src = "public/img/peca3.png";
    document.getElementById("peca4").src = "public/img/peca4.png";

    document.getElementById("look2").src = "public/img/look2.png";
    document.getElementById("peca1-look2").src = "public/img/peca1-look2.png";
    document.getElementById("peca2-look2").src = "public/img/peca2-look2.png";
    document.getElementById("peca3-look2").src = "public/img/peca3-look2.png";

    document.getElementById("link-peca1").href = "https://www.cea.com.br/camiseta-de-algodao-mindset-preto-9394894-preto/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwWCs_dk5ApQlnn-RbrPU6E8Bm2i1p9XfI2G3cLpZbg3jp_rxNsSAahoCKwMQAvD_BwE";
    document.getElementById("link-peca2").href = "https://www.cea.com.br/blazer-alongado-com-linho-manga-longa-preto-1041335-preto/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwdJyXQfPRzyANVwNF9lkkpqeb9rsdJlVrQjFLxc6qBpGPyX7g7GbWhoCHl0QAvD_BwE";
    document.getElementById("link-peca3").href = "https://www.cea.com.br/calca-wide-leg-de-viscose-cintura-alta-com-elastico-areia-1048270-areia/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwfjg0dNfmznM2Z3M_ftUqWuwHTm0iewuQdxv1LbWPiae5DmDh-QntRoCeFAQAvD_BwE";
    document.getElementById("link-peca4").href = "https://www.anacapri.com.br/tenis-cami-branco/p/3034100020005U?gclid=CjwKCAjwyY6pBhA9EiwAMzmfweQJgJDTbhmgGvf2URxiNFusaTdQGX_H8rakFcfHn52GCH80rLELjhoC_vMQAvD_BwE";

    document.getElementById("link-peca1-look2").href = "https://www.hering.com.br/camisa-feminina-manga-bufante-oversized-hf43nmcen/p?idsku=58275&gclid=CjwKCAjwyY6pBhA9EiwAMzmfwQPcng4ABrD9F4YCvDvafWgRHcmtLbvKtiUwfnAaabGjra6mtvUxkRoCbB8QAvD_BwE";
    document.getElementById("link-peca2-look2").href = "https://br.shein.com/Square-Buckle-Belt-p-11385068-cat-1875.html?utm_source=pinterest.com&utm_medium=cpc&utm_campaign=brpin_rmt_dpa_womenaccessory_sc2208251858405004&url_from=brpin_rmt_dpa_womenaccessory_sc2208251858405004&epik=dj0yJnU9Z051V094Ynl2UVVVeXJqTU04eHpwdXFXX3IwVURXeGMmcD0wJm49dFZnYWExTHE2ZTl6M2ZQc0NCUTBFUSZ0PUFBQUFBR1Vrcnlv";
    document.getElementById("link-peca3-look2").href = "https://br.shein.com/SHEIN-Frenchy-Solid-Wide-Leg-Pants-p-15495058-cat-1740.html?src_identifier=st%3D2%60sc%3Dcal%C3%A7a%20alfaiataria%20mostarda%60sr%3D0%60ps%3D1&src_module=search&src_tab_page_id=page_other1697060047744&mallCode=1";
    
    document.getElementById("link-look1").href ="https://br.pinterest.com/pin/730357264592614830/";
    document.getElementById("link-look2").href ="https://br.pinterest.com/pin/Ac7Cs94y6vBbHOc2jnbHDHEx3OGhWRz5hBGENy38jGl7jfZy97Zt_og/";

    document.getElementById("image1-tc").src = "public/img/triangulo.png";
    document.getElementById("image2-tc").src = "public/img/trianguloinvertido.png";
    document.getElementById("image3-tc").src = "public/img/retangulo.png";
    document.getElementById("image4-tc").src = "public/img/ampulheta.png";
    document.getElementById("image5-tc").src = "public/img/oval.png";

    document.getElementById("image1-e").src = "public/img/esportivo.png";
    document.getElementById("image2-e").src = "public/public/img/romantico.png";
    document.getElementById("image3-e").src = "public/img/classico.png";
    document.getElementById("image4-e").src = "public/img/elegante.png";
    document.getElementById("image5-e").src = "public/img/criativo.png";
    document.getElementById("image6-e").src = "public/img/dramatico.png";
    document.getElementById("image7-e").src = "public/img/sexy.png";

    document.getElementById("desc_1-look1").innerText = "Camiseta de Algodão mindset preto.                           ";
    document.getElementById("desc_2-look1").innerText = "Blazer alongado com linho manga longa preto.                 ";
    document.getElementById("desc_3-look1").innerText = "Calça wide leg de viscose cintura alta com elástico areia.   ";
    document.getElementById("desc_4-look1").innerText = "Tênis Cami Branco.                                           ";

    document.getElementById("desc_1-look2").innerText = "Camisa Feminina Manga Bufante Oversized - Off White.         ";
    document.getElementById("desc_2-look2").innerText = "Cintos Fivela quadrada.                                      ";
    document.getElementById("desc_3-look2").innerText = "SHEIN Frenchy Calças pernas largas sólido.                   ";

    ocasio1Element.innerText = "EXECUTIVA";
    estilo1Element.innerText = "ESPORTIVO";

    ocasio2Element.innerText = "EXECUTIVA";
    estilo2Element.innerText = "CRIATIVO";

    ocasio1Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo1Element.style.backgroundColor = 'rgba(62, 126, 164, 1)';

    ocasio2Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo2Element.style.backgroundColor = 'rgba(255, 187, 72, 1)';
   
    overlay1Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/>';
    overlay1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';

    overlay2Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/rounded-square.png" alt="rounded-square"/>';
    overlay2Element.style.backgroundColor = 'rgba(242, 15, 15, 1)';
    
    overlay1Element.style.transform = "translate(20%, -1380%)";
    ocasio1Element.style.transform = "translate(-28%, -1620%) rotate(-90deg)";
    estilo1Element.style.transform = "translate(5%, -230%)";
    overlay2Element.style.transform = "translate(705%, -1270%)";
    ocasio2Element.style.transform = "translate(175%, -1615%) rotate(-90deg)";
    estilo2Element.style.transform = "translate(190%, -235%)";

    buttonElement.addEventListener("click", function() {
      exibirAlertas();
    });
    
  }
} else{
  if (iconChanged) {
    // Pelo código a seguir para definir um ícone do Material Icons:
    iconElement.classList.remove("material-symbols-outlined"); // Adiciona a classe para ícones do Material Icons
    iconElement.textContent = "face_3"; // Substitua "nome_do_icone" pelo nome do ícone desejado

    // Pelo código a seguir para definir um ícone do Material Icons:
    iconElement.classList.add("material-symbols-outlined"); // Adiciona a classe para ícones do Material Icons
    iconElement.textContent = "face_6"; // Substitua "nome_do_icone" pelo nome do ícone desejado

    document.getElementById("title1-tc").innerText = "Triângulo";
    document.getElementById("title2-tc").innerText = "Triângulo Invertido";
    document.getElementById("title3-tc").innerText = "Retângulo";
    document.getElementById("title4-tc").innerText = "Ampulheta";
    document.getElementById("title5-tc").innerText = "Oval";

    document.getElementById("desc_1-look1").innerText = "Camiseta de Algodão mindset preto.                           ";
    document.getElementById("desc_2-look1").innerText = "Blazer alongado com linho manga longa preto.                 ";
    document.getElementById("desc_3-look1").innerText = "Calça wide leg de viscose cintura alta com elástico areia.   ";
    document.getElementById("desc_4-look1").innerText = "Tênis Cami Branco.                                           ";

    document.getElementById("desc_1-look2").innerText = "Camisa Feminina Manga Bufante Oversized - Off White.         ";
    document.getElementById("desc_2-look2").innerText = "Cintos Fivela quadrada.                                      ";
    document.getElementById("desc_3-look2").innerText = "SHEIN Frenchy Calças pernas largas sólido.                   ";

    overlay1Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/>';
    overlay1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';

    overlay2Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/rounded-square.png" alt="rounded-square"/>';
    overlay2Element.style.backgroundColor = 'rgba(242, 15, 15, 1)';

    buttonElement.addEventListener("click", function() {
      exibirAlertas();
    });


  } else {

        // Pelo código a seguir para definir um ícone do Material Icons:
        iconElement.classList.remove("material-symbols-outlined"); // Adiciona a classe para ícones do Material Icons
        iconElement.textContent = "face_6"; // Substitua "nome_do_icone" pelo nome do ícone desejado

            
        // Pelo código a seguir para definir um ícone do Material Icons:
        iconElement.classList.add("material-symbols-outlined"); // Adiciona a classe para ícones do Material Icons
        iconElement.textContent = "face_3"; // Substitua "nome_do_icone" pelo nome do ícone desejado
    
    document.getElementById("title1-tc").innerText = "Triângulo";
    document.getElementById("title2-tc").innerText = "Triângulo Invertido";
    document.getElementById("title3-tc").innerText = "Retângulo";
    document.getElementById("title4-tc").innerText = "Trapézio";
    document.getElementById("title5-tc").innerText = "Oval";

    document.getElementById("desc_1-look1").innerText = "Fusion Modas Camisa Social Masculina Elastano Masculina.     ";
    document.getElementById("desc_2-look1").innerText = "Manfinity Mode Homens Não Trespassado Blazer e calça Terno.  ";
    document.getElementById("desc_3-look1").innerText = "Manfinity Mode Homens Não Trespassado Blazer e calça Terno.  ";
    document.getElementById("desc_4-look1").innerText = "Tênis Adidas Advantage Base Court Masculino - Branco + Areia.";

    document.getElementById("desc_1-look2").innerText = "Paletó Slim Em Viscolinho Com Bolsos Marrom.                 ";
    document.getElementById("desc_2-look2").innerText = "Camisa masculina manga longa estampada drazzo flourish.      ";
    document.getElementById("desc_3-look2").innerText = "Calça Alfaiatada Em Viscolinho Com Pregas E Bolsos Marrom.   ";
    
    ocasio1Element.innerText = "EXECUTIVA";
    estilo1Element.innerText = "ESPORTIVO";

    ocasio2Element.innerText = "EXECUTIVA";
    estilo2Element.innerText = "CRIATIVO";

    ocasio1Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo1Element.style.backgroundColor = 'rgba(62, 126, 164, 1)';

    ocasio2Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo2Element.style.backgroundColor = 'rgba(255, 187, 72, 1)';
        
    overlay1Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/>';
    overlay1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';

    overlay2Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/rounded-square.png" alt="rounded-square"/>';
    overlay2Element.style.backgroundColor = 'rgba(242, 15, 15, 1)';

    buttonElement.addEventListener("click", function() {
      exibirAlertasMasc();
    });

  }
  iconChanged = !iconChanged;
  
  if (iconChanged) {
    document.getElementById("look1").src = "public/img/look1-masc.png";
    document.getElementById("peca1").src = "public/img/peca1-masc.png";
    document.getElementById("peca2").src = "public/img/peca2-masc.png";
    document.getElementById("peca3").src = "public/img/peca3-masc.png";
    document.getElementById("peca4").src = "public/img/peca4-masc.png";

    document.getElementById("look2").src = "public/img/look2-masc.png";
    document.getElementById("peca1-look2").src = "public/img/peca1-look2-masc.png";
    document.getElementById("peca2-look2").src = "public/img/peca2-look2-masc.png";
    document.getElementById("peca3-look2").src = "public/img/peca3-look2-masc.png";

    document.getElementById("link-peca1").href = "https://br.shein.com/Fusion-Modas-Men-Shirts-p-13173514-cat-1979.html?mallCode=2";
    document.getElementById("link-peca2").href = "https://br.shein.com/Manfinity-Mode-Men-Single-Breasted-Blazer-Pants-Suit-Set-p-11706526-cat-2484.html?src_identifier=st%3D2%60sc%3DManfinity%20Mode%20Homens%20N%C3%A3o%20Trespassado%20Blazer%20E%20Cal%C3%A7a%20Terno%20Conjuntos%60sr%3D0%60ps%3D1&src_module=search&src_tab_page_id=page_search1697055112071&mallCode=1";
    document.getElementById("link-peca3").href = "https://br.shein.com/Manfinity-Mode-Men-Single-Breasted-Blazer-Pants-Suit-Set-p-11706526-cat-2484.html?src_identifier=st%3D2%60sc%3DManfinity%20Mode%20Homens%20N%C3%A3o%20Trespassado%20Blazer%20E%20Cal%C3%A7a%20Terno%20Conjuntos%60sr%3D0%60ps%3D1&src_module=search&src_tab_page_id=page_search1697055112071&mallCode=1";
    document.getElementById("link-peca4").href = "https://www.netshoes.com.br/tenis-adidas-advantage-base-court-masculino-branco+areia-FB8-3565-440";

    document.getElementById("link-peca1-look2").href = "https://www.lojasrenner.com.br/p/paleto-slim-em-viscolinho-com-bolsos/-/A-672085203-br.lr?sku=672085262&p=refreshContent&gclid=Cj0KCQjwj5mpBhDJARIsAOVjBdrdStBk_LcYmnN4tENu5eDaDX6JzbvInyQJBTO-jFgJoNDer_SB2GkaAptGEALw_wcB";
    document.getElementById("link-peca2-look2").href = "https://www.cea.com.br/camisa-masculina-manga-longa-estampada-drazzo-flourish-4390770/p";
    document.getElementById("link-peca3-look2").href = "https://www.lojasrenner.com.br/p/calca-alfaiatada-em-viscolinho-com-pregas-e-bolsos/-/A-673278955-br.lr?sku=673279069";

    document.getElementById("link-look1").href ="https://br.pinterest.com/pin/730357264592839829/";
    document.getElementById("link-look2").href ="https://br.pinterest.com/pin/730357264605863692/";

    // Selecionar as imagens com os IDs "look1" e "look2"
    var look1Image = document.getElementById("look1");
    var look2Image = document.getElementById("look2");

    // Aplicar as propriedades de estilo apenas a essas imagens
    look1Image.style.maxWidth = "680px";
    look1Image.style.transition = "opacity 0.5s";
    look1Image.style.cursor = "pointer";

    look2Image.style.maxWidth = "680px";
    look2Image.style.transition = "opacity 0.5s";
    look2Image.style.cursor = "pointer";

    document.getElementById("image1-tc").src = "public/img/triangulo-masc.png";
    document.getElementById("image2-tc").src = "public/img/trianguloinvertido-masc.png";
    document.getElementById("image3-tc").src = "public/img/retangulo-masc.png";
    document.getElementById("image4-tc").src = "public/img/trapezio-masc.png";
    document.getElementById("image5-tc").src = "public/img/oval-masc.png";

    document.getElementById("image1-e").src = "public/img/esportivo-masc.png";
    document.getElementById("image2-e").src = "public/img/romantico-masc.png";
    document.getElementById("image3-e").src = "public/img/classico-masc.png";
    document.getElementById("image4-e").src = "public/img/elegante-masc.png";
    document.getElementById("image5-e").src = "public/img/criativo-masc.png";
    document.getElementById("image6-e").src = "public/img/dramatico-masc.png";
    document.getElementById("image7-e").src = "public/img/sexy-masc.png";

    document.getElementById("desc_1-look1").innerText = "Fusion Modas Camisa Social Masculina Elastano Masculina.     ";
    document.getElementById("desc_2-look1").innerText = "Manfinity Mode Homens Não Trespassado Blazer e calça Terno.  ";
    document.getElementById("desc_3-look1").innerText = "Manfinity Mode Homens Não Trespassado Blazer e calça Terno.  ";
    document.getElementById("desc_4-look1").innerText = "Tênis Adidas Advantage Base Court Masculino - Branco + Areia.";

    document.getElementById("desc_1-look2").innerText = "Paletó Slim Em Viscolinho Com Bolsos Marrom.                 ";
    document.getElementById("desc_2-look2").innerText = "Camisa masculina manga longa estampada drazzo flourish.      ";
    document.getElementById("desc_3-look2").innerText = "Calça Alfaiatada Em Viscolinho Com Pregas E Bolsos Marrom.   ";

    ocasio1Element.innerText = "EXECUTIVA";
    estilo1Element.innerText = "ESPORTIVO";

    ocasio2Element.innerText = "EXECUTIVA";
    estilo2Element.innerText = "CRIATIVO";

    ocasio1Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo1Element.style.backgroundColor = 'rgba(62, 126, 164, 1)';

    ocasio2Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo2Element.style.backgroundColor = 'rgba(255, 187, 72, 1)';

    overlay1Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/>';
    overlay1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';

    overlay2Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/rounded-square.png" alt="rounded-square"/>';
    overlay2Element.style.backgroundColor = 'rgba(242, 15, 15, 1)';

    buttonElement.addEventListener("click", function() {
      exibirAlertasMasc();
    });


  } else {
    document.getElementById("look1").src = "{{asset('public/img/look1.png') }}";
    document.getElementById("peca1").src = "{{asset('public/img/peca1.png') }}";
    document.getElementById("peca2").src = "{{asset('public/img/peca2.png') }}";
    document.getElementById("peca3").src = "{{asset('public/img/peca3.png') }}";
    document.getElementById("peca4").src = "{{asset('public/img/peca4.png') }}";

    document.getElementById("look2").src = "{{asset('public/img/look2.png') }}";
    document.getElementById("peca1-look2").src = "{{asset('public/img/peca1-look2.png') }}";
    document.getElementById("peca2-look2").src = "{{asset('public/img/peca2-look2.png') }}";
    document.getElementById("peca3-look2").src = "{{asset('public/img/peca3-look2.png') }}";

    document.getElementById("link-peca1").href = "https://www.cea.com.br/camiseta-de-algodao-mindset-preto-9394894-preto/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwWCs_dk5ApQlnn-RbrPU6E8Bm2i1p9XfI2G3cLpZbg3jp_rxNsSAahoCKwMQAvD_BwE";
    document.getElementById("link-peca2").href = "https://www.cea.com.br/blazer-alongado-com-linho-manga-longa-preto-1041335-preto/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwdJyXQfPRzyANVwNF9lkkpqeb9rsdJlVrQjFLxc6qBpGPyX7g7GbWhoCHl0QAvD_BwE";
    document.getElementById("link-peca3").href = "https://www.cea.com.br/calca-wide-leg-de-viscose-cintura-alta-com-elastico-areia-1048270-areia/p?gclid=CjwKCAjwyY6pBhA9EiwAMzmfwfjg0dNfmznM2Z3M_ftUqWuwHTm0iewuQdxv1LbWPiae5DmDh-QntRoCeFAQAvD_BwE";
    document.getElementById("link-peca4").href = "https://www.anacapri.com.br/tenis-cami-branco/p/3034100020005U?gclid=CjwKCAjwyY6pBhA9EiwAMzmfweQJgJDTbhmgGvf2URxiNFusaTdQGX_H8rakFcfHn52GCH80rLELjhoC_vMQAvD_BwE";

    document.getElementById("link-peca1-look2").href = "https://www.hering.com.br/camisa-feminina-manga-bufante-oversized-hf43nmcen/p?idsku=58275&gclid=CjwKCAjwyY6pBhA9EiwAMzmfwQPcng4ABrD9F4YCvDvafWgRHcmtLbvKtiUwfnAaabGjra6mtvUxkRoCbB8QAvD_BwE";
    document.getElementById("link-peca2-look2").href = "https://br.shein.com/Square-Buckle-Belt-p-11385068-cat-1875.html?utm_source=pinterest.com&utm_medium=cpc&utm_campaign=brpin_rmt_dpa_womenaccessory_sc2208251858405004&url_from=brpin_rmt_dpa_womenaccessory_sc2208251858405004&epik=dj0yJnU9Z051V094Ynl2UVVVeXJqTU04eHpwdXFXX3IwVURXeGMmcD0wJm49dFZnYWExTHE2ZTl6M2ZQc0NCUTBFUSZ0PUFBQUFBR1Vrcnlv";
    document.getElementById("link-peca3-look2").href = "https://br.shein.com/SHEIN-Frenchy-Solid-Wide-Leg-Pants-p-15495058-cat-1740.html?src_identifier=st%3D2%60sc%3Dcal%C3%A7a%20alfaiataria%20mostarda%60sr%3D0%60ps%3D1&src_module=search&src_tab_page_id=page_other1697060047744&mallCode=1";

    document.getElementById("link-look1").href ="https://br.pinterest.com/pin/730357264592614830/";
    document.getElementById("link-look2").href ="https://br.pinterest.com/pin/Ac7Cs94y6vBbHOc2jnbHDHEx3OGhWRz5hBGENy38jGl7jfZy97Zt_og/";

    document.getElementById("image1-tc").src = "{{asset('public/img/triangulo.png') }}";
    document.getElementById("image2-tc").src = "{{asset('public/img/trianguloinvertido.png') }}";
    document.getElementById("image3-tc").src = "{{asset('public/img/retangulo.png') }}";
    document.getElementById("image4-tc").src = "{{asset('public/img/ampulheta.png') }}";
    document.getElementById("image5-tc").src = "{{asset('public/img/oval.png') }}";

    document.getElementById("image1-e").src = "{{asset('public/img/esportivo.png') }}";
    document.getElementById("image2-e").src = "{{asset('public/img/romantico.png') }}";
    document.getElementById("image3-e").src = "{{asset('public/img/classico.png') }}";
    document.getElementById("image4-e").src = "{{asset('public/img/elegante.png') }}";
    document.getElementById("image5-e").src = "{{asset('public/img/criativo.png') }}";
    document.getElementById("image6-e").src = "{{asset('public/img/dramatico.png') }}";
    document.getElementById("image7-e").src = "{{asset('public/img/sexy.png') }}";

    document.getElementById("desc_1-look1").innerText = "Camiseta de Algodão mindset preto.                           ";
    document.getElementById("desc_2-look1").innerText = "Blazer alongado com linho manga longa preto.                 ";
    document.getElementById("desc_3-look1").innerText = "Calça wide leg de viscose cintura alta com elástico areia.   ";
    document.getElementById("desc_4-look1").innerText = "Tênis Cami Branco.                                           ";

    document.getElementById("desc_1-look2").innerText = "Camisa Feminina Manga Bufante Oversized - Off White.         ";
    document.getElementById("desc_2-look2").innerText = "Cintos Fivela quadrada.                                      ";
    document.getElementById("desc_3-look2").innerText = "SHEIN Frenchy Calças pernas largas sólido.                   ";

    ocasio1Element.innerText = "EXECUTIVA";
    estilo1Element.innerText = "ESPORTIVO";

    ocasio2Element.innerText = "EXECUTIVA";
    estilo2Element.innerText = "CRIATIVO";

    ocasio1Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo1Element.style.backgroundColor = 'rgba(62, 126, 164, 1)';

    ocasio2Element.style.backgroundColor = 'rgba(123, 123, 123, 1)';
    estilo2Element.style.backgroundColor = 'rgba(255, 187, 72, 1)';
   
    overlay1Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/triangle.png" alt="triangle"/>';
    overlay1Element.style.backgroundColor = 'rgba(255, 87, 26, 1)';

    overlay2Element.innerHTML = '<img src="https://img.icons8.com/fluency-systems-regular/30/rounded-square.png" alt="rounded-square"/>';
    overlay2Element.style.backgroundColor = 'rgba(242, 15, 15, 1)';

    buttonElement.addEventListener("click", function() {
      exibirAlertas();
    });

  }
}
}

document.addEventListener('DOMContentLoaded', () => {
  const banner1 = document.getElementById('banner1');
  const banner2 = document.getElementById('banner2');
  const banner3 = document.getElementById('banner3');
  const banner4 = document.getElementById('banner4');
  const banner5 = document.getElementById('banner5');

  function checkScreenWidth() {
        if (window.innerWidth <= 710) {
          // Se a largura da janela for menor ou igual a 710 pixels, troque a imagem
          banner1.src = '{{ asset('public/banner1-.png') }}';
          banner2.src = '{{ asset('public/banner2-.png') }}';
          banner3.src = '{{ asset('public/banner3-.png') }}';
          banner4.src = '{{ asset('public/banner4-.png') }}';
          banner5.src = '{{ asset('public/banner5-.png') }}';
      } else {
          // Caso contrário, volte para a imagem original
          banner1.src = '{{ asset('public/banner1.png') }}';
          banner2.src = '{{ asset('public/banner2.png') }}';
          banner3.src = '{{ asset('public/banner3.png') }}';
          banner4.src = '{{ asset('public/banner4.png') }}';
          banner5.src = '{{ asset('public/banner5.png') }}';
      }
  }

  // Chame a função inicialmente para configurar a imagem corretamente
  checkScreenWidth();

  // Adicione um ouvinte de evento para verificar a largura da janela quando ela for redimensionada
  window.addEventListener('resize', checkScreenWidth);
});


function exibirAlertasMasc() {
  Swal.fire({
    showCloseButton: true,
    title: 'DESCUBRA SEU TIPO CORPORAL',
    html: '<div class="html1"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
    '<h4>ENCONTRANDO MINHAS MEDIDAS</h4>'+
    '<p>Tenha em mãos um caderno, uma caneta e uma fita métrica. Posicione-se em frente a um espelho, com roupas que destacam o seu corpo (como um conjunto de academia ou um biquíni). Vamos medir e anotar as suas medidas:'+
    '<br><br><img src="public/img/m-medidas.svg" width=711px" height="284px"/><br><br><span>1° MEÇA A LARGURA DO SEUS OMBROS:</span> Posicione a fita métrica na lateral de um dos seus ombros e meça até encontrar a lateral inicial, unindo as extremidades da fita. Anote essa medida.'+
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
    'Triângulo': '<img src="public/img/m-triangulo.svg" width="150" height="300"/><br>Quadris mais largos que os Ombros e a Cintura.',
    'Triângulo Invertido': '<img src="public/img/m-trianguloinvertido.svg" width="150" height="300"/><br>Ombros mais largos que os Quadris e a Cintura.',
    'Retângulo': '<img src="public/img/m-retangulo.svg" width="150" height="300"/><br>Ombros, Cintura e Quadris com larguras semelhantes.',
    'Trapézio': '<img src="public/img/m-trapezio.svg" width="150" height="300"/><br>Ombros e Cintura mais largos que o quadril.',
    'Oval': '<img src="public/img/m-oval.svg" width="150" height="300"/><br>Cintura mais larga que Ombros e Quadris.',
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
        '<br><img src="public/img/m-result1.png" width="auto" height="auto"/>'+
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
        '<br><img src="public/img/m-result2.png" width="auto" height="auto"/>'+
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
        '<br><img src="public/img/m-result3.png" width="auto" height="auto"/>'+
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
else if (corpo == 'Trapézio') {
Swal.fire({ 
  title: 'DESCUBRA SEU TIPO CORPORAL',
  showCloseButton: true,
  confirmButtonColor: 'black',
  confirmButtonText: 'CONCLUÍDO',
  width: '950px',
  html: '<div class="html3"><br><div class="circle1"><h1>1</h1></div><div class="circle2"><h1>2</h1></div><div class="circle3"><h1>3</h1></div><br><br>'+
        '<h4>RESULTADO</h4>'+
        `Provavelmente o seu tipo corporal é ...  ${corpo} `+
        '<br><img src="public/img/m-result4.png" width="auto" height="auto"/>'+
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
        '<br><img src="public/img/m-result5.png" width="auto" height="auto"/>'+
        '<p>Agora que você conhece o seu tipo de corpo, personalize suas escolhas no site e vista apenas o que realça a sua beleza!</p>'+
        '<p><span>"Lembre-se, não existe um tipo de corpo ideal! Priorize sentir-se bem e adequado ao seu estilo de vida e personalidade. Você é extraordinário!"<span></p>',
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
