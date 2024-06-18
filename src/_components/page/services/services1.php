<?php

/*Pour éviter de télécharger les images (ne pas mettre inline css dans le code final svp)*/
$services1url = "https://clubgazon.com/";

?>

<!--Hero-->
<section class="page-title bg-overlay-black-40 parallax"
         style="background-image: url(<?= $services1url ?>images/services/services-titlebar-min.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1 class="seo-h1">Nos services</h1>
          <p>Club Gazon</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Services-->

<section class="page-section-ptb">
  <div class="container">
    <div class="row">

      <?php for ($i = 1; $i <= 12; $i++) : ?>
        <div class="col-lg-4 col-md-6 services-4">
          <a href="#">
            <div class="service-box-s bg-images">
              <div class="service-info">
                <i class="fa-solid fa-heart call-action-icon"></i>
                <p class="seo-h4 theme-color-gray mb-0">Titre</p>
              </div>
              <div class="bnt-arrow-holder position-relative">
                <div class="bnt-arrow-d-round">
                  <div class="bnt-services-d">
                    <i class="ti-arrow-top-right"></i>
                  </div>
                </div>
              </div>
              <img class="img-fluid border-radius" src="/assets/images/placeholder/background-placeholder.webp"
                   alt="Placeholder">
            </div>
          </a>
        </div>
      <?php endfor ?>

    </div>
  </div>
</section>
