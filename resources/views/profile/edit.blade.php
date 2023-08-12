<x-app-layout>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


 <!-- Referência a pasta em que está o CSS -->
 <link rel="stylesheet" href="/css/personaldata.css">

 <!-- Referência a pasta em que está o Java Script -->
 <script src="/js/personaldata.js"></script>

<div id="indicator">
<ul>
  <li><a href="#Menu - versão 1">Veste-me</a></li>
  <div id="arrow"></div>
  <li><a href="#Tela de Favoritos">Dados Pessoais</a></li>
  <div id="arrow"></div>
  <li><a href="#Tela de Favoritos">Enviar combinação</a></li>
</ul>
</div>

<br>
  <br>
<div class="content">
  <h1> Dados Pessoais </h1>
  <br>
  <br>
  <br>

<div class="filtro">
  <div class="circle" onclick="document.getElementById('file-input').click()">
    <input id="file-input" type="file" style="display: none;">
    <span class="material-icons-sharp">add_photo_alternate</span>
  </div>
  
  <div class="usu">
    <p>NOVA FOTO DE PERFIL</p>
    <h2>Gabriela</h2>
  </div>
  <div class="menu">
    <a href="#info">Dados Pessoais</a> <!--<span class="material-icons-sharp">person_outline</span>-->
    <div class="top-line"></div>
    <br> 
    <br>
    <a href="#info">Senha</a>
    <div class="top-line"></div>
    <br> 
    <br>
    <a href="#info">Desativar Conta</a>
    <div class="top-line"></div>
  </div>
  </div>


<div class="container-comb">
  <div class="forms">
    @include('profile.partials.update-profile-information-form')
    <br>
    <br>
    @include('profile.partials.update-password-form')
    <br>
    <br>
    @include('profile.partials.delete-user-form')
    <br>
    <br>
    <br>
    <br>
    <div class="btn2">
    <button>Salvar Alterações</button>
    </div>
  </div>
</div>

</x-app-layout>
