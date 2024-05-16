<?php
$page = $_GET["page"];
$lang = $_GET["lang"];
$url = 'https://' . $_SERVER["HTTP_HOST"] . '/';

// TODO Mettre le nom du site
$namebase = "NomDeLaCompagnie";

include("assets/lang/" . $lang . ".php");
include("assets/lang/lang.php");
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
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- font -->
  <link rel="preconnect" href="https://ka-f.fontawesome.com">
  <script src="https://kit.fontawesome.com/747138080a.js" crossorigin="anonymous"></script>

  <!-- Styles -->
  <link rel="stylesheet" href="/styles/main.css" />

  <!-- jquery -->
  <!--s'il y a un bug mettre la version 3.6.0-->
  <script src="/jquery/jquery-3.7.1.min.js"></script>

  <!-- scripts -->
  <script src="/scripts/main.js" defer></script>

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
    'fr' => [
      //'header' => 'header.php',
      //'footer' => 'footer.php',

      'accueil' => 'views/accueil.php',
      'a-propos' => 'views/a-propos.php',
      'avantages' => 'views/a-propos.php',
      'deroulement' => 'views/a-propos.php',
      //'services' => 'services.php',
      //'realisations' => 'realisations.php',
      'contact' => 'views/contact.php',
      'exemples' => 'views/exemples.php',

      // Mettre les autres pages ici
      'seo' => null
    ]
  ];

  include('_components/header/header.php');

  include($titrePage[$lang][$page]);

  include('_components/footer/footer.php');

  //Pour les Cookies si nécessaire
  //Ne pas oublier le gtag
  //include('_components/cookies/cookies.php')

  ?>

</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa-solid fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- plugins-jquery -->
<script src="/jquery/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>const plugin_path = "/jquery/";</script>

<!-- custom -->
<script src="/jquery/custom.js"></script>

</body>
</html>
