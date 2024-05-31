<?php

$descriptionbase = "CeciEstLaDescriptionDeBase";
$keywordsbase = "CeuxCiSontLesKeywordsDeBase";

$meta['all'][0] ="All - $namebase";
$meta['all'][1] ="$descriptionbase";
$meta['all'][2] ="$keywordsbase";
$meta['all'][3] ="";

$meta['a-propos'][0] ="À propos - $namebase";
$meta['a-propos'][1] ="$descriptionbase";
$meta['a-propos'][2] ="$keywordsbase, à propos,";
$meta['a-propos'][3] ="a-propos";

$meta['a-propos-avantages'][0] ="Avantages - $namebase";
$meta['a-propos-avantages'][1] ="$descriptionbase";
$meta['a-propos-avantages'][2] ="$keywordsbase, avantages,";
$meta['a-propos-avantages'][3] ="a-propos/avantages";

$meta['a-propos-deroulement'][0] ="Déroulement - $namebase";
$meta['a-propos-deroulement'][1] ="$descriptionbase";
$meta['a-propos-deroulement'][2] ="$keywordsbase, déroulement,";
$meta['a-propos-deroulement'][3] ="a-propos/deroulement";

$meta['a-propos-faq'][0] ="FAQ - $namebase";
$meta['a-propos-faq'][1] ="$descriptionbase";
$meta['a-propos-faq'][2] ="$keywordsbase, faq,";
$meta['a-propos-faq'][3] ="a-propos/faq";

$meta['traduction'][0] ="Traduction - $namebase";
$meta['traduction'][1] ="Traduction";
$meta['traduction'][2] ="$keywordsbase, traduction";
$meta['traduction'][3] ="traduction";

$meta['exemples'][0] ="Exemples - $namebase";
$meta['exemples'][1] ="Exemples";
$meta['exemples'][2] ="$keywordsbase, exemples";
$meta['exemples'][3] ="exemples";


// LES PAGES D'ACCUEIL
$meta['accueil-1'][0] ="Accueil 1 - $namebase";
$meta['accueil-1'][1] ="$descriptionbase";
$meta['accueil-1'][2] ="$keywordsbase";
$meta['accueil-1'][3] ="accueil/1";

$meta['accueil-2'][0] ="Accueil 2 - $namebase";
$meta['accueil-2'][1] ="$descriptionbase";
$meta['accueil-2'][2] ="$keywordsbase";
$meta['accueil-2'][3] ="accueil/2";

$meta['accueil-3'][0] ="Accueil 3 - $namebase";
$meta['accueil-3'][1] ="$descriptionbase";
$meta['accueil-3'][2] ="$keywordsbase";
$meta['accueil-3'][3] ="accueil/3";

$meta['accueil-4'][0] ="Accueil 4 - $namebase";
$meta['accueil-4'][1] ="$descriptionbase";
$meta['accueil-4'][2] ="$keywordsbase";
$meta['accueil-4'][3] ="accueil/4";

$meta['accueil-5'][0] ="Accueil 5 - $namebase";
$meta['accueil-5'][1] ="$descriptionbase";
$meta['accueil-5'][2] ="$keywordsbase";
$meta['accueil-5'][3] ="accueil/5";


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


// SEO
$province=$_GET['province'];
$town=$_GET['town'];
$service=$_GET['service'];
$townclean = str_replace('-', ' ', $town);
$serviceclean = str_replace('-', ' ', $service);
$valueclean = str_replace('-', ' ', $value);


if ($page == "seo-1") {
    $titre = "SEO " . $town . "- $namebase";
    $description = "SEO à " . $town . " $namebase. $descriptionbase";
    $keywords = "$keywordsbase, $namebase" . $town . ",";
} else {
    $titre = $meta[$page][0];
    $description = $meta[$page][1];
    $keywords = $meta[$page][2];
}
