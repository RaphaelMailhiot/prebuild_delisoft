<?php
$page = $_GET["page"];
$lang = $_GET["lang"];

// TODO Mettre l'URL du site
$url = "http://prebuild/";

// TODO Mettre le nom du site
$namebase = "NomDeLaCompagnie";

// TODO POUR LES TEST
$lang = 'fr';

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
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- font -->
  <script src="https://kit.fontawesome.com/747138080a.js" crossorigin="anonymous"></script>

  <!-- Styles -->
  <link rel="stylesheet" href="styles/main.css" />
  <!--<link rel="stylesheet" type="text/css" href="<?php /*= $url */?>css/plugins-css.min.css">
  <link rel="stylesheet" type="text/css" href="<?php /*= $url */?>css/typography.css">
  <link rel="stylesheet" type="text/css" href="<?php /*= $url */?>css/shortcodes/shortcodes.min.css">
  <link rel="stylesheet" type="text/css" href="<?php /*= $url */?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php /*= $url */?>css/responsive.min.css">
  <link rel="stylesheet" type="text/css" href="<?php /*= $url */?>css/skins/skin-yellow.css" data-style="styles"/>-->

  <!-- jquery -->
  <script src="<?= $url ?>js/jquery-3.6.0.min.js"></script>

  <!-- scripts -->
  <script src="scripts/main.js" defer></script>

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

  include "_components/all.php";

  ?>

  <!--Pour les Cookies si nécessaire-->
  <!--Ne pas oublier le gtag-->

  <?php /*include('_components/cookies/cookies.php') */?>


</div>


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa-solid fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- plugins-jquery -->
<script src="<?= $url ?>js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>const plugin_path = '<?= $url ?>js/';</script>

<!-- custom -->
<script src="<?= $url ?>js/custom.js"></script>

</body>
</html>
