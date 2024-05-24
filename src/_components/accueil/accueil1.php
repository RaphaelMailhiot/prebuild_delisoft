<!--EXEMPLE DE PAGE D'ACCUEIL 1-->
<!--CLUB GAZON (https://clubgazon.com/)-->

<main class="accueil1">

  <?php
  $namebase = "Club gazon";

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
          <img class="img-fluid pt-30" src="https://clubgazon.com/images/accueil/about-img-min.jpg"
               alt="Experts paysagistes">
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

              <!--Les boucles sont là pour montrer plus de slide-->
              <?php for ($i = 1; $i <= 7; $i++) : ?>
                <div class="swiper-slide">
                  <img class="img-fluid" src="https://clubgazon.com/images/accueil/logo-<?= $i ?>.jpg"
                       alt="Club Gazon"> <!--Mettre un alt significatif à l'image-->
                </div>
              <?php endfor; ?>

            </div>
          </div>

          <a class="button medium mt-10" href="#">Confiez-nous votre gazon!</a>
        </div>
      </div>
    </div>
  </section>

  <!--Nos services-->
  <section class="page-section-ptb accueil1-services-section bg-overlay-black-70">
    <div class="container">
      <p class="seo-h6 text-center text-white"><?= $namebase ?></p>
      <p class="seo-h2 text-center text-white">Nos services</p>

      <?php include "_components/services/_partials/services4.php" ?>

      <?php include "_components/services/_partials/services4.php" ?>

    </div>
  </section>

  <!--Calculer prix courriel-->
  <section class="page-section-pt accueil1-calculer-section">
    <div class="container">
      <div class="row">

        <div class="col-md-6 text-center">
          <p class="accueil1-calculer-titre seo-h3">
            <span>Calculer mon prix par courriel</span>
          </p>
          <p>Remplissez le formulaire ci-dessous pour recevoir le prix d'un entretien de pelouse complet tout l'été</p>
          <iframe aria-label="Club Gazon" style="height:790px;width:99%;border:none;"
                  src="https://forms.zohopublic.com/delisoft/form/ClubGazon/formperma/xIve1s291BEcU_F7X5THbDJtTGGWVHmPK2DHKkNCzBc"></iframe>
        </div>

        <div class="col-md-6 d-flex flex-column justify-content-between">
          <div>
            <p class="theme-color seo-h4">Des milliers de clients satisfaits</p>
            <p class="accueil1-calculer-rabais"><span>Plus de 50% de rabais</span></p>
          </div>
          <div>
            <p class="seo-h1">Entretiens de pelouse</p>
            <p>Découvrez notre programme complet de soins pour votre pelouse, conçu pour vous offrir un espace extérieur
              luxuriant et sain tout au long de l'année. <b>Faite confiance à Club Gazon comme des milliers de
                Québécois</b></p>
          </div>

          <img class="img-fluid" src="https://clubgazon.com/images/accueil/about-img-min3.jpg"
               alt="Experts paysagistes">
        </div>

      </div>
    </div>
  </section>

  <!--Recherche experts-->
  <section class="page-section-ptb accueil1-recherche-section gray-bg">
    <div class="container">
      <div class="row mb-24">
        <div class="col-lg-9 col-md-7 align-self-center">
          <div class="d-flex align-items-center">
            <img class="accueil1-recherche-icone" src="https://clubgazon.com/images/logo-icon.svg"
                 alt="Logo de <?= $namebase ?>">
            <p class="ml-40 mb-0 seo-h2">À la recherche d’experts paysagistes ?</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 align-self-center text-align-right xs-text-center xs-mt-30">
          <a class="button mb-0" href="#">Soumission en ligne</a>
        </div>
      </div>

      <div class="swiper" data-component="Carousel" data-carousel="four">
        <div class="swiper-wrapper">

          <!--Les boucles sont là pour montrer plus de slide-->
          <?php for ($j = 0; $j <= 4; $j++) : ?>
            <div class="swiper-slide">
                <div class="portfolio-item border-radius">
                  <img src="https://clubgazon.com/images/accueil/produit3-min.jpg" alt="Produits contre vers blancs">
                  <div class="portfolio-overlay">
                    <p class="text-white text-center seo-h4">Produits contre vers blancs</p>
                  </div>
              </div>
            </div>
          <?php endfor; ?>

        </div>
      </div>
    </div>
  </section>

  <!--Nos forfaits-->
  <section class="page-section-ptb accueil1-forfaits-section gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p class="theme-color seo-h4">Entretiens de pelouse</p>
          <p class="seo-h2 mb-40">Nos forfaits</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12 sm-mb-30">
          <div class="pricing-box h-100 white-bg">
            <div class="pricing-meta-box d-flex flex-column justify-content-between h-100">
              <div class="pricing-meta-title">
                <h3 class="pricing-title">Forfait Club Gazon</h3>
              </div>
              <div class="pricing-content-box h-100">
                <ul class="list list-unstyled">
                  <li><i class="fa fa-check-circle theme-color"></i> 3 Visites</li>
                  <li><i class="fa fa-check-circle theme-color"></i> 3 Évaluations de la pelouse</li>
                  <li><i class="fa fa-check-circle theme-color"></i> 3 Diagnostic de votre pelouse</li>
                  <li><i class="fa fa-check-circle theme-color"></i> 2 Fertilisation liquide</li>
                  <li><i class="fa fa-check-circle theme-color"></i> 2 Inhibiteur de mauvaises herbes</li>
                  <li><i class="fa fa-check-circle theme-color"></i> 2 Contrôle du vers blancs</li>
                  <li><i class="fa fa-check-circle theme-color"></i> 2 Répulsif contre les insectes
                    nuisibles
                  </li>
                </ul>
              </div>
              <div class="princing-price text-center">
                <p class="mb-0 fw-7 seo-h3">À partir de 179.99$</p>
              </div>
              <a class="button d-grid text-center" href="https://clubgazon.com/forfait/club-gazon">En savoir
                plus</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 xs-mb-30">
          <div class="pricing-box h-100 white-bg">
            <div class="pricing-meta-box d-flex flex-column justify-content-between h-100">
              <div class="pricing-meta-title">
                <p class="pricing-title seo-h3">Forfait Insectes indésirables</p>
              </div>
              <div class="pricing-content-box h-100">
                <ul class="list list-unstyled">
                  <li><i class="fa fa-check-circle theme-color"></i> 1 Visite</li>
                  <li><i class="fa fa-check-circle theme-color"></i> Épandage simple et rapide</li>
                  <li><i class="fa fa-check-circle theme-color"></i> Large fenêtre d'application</li>
                  <li><i class="fa fa-check-circle theme-color"></i> Aucune restriction concernant les
                    abeilles et les plantes à fleurs
                  </li>
                </ul>
              </div>
              <div class="princing-price text-center">
                <p class="mb-0 fw-7 seo-h3">À partir de 124,99$</p>
              </div>
              <a class="button d-grid text-center" href="#">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="pricing-box h-100 white-bg">
            <div class="pricing-meta-box d-flex flex-column justify-content-between h-100">
              <div class="pricing-meta-title">
                <p class="pricing-title seo-h3">Forfait Herbes Indésirables</p>
              </div>
              <div class="pricing-content-box h-100">
                <ul class="list list-unstyled">
                  <li><i class="fa fa-check-circle theme-color"></i> 3 Visites</li>
                  <li><i class="fa fa-check-circle theme-color"></i> Contient un dérivé de fer tout à fait
                    naturel
                  </li>
                  <li><i class="fa fa-check-circle theme-color"></i> Agit rapidement</li>
                  <li><i class="fa fa-check-circle theme-color"></i> Agit sur le système racinaire</li>
                </ul>
              </div>
              <div>
                <div class="princing-price text-center">
                  <p class="mb-0 fw-7 seo-h3">À partir de 229,99$</p>
                </div>
                <a class="button d-grid text-center" href="#">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "_components/actionbox/_partials/actionbox1.php" ?>

</main>
