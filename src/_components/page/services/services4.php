<?php

/*Pour éviter de télécharger les images (ne pas mettre inline css dans le code final svp)*/
$services4url = "https://visionere4.com/";

?>

<main class="page4">

  <section class="page-services4-hero page-section-ptb bg-overlay-black-50 jarallax" data-speed="0.6"
           style="background-image: url(<?= $services4url ?>images/formations/formations-titlebar-bg-min.jpg);">
    <div class="container">
      <div class="row justify-content-center mb-30">
        <div class="col-lg-8 text-center">
          <div class="section-title mb-30 xs-mb-0">
            <h1 class="title text-white">Nos types de <span
                class="theme-bg theme-secondary-color pl-15 pr-15">formations</span></h1>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-md-6 xs-mb-30">
          <div class="portfolio-item image-text">
            <a href="#">
              <img src="<?= $services4url ?>images/formations/formation-ligne-img2-min.jpg" alt="Placeholder">
              <div class="portfolio-overlay">
                <p class="seo-h5 text-uppercase theme-color">Formations interactives en ligne</p>
                <p class="text-white mb-0">Nos formations sont offertes en français.<br>* Version en d’autres langues à
                  venir</p>
              </div>
            </a>
            <a aria-label="En savoir plus" class="popup portfolio-img" href="#"><i class="ti-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="portfolio-item image-text">
            <a href="#">
              <img src="<?= $services4url ?>images/formations/formation-classe-img-min.jpg" alt="Placeholder">
              <div class="portfolio-overlay">
                <h5 class="text-uppercase theme-color">Formations en présentiel</h5>
                <p class="text-white mb-0">Choisissez parmi plusieurs formations disponibles en présentiel selon nos
                  divers domaines d’activités.</p>
              </div>
            </a><a aria-label="En savoir plus" class="popup portfolio-img" href="#"><i class="ti-arrow-right"></i></a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="page-section-ptb gray-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <div class="section-title mb-40 xs-mb-20">
            <h2 class="title theme-color mb-30">Formations <span class="theme-secondary-bg text-white pl-15 pr-15">en ligne</span>
              <i>(E-learning)</i></h2>
          </div>
        </div>
        <div class="col-lg-8 text-center">
          <div class="js-video [youtube, widescreen]">
            <iframe src="https://www.youtube.com/embed/MLS09y85lj0?si=8xrrNzBnRHhGq91y" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen=""></iframe>
          </div>

          <div class="row justify-content-center mt-30">
            <div class="col-lg-5 col-md-6 text-center">
              <a class="button medium" href="#" target="_blank">Catalogue de formations</a>
            </div>
            <div class="col-lg-5 col-md-6 text-center">
              <a class="button gray medium" href="#" target="_blank">Nos démonstrations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="new-split-section right">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-5 col-sm-12 text-center shop-split-content">
          <div class="new-split-section-texte">
            <div class="section-title mb-30">
              <div class="seo-h6 subtitle theme-color-dark">Contactez-nous</div>
              <div class="seo-h1 title theme-color">Découvrez nos <span class="theme-secondary-bg text-white pl-15 pr-15">démos</span></div>
              <p class="theme-color-dark">Remplissez le formulaire ci-dessous pour recevoir un <strong>aperçu d'une formation interactive en ligne</strong>.</p>
            </div>

            <!--TODO mettre un zoho form-->

          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-img">
          <img class="img-fluid new-split-section-image" src="<?= $services4url ?>/images/formations/formations-demos-min.jpg"
               alt="Placeholder">
        </div>
      </div>
    </div>
  </section>

  <?php

  include "_components/section/avantages/_partials/avantages1.php";

  ?>

</main>
