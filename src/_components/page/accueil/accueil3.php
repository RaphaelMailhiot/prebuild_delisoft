<!--EXEMPLE DE PAGE D'ACCUEIL 2-->
<!--LKB360 (https://lkb360.com/)-->

<main class="page3">

  <?php
  $namebase = "LKB360";

  /*--Slider--*/
  include "_components/section/sliders/_partials/sliders5.php";

  ?>

  <!--Confiance informatique-->
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
            <div class="seo-h2 title mb-20">Votre partenaire<span class="theme-color"> de confiance </span>en
              informatique
            </div>
            <p>Depuis notre fondation, nous connaissons une croissance exponentielle !</p>
          </div>
          <p>Nous avons doublé nos effectifs et avons ainsi diversifié notre offre de services informatiques pour les
            PME. Nous sommes fiers d’être des partenaires TI d’exception pour de nombreuses organisations.</p>
          <a href="#" class="button x-small mt-24">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

  <!--Services-->
  <section class="page-section-ptb">
    <div class="container">
      <div class="row">

        <!--Les boucles sont là pour alléger la lecture du code-->
        <?php for ($i = 1; $i <= 6; $i++) : ?>
          <div class="col-md-4 col-sm-6 mb-24">
            <div class="feature-text left-icon round theme-icon">
              <div class="feature-icon">
                <img class="img-fluid" src="/assets/images/placeholder/accueil/accueil3-services-icone.webp"
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
      <div class="text-center">
        <a href="#" class="button x-small">Nos services</a>
      </div>
    </div>
  </section>

  <!--Solution informatique-->
  <section class="page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid" src="/assets/images/placeholder/accueil/accueil3-solution-img.webp" alt="Placeholder">
        </div>
        <div class="col-md-6">
          <div class="section-title mb-10">
            <p class="seo-h6 subtitle"><?= $namebase ?></p>
            <div class="seo-h2 title mb-20">Contactez nos experts<span class="theme-secondary"> en solution </span>informatique
            </div>
            <p>Solution informatique sur mesure</p>
          </div>
          <p>Nous saurons développer la solution informatique sur mesure pour vos besoins d’entreprise tout en
            respectant
            votre budget. Tout ce que vous avez à faire, c’est nous contacter !</p>
          <a href="#" class="button x-small mt-24">Nous contacter</a>
        </div>
      </div>
    </div>
  </section>

  <?php

  /*--Partenaires--*/
  include "_components/section/partenaires/_partials/partenaires1.php";

  ?>

  <!--Témoignages-->
  <section class="page-section-pb accueil3-temoignages">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-12">
          <div class="testimonial bottom_pos mb-0 h-100">
            <div class="testimonial-info"> LKB360 Solution TI a grandement contribué à la transformation
              numérique de notre entreprise grâce à leur expertise. Leur service et disponibilité est
              exemplaire, je vous les recommande.
              <div class="author-info ml-10"><strong><span>- Charles Prévost</span></strong></div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12">
          <div class="testimonial theme-bg bottom_pos mb-24">
            <div class="testimonial-info">Même en temps de crise de la COVID-19, nos opérations ont pu
              continuer comme d'habitude. Nous sommes heureux des décisions prises et d'avoir fait
              confiance aux produits Microsoft ainsi qu'à notre firme de services informatique LKB360
              Solution!
            </div>
            <div class="author-info"><strong><span>- Moshen Romdhani</span></strong></div>
          </div>

          <div class="testimonial bottom_pos mb-0">
            <div class="testimonial-info">Toute l'équipe offre un service incroyable de façon
              professionnelle. Ils vont toujours trouver une manière de faire pour satisfaire le client.
              Plusieurs propositions de projet clé en main. Excellent boulot.
            </div>
            <div class="author-info"><strong><span>- Jean-Michel Lépine</span></strong></div>
          </div>
        </div>
      </div>
    </div>
  </section>
