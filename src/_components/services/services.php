<div class="pt-10 pb-10">
  <div class="seo-h1">Services</div>

  <?php

  // Récupérez tous les fichiers PHP dans le dossier
  $files = glob('_components/services/_partials/*.php');

  // Incluez chaque fichier trouvé
  foreach ($files as $file) {
    include $file;
  } ?>

</div>
<div class="divider"></div>
