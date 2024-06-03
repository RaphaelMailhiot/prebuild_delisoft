<!--EXEMPLE DE PAGE D'ACCUEIL 4-->
<!--Visionere4 (https://visionere4.com/)-->

<main class="accueil4">

  <?php $namebase = "Firme visionère"; ?>

  <!--Slider-->
  <section class="accueil4-slider">
    <div class="swiper" data-component="Carousel">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide1">
          <div class="bg-img">
            <img class="img-fluid animation-slider-img-zoom-out"
                 src="/assets/images/placeholder/accueil/accueil4-slider1-bg.webp" alt="Placeholder">
          </div>
          <div class="container">
            <div class="accueil4-slide1-text">
              <p><span class="pl-15 pr-15 theme-secondary-bg"><span class="theme-color">S</span><span
                    class="text-white">anté</span></span></p>
              <p><span class="pl-15 pr-15 theme-secondary-bg"><span class="theme-color">S</span><span
                    class="text-white">écurité</span></span></p>
              <p><span class="pl-15 pr-15 theme-secondary-bg"><span class="theme-color">E</span><span
                    class="text-white">nvironnement</span></span></p>
              <p><span class="pl-15 pr-15 theme-secondary-bg"><span class="theme-color">Q</span><span
                    class="text-white">ualité</span></span></p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide2">
          <div class="bg-img">
            <img class="img-fluid animation-slider-img-zoom-out"
                 src="/assets/images/placeholder/accueil/accueil4-slider2-bg.webp" alt="Placeholder" loading="lazy">
          </div>
          <div class="container">
            <div class="accueil4-slide2-text">
              <p class="seo-h1 text-white">Firme <span
                  class="pl-15 pr-15 theme-secondary-bg text-white">Vision</span><span
                  class="theme-color">Ère</span></p>
              <p class="text-white fz-20 mt-30 mb-30">Développer et réaliser des projets pour amener les entreprises à
                implanter des solutions SSEQ à l’Ère
                du 4.0.</p>
              <div>
                <a href="#" class="button large">Nos formations</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>
  </section>

  <!--Emploi-Québec-->
  <section class="pt-40 pb-40 theme-secondary-bg">
    <div class="container">
      <p class="seo-h2 text-white">Organisme de formation agréé par <span
          class="pl-15 pr-15 theme-bg">Emploi-Québec</span></p>
      <p class="seo-h4 theme-color">Certificat #0059645</p>
      <p class="text-white mb-0">Firme VisionÈre est un organisme formateur agréé par la Commission des partenaires du
        marché du travail aux
        fins de l'application de la Loi sur le développement et la reconnaissance des compétences de la main-d'œuvre.
        (Loi du 1 %)</p>
    </div>
  </section>

  <?php

  /*Services*/
  include "_components/section/four-sections/_partials/fs3.php";

  /*Solutions*/
  include "_components/section/bloc-texte/_partials/bloc-texte1.php";

  ?>

  <section class="page-section-ptb accueil4-actions theme-secondary-bg">
    <div class="container">
      <p class="seo-h6 text-center text-white">Service de gestion et conseil</p>
      <p class="seo-h2 text-center text-white">Nos <span
          class="pl-15 pr-15 theme-bg theme-secondary-color">actions</span> en processus d’amélioration continue</p>
      <div class="row text-center mt-30">
        <div class="col-md-4 col-sm-6">
          <img src="/assets/images/placeholder/accueil/accueil4-actions-icone1.svg" alt="Placeholder" loading="lazy">
          <p class="seo-h4 theme-color">Accompagnement</p>
        </div>
        <div class="col-md-4 col-sm-6">
          <img src="/assets/images/placeholder/accueil/accueil4-actions-icone2.svg" alt="Placeholder" loading="lazy">
          <p class="seo-h4 theme-color">Optimisation</p>
        </div>
        <div class="col-md-4 col-sm-6">
          <img src="/assets/images/placeholder/accueil/accueil4-actions-icone3.svg" alt="Placeholder" loading="lazy">
          <p class="seo-h4 theme-color">Consolidation</p>
        </div>
      </div>
    </div>
  </section>

  <?php

  /*--Services--*/
  include "_components/section/services/_partials/services1.php";

  /*--Partenaires--*/
  include "_components/section/partenaires/_partials/partenaires1.php";

  ?>
