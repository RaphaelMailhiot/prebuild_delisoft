<?php

/*Pour éviter de télécharger les images (ne pas mettre inline css dans le code final svp)*/
$about5url = "https://assainiteck.ca/";

?>


<main class="page5">

  <section class="page-title pt-80 pb-30 parallax"
           style="background: url(<?= $about5url ?>images/bg/placeholder-bg.jpg)">
    <div class="container">
      <div class="page-title-name">
        <h1>À propos</h1>
        <p>Assainiteck</p>
      </div>
    </div>
  </section>

  <?php

  /*Avantages*/
  include "_components/section/avantages/_partials/avantages3.php";

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

  <section class="page-section-pbt">
    <div class="container">
      <div class="row sm-mb-40">
        <div class="col-lg-4 col-md-6 align-self-center">
          <div class="section-title">
            <h2 class="title">Extraction d'amiante <span class="theme-color">décontamination et moisissure</span></h2>
          </div>
          <p>Entreprise spécialisée en extraction d’amiante, de décontamination et d'extraction de moisissure.
            Nous avons 15 ans d’expérience dans l’industrie de la construction et de l’après sinistre.</p>
          <a class="button button-purple" href="#">Écrivez-nous</a>
        </div>
        <div class="col-lg-8 col-md-6 sm-mt-40">
          <img class="img-fluid" src="<?= $about5url ?>images/about/camion2.png" alt="Camion d'assainiteck">
        </div>
      </div>
    </div>

    <div class="page-section-ptb">
      <div class="container">
        <div class="business-feature-top mt-0">
          <div class="row">
            <div class="col-md-4 col-sm-12 border-end">
              <div class="feature-text p-4">
                <div class="feature-icon">
                  <span class="ti-mobile theme-color p-0"></span>
                </div>
                <div class="feature-info text-center">
                  <h5>Cellulaire</h5>
                  <h5><a href="#">438 491-1759</a></h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 border-end">
              <div class="feature-text p-4">
                <div class="feature-icon">
                  <span class="ti-email theme-color p-0"></span>
                </div>
                <div class="feature-info text-center">
                  <h5>Courriel</h5>
                  <h5><a href="#">info@assainiteck.ca</a></h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="feature-text p-4">
                <div class="feature-icon">
                  <span class="ti-clipboard theme-color p-0"></span>
                </div>
                <div class="feature-info text-center">
                  <a href="#" class="button button-border-white mt-20">Demande
                    d'information</a>
                </div>
              </div>
            </div>
          </div>
        </div>        </div>
    </div>
  </section>


</main>
