<?php

// Récupérez tous les fichiers PHP dans le dossier
$files = glob('_components/sliders/_partials/*.php');

// Incluez chaque fichier trouvé
foreach ($files as $file) {
    include $file;
}
