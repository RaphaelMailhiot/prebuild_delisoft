<main id="exemples-random" class="exemples">

    <?php

    // Récupérez tous les fichiers PHP dans le dossier
    $exemplesRandomSliders = glob('_components/sliders/_partials/*.php');
    $exemplesRandomFourSections = glob('_components/four-sections/_partials/*.php');
    $exemplesRandomBlocTexte = glob('_components/bloc-texte/_partials/*.php');
    $exemplesRandomServices = glob('_components/services/_partials/*.php');
    $exemplesRandomPartenaires = glob('_components/partenaires/_partials/*.php');

    // Random section
    $SlidersNumber = rand(1, count($exemplesRandomSliders));
    $FourSectionsNumber = rand(1, count($exemplesRandomFourSections));
    $BlocTexteNumber = rand(1, count($exemplesRandomBlocTexte));
    $ServicesNumber = rand(1, count($exemplesRandomServices));
    $PartenairesNumber = rand(1, count($exemplesRandomPartenaires));

    // Include l'exemple
    include "_components/sliders/_partials/sliders" . $SlidersNumber . ".php";
    include "_components/four-sections/_partials/fs" . $FourSectionsNumber . ".php";
    include "_components/bloc-texte/_partials/bloc-texte" . $BlocTexteNumber . ".php";
    include "_components/services/_partials/services" . $ServicesNumber . ".php";
    include "_components/partenaires/_partials/partenaires" . $PartenairesNumber . ".php";

    ?>

</main>
