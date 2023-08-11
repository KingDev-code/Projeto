    function updateCheckboxCount() {
      // Obtém todas as checkboxes
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');

      // Conta o número de checkboxes selecionadas
      var count = 0;
      checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
          count++;
        }
      });

      // Atualiza a tag <p> com o número de checkboxes selecionadas
      var checkboxCountElement = document.getElementById('checkbox-count');
      checkboxCountElement.textContent = count.toString();
    }