<main id="exemples-random" class="exemples">

    <?php

    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    // Récupérez tous les fichiers PHP dans le dossier
    $exemplesRandomSliders = glob('_components/section/sliders/_partials/*.php');
    $exemplesRandomFourSections = glob('_components/section/four-sections/_partials/*.php');
    $exemplesRandomBlocTexte = glob('_components/section/bloc-texte/_partials/*.php');
    $exemplesRandomServices = glob('_components/section/services/_partials/*.php');
    $exemplesRandomPartenaires = glob('_components/section/partenaires/_partials/*.php');

    // Random section
    $SlidersNumber = rand(1, count($exemplesRandomSliders));
    $FourSectionsNumber = rand(1, count($exemplesRandomFourSections));
    $BlocTexteNumber = rand(1, count($exemplesRandomBlocTexte));
    $ServicesNumber = rand(1, count($exemplesRandomServices));
    $PartenairesNumber = rand(1, count($exemplesRandomPartenaires));

    // Include l'exemple
    include "_components/section/sliders/_partials/sliders" . $SlidersNumber . ".php";
    include "_components/section/four-sections/_partials/fs" . $FourSectionsNumber . ".php";
    include "_components/section/bloc-texte/_partials/bloc-texte" . $BlocTexteNumber . ".php";
    include "_components/section/services/_partials/services" . $ServicesNumber . ".php";
    include "_components/section/partenaires/_partials/partenaires" . $PartenairesNumber . ".php";

    ?>

</main>
