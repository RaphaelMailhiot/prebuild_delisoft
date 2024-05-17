<div class="pt-10 pb-10">
  <div class="seo-h1">Partenaires</div>

  <?php

  // Récupérez tous les fichiers PHP dans le dossier
  $files = glob('_components/partenaires/_partials/*.php');

  // Incluez chaque fichier trouvé
  foreach ($files as $file) {
    include $file;
    include "_components/divider.php";
  } ?>

</div>
<div class="divider"></div>
