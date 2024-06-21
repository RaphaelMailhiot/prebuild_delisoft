<?php

/*Pour éviter de télécharger les images (ne pas mettre inline css dans le code final svp)*/
$services2url = "https://z-chirotrottier.temoignagesvideo.com/";

?>

<main class="page2">

  <section class="page-title bg-overlay-black-40 parallax"
           style="background: url(<?= $services2url ?>images/bg/bg-pediatrique.jpg);">
    <div class="container">
      <div class="page-title-name">
        <h1>Chiropratique pédiatrique</h1>
        <p>Chiropratique Trottier</p>
      </div>
    </div>
  </section>

  <section class="page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 order-md-switch align-self-center">
          <img class="img-fluid" src="<?= $services2url ?>images/services/services-7.jpg" alt="Placeholder">
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="section-title">
            <div class="seo-h6 subtitle theme-color">Chiro Boucherville</div>
            <div class="seo-h2 title">Chiropratique pédiatrique</div>
          </div>
          <p>La chiropratique peut être bénéfique pour les nouveaux-nés et les jeunes enfants. En effet, lors de la
            naissance la colonne vertébrale et le crâne du bébé subissent de fortes pressions.</p>
          <p>Le système neuro-musculo-squelettique du nouveau-né subit donc un traumatisme même si la naissance se
            déroule
            bien.</p>
          <p>Les chiropraticiens sont bien outillés afin d’adapter leurs soins aux tout-petits et aider à rétablir
            plusieurs problématiques suivant la naissance comme les torticolis, les asymétries du crâne, la difficulté
            de
            tourner la tête des deux côtés, les inconforts abdominaux, etc. Il n’est jamais trop tôt pour faire évaluer
            vos tout-petits !</p>
        </div>
      </div>
    </div>
  </section>

  <!--Nos Services-->
  <section class="page-section-ptb gray-bg">
    <div class="services-4 no-radius">
      <div class="container">
        <div class="swiper" data-component="Carousel" data-carousel="three">
          <div class="swiper-wrapper">

            <?php for ($j = 0; $j < 6; $j++) : ?>
              <div class="swiper-slide">
                <a href="#">
                  <div class="service-box-s">
                    <div class="service-info">
                      <p class="seo-h5">Titre</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="bnt-arrow-holder position-relative">
                      <div class="bnt-arrow-d-round">
                        <div class="bnt-services-d">
                          <i class="ti-arrow-top-right"></i>
                        </div>
                      </div>
                    </div>
                    <img class="img-fluid" src="/assets/images/placeholder/accueil/accueil2-service.webp"
                         alt="Placeholder">
                  </div>
                </a>
              </div>
            <?php endfor; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--CTA-->
  <section class="action-box pattern full-width services-cta"
           style="background: url(<?= $services2url ?>images/bg/bg-spine-pen.png) no-repeat 90%; background-size: cover">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 position-relative">
          <div class="action-box-text text-white">
            <h3 class="text-white">Centre chiropratique familial Trottier</h3>
            <p class="text-white">Appelez dès maintenant afin de profiter d'un service exceptionnel et répondre à tous
              vos
              besoins.</p>
          </div>
          <div class="action-box-button">
            <a class="button bnt-menu-contact" href="tel:4506414455">Prendre un rendez-vous <i class="ti-mobile"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
