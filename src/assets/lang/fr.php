<?php

$descriptionbasefr = "CeciEstLaDescriptionDeBase";
$keywordsbasefr = "CeuxCiSontLesKeywordsDeBase";

$meta['accueil'][0] ="Accueil - $namebase";
$meta['accueil'][1] ="$descriptionbasefr";
$meta['accueil'][2] ="$keywordsbasefr";
$meta['accueil'][3] ="";

$meta['a-propos'][0] ="À propos - $namebase";
$meta['a-propos'][1] ="$descriptionbasefr";
$meta['a-propos'][2] ="$keywordsbasefr, à propos,";
$meta['a-propos'][3] ="a-propos";

$meta['a-propos-avantages'][0] ="Avantages - $namebase";
$meta['a-propos-avantages'][1] ="$descriptionbasefr";
$meta['a-propos-avantages'][2] ="$keywordsbasefr, avantages,";
$meta['a-propos-avantages'][3] ="a-propos/avantages";

$meta['a-propos-deroulement'][0] ="Déroulement - $namebase";
$meta['a-propos-deroulement'][1] ="$descriptionbasefr";
$meta['a-propos-deroulement'][2] ="$keywordsbasefr, déroulement,";
$meta['a-propos-deroulement'][3] ="a-propos/deroulement";

$meta['traduction'][0] ="Traduction - $namebase";
$meta['traduction'][1] ="Traduction";
$meta['traduction'][2] ="$keywordsbasefr, traduction";
$meta['traduction'][3] ="traduction";

$meta['exemples'][0] ="Exemples - $namebase";
$meta['exemples'][1] ="Exemples";
$meta['exemples'][2] ="$keywordsbasefr, exemples";
$meta['exemples'][3] ="exemples";


$province=$_GET['province'];
$town=$_GET['town'];
$service=$_GET['service'];
$townclean = str_replace('-', ' ', $town);
$serviceclean = str_replace('-', ' ', $service);
$valueclean = str_replace('-', ' ', $value);


if ($page == "seo-1") {
    $titre = "SEO " . $town . "- $namebase";
    $description = "SEO à " . $town . " $namebase. $descriptionbasefr";
    $keywords = "$keywordsbasefr, $namebase" . $town . ",";
} else {
    $titre = $meta[$page][0];
    $description = $meta[$page][1];
    $keywords = $meta[$page][2];
}


// LES PAGES D'EXEMPLES

$meta['components-avantages'][0] ="Avantages - $namebase";
$meta['components-avantages'][1] ="Exemples";
$meta['components-avantages'][2] ="components-avantages";
$meta['components-avantages'][3] ="components/avantages";

$meta['components-actionbox'][0] ="ActionBox - $namebase";
$meta['components-actionbox'][1] ="Exemples";
$meta['components-actionbox'][2] ="components-actionbox";
$meta['components-actionbox'][3] ="components/actionbox";

$meta['components-bloc-texte'][0] ="Bloc-texte - $namebase";
$meta['components-bloc-texte'][1] ="Exemples";
$meta['components-bloc-texte'][2] ="components-bloc-texte";
$meta['components-bloc-texte'][3] ="components/bloc-texte";

$meta['components-contact'][0] ="Contact - $namebase";
$meta['components-contact'][1] ="Exemples";
$meta['components-contact'][2] ="components-contact";
$meta['components-contact'][3] ="components/contact";

$meta['components-four-sections'][0] ="Four-sections - $namebase";
$meta['components-four-sections'][1] ="Exemples";
$meta['components-four-sections'][2] ="components-four-sections";
$meta['components-four-sections'][3] ="components/four-sections";

$meta['components-modules'][0] ="Modules - $namebase";
$meta['components-modules'][1] ="Exemples";
$meta['components-modules'][2] ="components-modules";
$meta['components-modules'][3] ="components/modules";

$meta['components-partenaires'][0] ="Partenaires - $namebase";
$meta['components-partenaires'][1] ="Exemples";
$meta['components-partenaires'][2] ="components-partenaires";
$meta['components-partenaires'][3] ="components/partenaires";

$meta['components-services'][0] ="Services - $namebase";
$meta['components-services'][1] ="Exemples";
$meta['components-services'][2] ="components-services";
$meta['components-services'][3] ="components/services";

$meta['components-sliders'][0] ="Sliders - $namebase";
$meta['components-sliders'][1] ="Exemples";
$meta['components-sliders'][2] ="components-sliders";
$meta['components-sliders'][3] ="components/sliders";

$meta['components-temoignages'][0] ="Témoignages - $namebase";
$meta['components-temoignages'][1] ="Exemples";
$meta['components-temoignages'][2] ="components-temoignages";
$meta['components-temoignages'][3] ="components/temoignages";
