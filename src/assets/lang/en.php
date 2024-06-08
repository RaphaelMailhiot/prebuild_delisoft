<?php

$descriptionbase = "CeciEstLaDescriptionDeBase";
$keywordsbase = "CeuxCiSontLesKeywordsDeBase";

$meta['all'][0] ="All - $namebase";
$meta['all'][1] ="$descriptionbase";
$meta['all'][2] ="$keywordsbase";

$meta['a-propos'][0] ="About - $namebase";
$meta['a-propos'][1] ="$descriptionbase";
$meta['a-propos'][2] ="$keywordsbase, à propos,";

$meta['traduction'][0] ="Translation - $namebase";
$meta['traduction'][1] ="Translation";
$meta['traduction'][2] ="$keywordsbase, translation";

$meta['contact'][0] ="Contact - $namebase";
$meta['contact'][1] ="Contact an employee of our expert team now.";
$meta['contact'][2] ="contacter, contact,";

switch ($page) {
    case "single-post":
        $titre = "Article";
        $description = "Article";
        $keywords = "Article";
        break;
    case "single-carreer":
        $titre = "Carrière";
        $description = "Carrière";
        $keywords = "Carrière";
        break;
    case "seo-1":
        $province = $_GET['province'];
        $town = $_GET['town'];
        $service = $_GET['service'];
        $townclean = str_replace('-', ' ', $town);
        $serviceclean = str_replace('-', ' ', $service);
        $valueclean = str_replace('-', ' ', $value);

        $titre = "SEO " . $town . "- $namebase";
        $description = "SEO at " . $town . " $namebase. $descriptionbase";
        $keywords = "$keywordsbase, $namebase" . $town . ",";
        break;
    default:
        $titre = $meta[$page][0];
        $description = $meta[$page][1];
        $keywords = $meta[$page][2];
}
