window.onscroll = function() {scrollFunction()};
      var img = document.getElementById("logo");
      
      function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

        img.src = "associate/img/img_logo1.png";
      } else {
        img.src = "associate/img/img_logo.png";
      }
    };

    var iconeUsuário = document.getElementById("iconeUsuário");
    iconeUsuário.addEventListener("click", trocarÍconeUsuário);
    
    var iconeCoração = document.getElementById("iconeCoração");
    iconeCoração.addEventListener("click", trocarÍconeCoração);

    function trocarÍconeCoração() {
      if (iconeCoração.classList.contains("fa-regular fa-heart")) {
        iconeCoração.classList.remove("fa-regular fa-heart");
        iconeCoração.classList.add("fa-solid fa-heart");
      } else {
        iconeCoração.classList.remove("fa-solid fa-heart");
        iconeCoração.classList.add("fa-regular fa-heart");
      }
    }

    function trocarÍconeUsuário() {
      if (iconeUsuário.classList.contains("fa-regular fa-user")) {
        iconeUsuário.classList.remove("fa-regular fa-user");
        iconeUsuário.classList.add("fa-solid fa-user");
      } else {
        iconeUsuário.classList.remove("fa-solid fa-user");
        iconeUsuário.classList.add("fa-regular fa-user");
      }
    }

    //Ícone look
   function toggleLike(icon) {
   if (icon.classList.contains("fa-regular fa-heart")) {
    icon.classList.remove("fa-regular fa-heart");
    icon.classList.add("fa-solid fa-heart");
   } else {
    icon.classList.remove("fa-solid fa-heart");
    icon.classList.add("fa-regular fa-heart");
   }
}