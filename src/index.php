<?php
$page = $_GET["page"];
$lang = $_GET["lang"];

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER["HTTP_HOST"] . '/';
$wpUrl = "http://z-prebuild.temoignagevideo.com/api/";

// TODO Mettre le nom du site
$namebase = "NomDeLaCompagnie";

// TODO Est-ce que il y a du seo
$seo = true;

include("assets/lang/" . $lang . ".php");
// Pour les sites multi-langues
include("assets/lang/lang.php");
include("assets/lang/" . $lang . "/header.php");
include("assets/lang/" . $lang . "/" . $page . ".php");
include("assets/lang/" . $lang . "/footer.php");
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
  <title><?= $titre ?></title>
  <meta name="author" content="Delisoft : https://delisoft.ca">
  <meta name="description" content="<?= $description ?>">
  <meta itemprop="description" content="<?= $description ?>">
  <meta name="keywords" content="<?= $keywords ?>">


  <!-- Favicon -->
  <link rel="shortcut icon" href="/assets/images/favicon.ico">

  <!-- font -->
  <link rel="preconnect" href="https://ka-f.fontawesome.com">
  <script src="https://kit.fontawesome.com/747138080a.js" crossorigin="anonymous"></script>

  <!-- Styles -->
  <link rel="stylesheet" href="/styles/main.css" />
  <?php if ($page === "single-post") {
    echo '<link rel="stylesheet" href="' . $wpUrl . 'wp-content/themes/twentytwentyfour/style.css">';
  }
  ?>

  <!-- scripts -->
  <script src="/scripts/main.js" defer></script>

  <?php

  /*preload les images lourdes du slider aide la performance*/
  switch ($page) {
    case "accueil-1":
      echo('<link rel="preload" href="' . $url . 'assets/images/placeholder/sliders6-s1-bg.webp" as="image">');
      break;
    case "accueil-2":
      echo('<link rel="preload" href="' . $url . 'assets/images/placeholder/accueil/accueil2-slider-bg.webp" as="image">');
      break;
    case "accueil-3":
      echo('<link rel="preload" href="' . $url . 'assets/images/placeholder/sliders5-bg.webp" as="image">');
      break;
    case "accueil-4":
      echo('<link rel="preload" href="' . $url . 'assets/images/placeholder/accueil/accueil4-slider1-bg.webp" as="image">');
      break;
    case "accueil-5":
      echo('<link rel="preload" href="' . $url . 'assets/images/placeholder/sliders3-bg.webp" as="image">');
      break;
  }

  ?>

  <!-- slider revolution -->
  <!-- SI VOUS NE L'UTILISEZ PAS METTRE EN COMMENTAIRE -->
  <!--<link rel="stylesheet" type="text/css" media="all"
        href="https://revolution.delisoft.ca/revslider/public/assets/css/settings.css">
  <script src="https://revolution.delisoft.ca/revslider/public/assets/js/jquery.themepunch.tools.min.js"></script>
  <script src="https://revolution.delisoft.ca/revslider/public/assets/js/jquery.themepunch.revolution.min.js"></script>
  <script id="revslider_script" src="https://revolution.delisoft.ca/assets/js/revslider.js"></script>-->

</head>

<body>

<div class="wrapper">

  <?php

  $titrePage = [
    'header' => '_components/header/header.php',
    'footer' => '_components/footer/footer.php',

    'all' => 'views/all.php',

    'accueil-1' => '_components/accueil/accueil1.php',
    'accueil-2' => '_components/accueil/accueil2.php',
    'accueil-3' => '_components/accueil/accueil3.php',
    'accueil-4' => '_components/accueil/accueil4.php',
    'accueil-5' => '_components/accueil/accueil5.php',

    'a-propos' => 'views/a-propos.php',
    'a-propos-avantages' => 'views/a-propos.php',
    'a-propos-deroulement' => 'views/a-propos.php',
    'a-propos-faq' => 'views/a-propos.php',

    'exemples' => 'views/exemples.php',

    'traduction' => 'views/traduction.php',

    'blogue' => '_components/wp/blogue.php',
    'boutique' => '_components/wp/boutique.php',
    'single-post' => '_components/wp/single-post.php',

    // LES _COMPONENTS
    //'about' => '_components/about/about.php',
    'components-avantages' => '_components/avantages/avantages.php',
    'components-actionbox' => '_components/actionbox/actionbox.php',
    'components-bloc-texte' => '_components/bloc-texte/bloc-texte.php',
    'components-contact' => '_components/contact/contact.php',
    'components-four-sections' => '_components/four-sections/four-sections.php',
    'components-modules' => '_components/modules/modules.php',
    'components-partenaires' => '_components/partenaires/partenaires.php',
    'components-services' => '_components/services/services.php',
    'components-sliders' => '_components/sliders/sliders.php',
    'components-temoignages' => '_components/temoignages/temoignages.php',

    // SEO
    'seo' => null
  ];

  include($titrePage['header']);

  include($titrePage[$page]);

  if ($seo) {
    include('assets/seo/module-ville.php');
  }

  include($titrePage['footer']);

  //Pour les Cookies si nécessaire
  //Ne pas oublier le gtag
  include('_components/cookies/cookies.php');

  ?>

</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa-solid fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!--s'il y a un bug mettre la version 3.6.0-->
<script src="/jquery/jquery-3.7.1.min.js"></script>

<!-- plugins-jquery -->
<script src="/jquery/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>const plugin_path = "/jquery/";</script>

<!-- custom -->
<script src="/jquery/custom.js"></script>

</body>
</html>
