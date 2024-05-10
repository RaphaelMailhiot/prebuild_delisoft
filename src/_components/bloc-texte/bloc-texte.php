<div class="pt-10 pb-10">
  <div class="seo-h1">Bloc-texte</div>

  <?php

  // Récupérez tous les fichiers PHP dans le dossier
  $files = glob('_components/bloc-texte/_partials/*.php');

  // Incluez chaque fichier trouvé
  foreach ($files as $file) {
    include $file;
  } ?>

</div>
<div class="divider"></div>
