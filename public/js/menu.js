window.onscroll = function() {scrollFunction()};
      var img = document.getElementById("logo");
      
      function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

     img.src = "{{asset('public/img/Logo Veste-me - Círculo - Preta.png') }}"; 
     img.style.maxWidth = "120px"; // Altere para o novo valor de max-width desejado em pixels
     img.style.paddingBottom = "20px";
     img.style.transition = "opacity 0.5s";
     img.style.cursor = "pointer";
     img.style.display = "block";
    } else {
     img.src = "{{asset('public/img/Logo Veste-me - Preta.png') }}";
     img.style.maxWidth = "250px"; // Altere para o novo valor de max-width desejado em pixels
     img.style.transition = "opacity 0.5s";
     img.style.cursor = "pointer";
     img.style.display = "block";
     img.style.paddingBottom = "0px";
    }
  };


// Simule o estado de login (true para logado, false para não logado)
var usuarioLogado = false;

// Adicionar um evento de clique ao ícone de usuário
document.getElementById("iconeUsuario").addEventListener("click", function() {
    if (usuarioLogado) {
        // Se o usuário estiver logado, redirecione para a tela de dadospessoais
        window.location.href = "dadospessoais.html";
    } else {
        // Se o usuário não estiver logado, redirecione para a tela categoria
        window.location.href = "categoria.html";
    }
});