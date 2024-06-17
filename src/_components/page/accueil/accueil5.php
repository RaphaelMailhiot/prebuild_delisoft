<!--EXEMPLE DE PAGE D'ACCUEIL 5-->
<!--Assainiteck (https://assainiteck.ca/)-->

<main class="accueil5">

  <?php
  $namebase = "Assainiteck";

  /*--Slider--*/
  include "_components/section/sliders/_partials/sliders3.php";

  ?>

  <section class="page-section-ptb accueil5-specialistes">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 order-md-switch accueil5-before-img">
          <img class="img-fluid img-cover" src="/assets/images/placeholder/accueil/accueil5-specialistes-img.webp"
               alt="placeholder">
        </div>
        <div class="col-md-7">
          <p class="seo-h2"><span class="theme-color">Spécialistes en désamiantage résidentiel</span> & décontamination
            de moisissure</p>
          <p>Les deux propriétaires, Danny et Frédéric, cumulent plus de 15 ans d’expérience dans l’industrie de la
            construction et de l’après sinistre.</p>
          <p>Passionnés par ces deux domaines connexes et tous deux ayant la fibre entrepreneuriale, lance l’entreprise
            Assainiteck le 1er décembre 2021. Une entreprise spécialisée en enlèvement d’amiante et en décontamination
            de moisissure.</p>
          <a class="button button-border" href="#">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

  <?php

  /*Nos services*/
  include "_components/section/services/_partials/services5.php";

  ?>

  <!--Réalisations-->
  <section class="page-section-ptb white-bg masonry-main">
    <div class="container">
      <div class="row">

        <div class="col-md-8 xs-text-center">
          <div class="section-title lef mb-0">
            <div class="seo-h2 text-uppercase theme-secondary-color">Nos <span class="theme-color">réalisations</span>
            </div>
            <p class="fz-20">Assainiteck ne recule devant rien !</p>
          </div>
        </div>
        <div class="col-md-4 xs-text-center xs-mt-20 mb-30">
          <a class="button button-border medium float-end" href="#">Voir tout</a>
        </div>

        <div class="col-12">
          <div class="masonry columns-3 popup-gallery">
            <div class="grid-sizer"></div>

            <!--Les boucles sont là pour montrer plus de réalisations-->
            <?php for ($i = 1; $i <= 6; $i++) : ?>
              <div class="masonry-item">
                <div class="portfolio-item">
                  <img src="/assets/images/placeholder/accueil/accueil5-realisations-<?= $i ?>.webp" alt="Placeholder">
                  <a aria-label="Voir l'image en plus gros" class="popup portfolio-img"
                     href="/assets/images/placeholder/accueil/accueil5-realisations-<?= $i ?>.webp"><i
                      class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
            <?php endfor; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Service urgence-->
  <section class="page-section-ptb accueil5-urgence bg-overlay-theme-90">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="section-title lef mb-20 fadeInLeftBig wow">
            <div class="seo-h2 text-uppercase text-white fadeInLeftBig wow">Service d'urgence disponible tous les jours
              de la semaine</div>
          </div>
          <p class="text-white position-relative fadeInLeftBig wow">Quelle que soit l'urgence, nous sommes là pour
            vous aider à tout remettre en état dans votre maison ou votre commerce. Les dommages causés par les
            incendies, les inondations et d’autres catastrophes peuvent être réparés rapidement et
            professionnellement.</p>
          <a class="button button-border white mt-20 position-relative fadeInLeftBig wow" href="#">Contactez-nous</a>
        </div>
      </div>
    </div>
  </section>

  <?php

  /*Avantages*/
  include "_components/section/avantages/_partials/avantages3.php";

  ?>
