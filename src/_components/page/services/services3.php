<?php

/*Pour éviter de télécharger les images (ne pas mettre inline css dans le code final svp)*/
$services2url = "https://lkb360.com/";

?>


<main class="page3">

  <!--Hero-->
  <section class="page-title bg-overlay-black-60 parallax"
           style="background-image: url(<?= $about3url ?>images/bg/Abt-pt-01.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-name">
            <h1>Service</h1>
            <p>Pour en connaitre un peu plus sur nous</p>
          </div>
          <ul class="page-breadcrumb">
            <li><a href="<?= $url . $meta['accueil'][$lang] ?>"><i class="fa fa-home"></i> Accueil</a> <i
                class="fa fa-angle-double-right"></i></li>
            <li><span>Service</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!--Service-->
  <section class="page-section-pt">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-switch">
          <img class="img-fluid" src="/assets/images/placeholder/accueil/accueil3-confiance-img.webp"
               alt="placeholder">
        </div>
        <div class="col-md-6">
          <div class="section-title mb-10">
            <p class="seo-h6 subtitle"><?= $namebase ?></p>
            <div class="seo-h2 title mb-20">Sécurité TI et protection<span
                class="theme-color"> des données pour PME</span></div>
            <p>Découvrez-en davantage sur nos services de sécurité TI et de protection des données.</p>
          </div>
          <p>Chaque année, le manque de sécurité informatique et les lacunes en matière de protection des données
            entraînent des milliards de dollars en perte pour les entreprises et institutions canadiennes.</p>
          <a href="#" class="button x-small mt-24">Obtenir du support</a>
        </div>
      </div>
    </div>
  </section>

  <!--Nos services-->
  <section class="page-section-ptb">
    <div class="container">

      <p class="seo-h2 mb-30">Pourquoi faire <span class="theme-color">affaire</span> avec nous ?</p>
      <div class="row">

        <!--Les boucles sont là pour alléger la lecture du code-->
        <?php for ($i = 1; $i <= 3; $i++) : ?>
          <div class="col-md-4 col-sm-6 mb-24">
            <div class="feature-text left-icon round theme-icon">
              <div class="feature-icon">
                <img class="img-fluid" src="<?= $services2url ?>images/0<?= $i ?>.jpg"
                     alt="Placeholder">
              </div>
              <div class="feature-info">
                <h5 class="text-back">Titre numéro <?= $i ?></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        <?php endfor; ?>

      </div>
    </div>
  </section>

  <!--Sécurisez vos installations-->
  <section class="new-split-section right">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-5 col-sm-12">
          <div class="new-split-section-texte">
            <div class="section-title">
              <div class="seo-h6"><?= $namebase ?></div>
              <div class="seo-h2 mt-10">Sécurisez vos <span class="theme-color">installations</span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, quaerat.</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur est labore ullam! A aliquid
              aut
              consequuntur culpa cumque cupiditate dignissimos ea exercitationem facere illo illum inventore iste iure
              laudantium natus, obcaecati odit officia quae quidem quisquam reiciendis rem repellendus similique soluta
              temporibus ut voluptatem voluptates! Debitis fugiat quaerat ullam.</p>
            <a href="#" class="button">Voir nos services</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-img">
          <img class="img-fluid new-split-section-image" src="<?= $services2url ?>images/abt02.jpg"
               alt="Placeholder">
        </div>
      </div>
    </div>
  </section>

  <?php
  /*Action box*/
  include "_components/section/actionbox/_partials/actionbox1.php";
  ?>

</main>
