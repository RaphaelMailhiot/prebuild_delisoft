<?php

$descriptionbaseen = "CeciEstLaDescriptionDeBase";
$keywordsbaseen = "CeuxCiSontLesKeywordsDeBase";

$meta['all'][0] ="All - $namebase";
$meta['all'][1] ="$descriptionbaseen";
$meta['all'][2] ="$keywordsbaseen";
$meta['all']['en'] ="en";

$meta['a-propos'][0] ="About - $namebase";
$meta['a-propos'][1] ="$descriptionbaseen";
$meta['a-propos'][2] ="$keywordsbaseen, à propos,";
$meta['a-propos']['en'] ="en/about";

$meta['traduction'][0] ="Translation - $namebase";
$meta['traduction'][1] ="Translation";
$meta['traduction'][2] ="$keywordsbaseen, translation";
$meta['traduction']['en'] ="translation";

$meta['contact'][0] ="Contact - $namebase";
$meta['contact'][1] ="Contact an employee of our expert team now.";
$meta['contact'][2] ="contacter, contact,";
$meta['contact']['en'] ="en/contact";


$province = $_GET['province'];
$town = $_GET['town'];
$service = $_GET['service'];
$townclean = str_replace('-', ' ', $town);
$serviceclean = str_replace('-', ' ', $service);
$valueclean = str_replace('-', ' ', $value);


if ($page == "seo-1-en") {
    $titre = "SEO " . $category . "- $namebase";
    $description = "SEO at " . $category . " $namebase. $descriptionbaseen";
    $keywords = "$keywordsbaseen, $namebase" . $category . ",";
} else {
    $titre = $meta[$page][0];
    $description = $meta[$page][1];
    $keywords = $meta[$page][2];
}
$meta['seo1']['en'] = "/en/";
