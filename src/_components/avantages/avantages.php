<div class="page-section-ptb">
<div class="seo-h1">Avantages</div>

<?php

// Récupérez tous les fichiers PHP dans le dossier
$files = glob('_components/avantages/_partials/*.php');

// Incluez chaque fichier trouvé
foreach ($files as $file) {
    include $file;
} ?>

<div class="divider"></div>
</div>
