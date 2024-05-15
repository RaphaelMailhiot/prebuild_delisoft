<section id="exemples-select">
  <div class="container">
    <fieldset id="exemples-select-fieldset">
      <legend>Choisir un exemple</legend>

      <div>
        <input type="radio" id="exemple1" name="exemples" value="exemples1" checked />
        <label for="exemple1">Exemple 1</label>
      </div>

      <div>
        <input type="radio" id="exemple2" name="exemples" value="exemples2" />
        <label for="exemple2">Exemple 2</label>
      </div>
    </fieldset>
  </div>

</section>

<?php

// Récupérez tous les fichiers PHP dans le dossier
$files = glob('_components/exemples/_partials/*.php');

// Incluez chaque fichier trouvé
foreach ($files as $file) {
  include $file;
} ?>


<script>
  const radios = document.querySelectorAll("#exemples-select-fieldset input[type=\"radio\"]");
  const exemples = document.querySelectorAll(".exemples");

  exemples.forEach(element => {
    if (element.id !== "exemples1"){
      element.style.display = "none";
    }
  });

  // Ajouter un écouteur d'événements à chaque bouton radio
  radios.forEach(function(radio) {
    radio.addEventListener("change", function() {
      if (this.checked) {
        exemples.forEach(element => {
          if (element.id === this.value) {
            console.log(element);
            element.style.display = "block";
          } else {
            element.style.display = "none";
          }
        })
      }
    });
  });
</script>
