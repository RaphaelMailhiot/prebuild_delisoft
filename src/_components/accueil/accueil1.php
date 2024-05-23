<?php

/*--Slider--*/
include "_components/sliders/_partials/sliders6.php";

/*--Quatre services--*/
include "_components/four-sections/_partials/fs1.php";

?>

<!--À propos-->
<section class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <img class="img-fluid" src="https://clubgazon.com/images/accueil/about-img-min.jpg" alt="Experts paysagistes"
             style="padding-top:30px">
      </div>
      <div class="col-md-6 align-self-center">
        <div class="theme-color seo-h4">Plus de 20 ans d'experience</div>
        <h1 class="mb-30">Entretiens de pelouse</h1>
        <p>Notre entreprise est un regroupement d’experts paysagistes possédant plus de 20 ans d’expérience dans
          l’entretien des pelouses. Nous nous distinguons par la qualité de nos produits, l’expérience et le
          professionnalisme de notre personnel.</p>
        <p>Nous offrons nos services dans plus de 400 Municipalités dans la province de Québec, ce qui témoigne
          de notre engagement envers notre clientèle. Notre vaste gamme de traitements de pelouses saura
          répondre aux besoins de chaque client résidentiel ou commercial.</p>

        <div class="swiper" data-component="Carousel" data-carousel="three">
          <div class="swiper-wrapper">

            <?php for ($i = 1; $i <= 7; $i++) : ?>
              <div class="swiper-slide">
                <img class="img-fluid" src="https://clubgazon.com/images/accueil/logo-<?= $i ?>.jpg"
                     alt="Club Gazon">
              </div>
            <?php endfor; ?>

          </div>
        </div>

        <a class="button medium mt-10" href="/contact" style="back">Confiez-nous votre gazon!</a>
      </div>
    </div>
  </div>
</section>
