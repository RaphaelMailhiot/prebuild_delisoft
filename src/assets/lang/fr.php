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

$meta['avantages'][0] ="Avantages - $namebase";
$meta['avantages'][1] ="$descriptionbasefr";
$meta['avantages'][2] ="$keywordsbasefr, avantages,";
$meta['avantages'][3] ="a-propos/avantages";

$meta['deroulement'][0] ="Déroulement - $namebase";
$meta['deroulement'][1] ="$descriptionbasefr";
$meta['deroulement'][2] ="$keywordsbasefr, déroulement,";
$meta['deroulement'][3] ="a-propos/deroulement";

$meta['services'][0] ="Services - $namebase";
$meta['services'][1] ="$descriptionbasefr";
$meta['services'][2] ="$keywordsbasefr, services,";
$meta['services'][3] ="services";

$meta['realisations'][0] ="Réalisations - $namebase";
$meta['realisations'][1] ="$descriptionbasefr";
$meta['realisations'][2] ="$keywordsbasefr, réalisations,";
$meta['realisations'][3] ="realisations";

$meta['contact'][0] ="Contact - $namebase";
$meta['contact'][1] ="Contactez un employé de notre équipe d'expert dès maintenant.";
$meta['contact'][2] ="contacter, contact,";
$meta['contact'][3] ="contact";

$meta['exemples'][0] ="Exemples - $namebase";
$meta['exemples'][1] ="Exemples";
$meta['exemples'][2] ="exemples";
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
