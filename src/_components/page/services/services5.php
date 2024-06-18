<?php

/*Pour éviter de télécharger les images (ne pas mettre inline css dans le code final svp)*/
$services5url = "https://assainiteck.ca/";

?>

<main class="page5">

  <section class="page-title pt-80 pb-30 parallax"
           style="background: url(<?= $services5url ?>images/bg/placeholder-bg.jpg)">
    <div class="container">
      <div class="page-title-name">
        <h1>Nos services</h1>
        <p>Assainiteck</p>
      </div>
    </div>
  </section>

  <section class="page-section-ptb accueil5-specialistes">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-switch accueil5-before-img">
          <img class="img-fluid img-cover" src="/assets/images/placeholder/accueil/accueil5-specialistes-img.webp"
               alt="placeholder">
        </div>
        <div class="col-lg-6 col-md-6 align-self-center">
          <div class="section-title">
            <h6 class="theme-color">Assainiteck</h6>
            <h2>Désamiantage</h2>
          </div>
          <p>La sécurité étant notre priorité, tous nos travaux de désamiantage seront effectués en stricte
            conformité avec les normes de sécurité en vigueur.</p>
          <p>Notre personnel est formé aux dernières pratiques de désamiantage, et nous utilisons des équipements
            de pointe pour assurer la sécurité de tous les intervenants.</p>
          <ul class="list list-mark">
            <li>Inspection approfondie pour identifier la présence d'amiante</li>
            <li>Mise en œuvre du plan de désamiantage par des professionnels qualifiés</li>
            <li>Établissement d'un rapport détaillé sur les zones concernées</li>
            <li>Transport des déchets vers des sites d'élimination autorisés</li>
            <li>Émission de certificats de conformité</li>
          </ul>
          <a class="button" href="#">Contactez nous</a>
        </div>
      </div>
    </div>
  </section>

  <?php

  /*Avantages*/
  include "_components/section/avantages/_partials/avantages3.php";

  ?>


</main>
