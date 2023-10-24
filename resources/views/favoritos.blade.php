@extends('layouts.usuario')

@section('conteudo')

<link rel="stylesheet" href="css/favoritos.css">

<!-- Seção 2 - Combinação e suas peças -->
    <!-- Seção 2 - Look1 -->
    <div class="content">

          <!-- Indicador -->
      <div id="indicator">
        <ul>
          <li><a href="index.html">Veste-me</a></li>
          <div id="arrow"></div>
          <li><a href="favoritos.html">Favoritos</a></li>
        </ul>
      </div>

        <div class="title-section">
            <i id="favoritos_icon" class="material-icons-outlined">favorite_border</i>
            <h2 class="section-title"><b>Favoritos</b></h2>
        </div>

<div class="combinacoes-looks">
        
            <div class="secao-pecas">
                <div class="card">
                    <img src="img/favorito1.png">
                </div>
                <h2 class="ocasiao">Comemorações</h2>
                <div class="icon-overlay"><img width="30" height="30" src="https://img.icons8.com/fluency-systems-regular/30/empty-hourglass.png" alt="empty-hourglass"/> </div>
                <p id="desc">Camisa social - Rosa</p>
                <p id="desc">Saia Midi com fenda - Vermelha</p>
                <p><b>R$ 69,99</b></p>
                <p class="estilo-card">ELEGANTE</p>
                <i id="icone_" class="material-icons-outlined" onclick="toggleLike(this)">favorite</i>
          </div>

          <div class="secao-pecas">
              <div class="card">
                  <img src="img/favorito2.png">
              </div>
              <h2 class="ocasiao">Esportivos</h2>
              <div class="icon-overlay"><img width="30" height="30" src="https://img.icons8.com/fluency-systems-regular/30/empty-hourglass.png" alt="empty-hourglass"/> </div>
              <p id="desc">Camiseta Branca</p>
              <p id="desc">Calça Legging Animal Print - Preta</p>
              <p><b>R$ 35,20</b></p>
              <p class="estilo-card">ELEGANTE</p>
              <i id="icone_" class="material-icons-outlined" onclick="toggleLike(this)">favorite</i>
        </div>

        <div class="secao-pecas">
              <div class="card">
                  <img src="img/favorito3.png">
              </div>
              <h2 class="ocasiao">Comemorações</h2>
              <div class="icon-overlay"><img width="30" height="30" src="https://img.icons8.com/fluency-systems-regular/30/empty-hourglass.png" alt="empty-hourglass"/> </div>
              <p id="desc">Blusa - Preta</p>
              <p id="desc">Shorts Couro Fake - Preto</p>
              <p><b>R$ 98,90</b></p>
              <p class="estilo-card">ELEGANTE</p>
              <i id="icone_" class="material-icons-outlined" onclick="toggleLike(this)">favorite</i>
        </div>

        <div class="secao-pecas">
              <div class="card">
                  <img src="img/favorito4.png">
              </div>
              <h2 class="ocasiao">Comemorações</h2>
              <div class="icon-overlay"><img width="30" height="30" src="https://img.icons8.com/fluency-systems-regular/30/empty-hourglass.png" alt="empty-hourglass"/> </div>
              <p id="desc">Vestido Midi Tropical - Branco</p>
              <p id="desc">Salto Médio - Bege</p>
              <p><b>R$ 98,90</b></p>
              <p class="estilo-card">ELEGANTE</p>
              <i id="icone_" class="material-icons-outlined" onclick="toggleLike(this)">favorite</i>
        </div>
        

  </div>
</div>

@endsection