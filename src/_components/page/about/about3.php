<?php

/*Pour éviter de télécharger les images (ne pas mettre inline css dans le code final svp)*/
$about3url = "https://lkb360.com/";

?>

<main class="page3">

  <!--Hero-->
  <section class="page-title bg-overlay-black-60 parallax" style="background-image: url(<?= $about3url ?>images/bg/Abt-pt-01.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-name">
            <h1>À propos</h1>
            <p>Pour en connaitre un peu plus sur nous</p>
          </div>
          <ul class="page-breadcrumb">
            <li><a href="<?= $url . $meta['accueil'][$lang] ?>"><i class="fa fa-home"></i> Accueil</a> <i
                class="fa fa-angle-double-right"></i></li>
            <li><span>Contact</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!--Partenaire confiance-->
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
          <a href="#" class="button x-small mt-24">Obtenir du support</a>
        </div>
      </div>
    </div>
  </section>

  <!--Pourquoi faire affaire-->
  <section class="page-section-ptb">
    <div class="container">
      <div class="row">

        <p class="seo-h2 mb-30">Pourquoi faire <span class="theme-color">affaire</span> avec nous ?</p>

        <!--Les boucles sont là pour alléger la lecture du code-->
        <?php for ($i = 1; $i <= 3; $i++) : ?>
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

  <!--Pourquoi LKB-->
  <section class="new-split-section right">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-5 col-sm-12">
          <div class="new-split-section-texte">
            <div class="section-title">
              <div class="seo-h6"><?= $namebase ?></div>
              <div class="seo-h2 mt-10">Pourquoi <span class="theme-color">LKB</span>?</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, quaerat.</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur est labore ullam! A aliquid
              aut
              consequuntur culpa cumque cupiditate dignissimos ea exercitationem facere illo illum inventore iste iure
              laudantium natus, obcaecati odit officia quae quidem quisquam reiciendis rem repellendus similique soluta
              temporibus ut voluptatem voluptates! Debitis fugiat quaerat ullam.</p>
            <a href="#" class="button">Voir nos services</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-img">
          <img class="img-fluid new-split-section-image" src="<?= $about3url ?>images/abt02.jpg"
               alt="Placeholder">
        </div>
      </div>
    </div>
  </section>

  <section class="page-section-ptb">
    <div class="container">

      <div class="section-title mb-10">
        <h6 class="subtitle">LKB360</h6>
        <h2 class="title">NOTRE<span class="theme-color"> EXPERTISE </span>À VOTRE SERVICE</h2>
        <p>Voici les services avec lesquels nous sommes des experts.</p>
      </div>

      <div class="swiper" data-component="Carousel" data-carousel="three">
        <div class="swiper-wrapper">

          <!--Les boucles sont là pour alléger la lecture du code-->
          <?php for ($j = 1; $j <= 6; $j++) : ?>
            <div class="swiper-slide">
              <div class="blog-entry mb-50">
                <div class="entry-image clearfix">
                  <img class="img-fluid" src="<?= $about3url ?>images/abt-office.jpg"
                       alt="La suite office 365">
                </div>
                <div class="blog-detail">
                  <div class="entry-title mb-10">
                    <h5>La suite Office 365</h5>
                  </div>
                  <div class="entry-meta mb-10">
                    <ul>
                      <li><i class="fa fa-folder-open-o"></i> Expertise logiciel</li>
                    </ul>
                  </div>
                  <div class="entry-content">
                    <p>Suite complète de logiciels puissants vous permettant de traiter de l'information,
                      que ce soit de la rédaction, des présentations des calculs, etc.</p>
                  </div>
                </div>
              </div>
            </div>
          <?php endfor; ?>

        </div>
      </div>

  </section>

  <section class="page-section-ptb gray-bg">
    <div class="container">

      <div class="row mb-30 text-center">
        <div class="col-12">
          <div class="section-title mb-10">
            <h6 class="subtitle">LKB360</h6>
            <h2 class="title">Notre <span class="theme-color">équipe</span> administrative</h2>
            <p>Découvrez notre équipe d'experts.</p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 sm-mb-30">
          <div class="team">
            <div class="team-photo">
              <img class="img-fluid mx-auto" src="<?= $about3url ?>images/Yanick.jpg" alt="Placeholder">
            </div>
            <div class="team-description">
              <div class="team-info">
                <p class="seo-h5">Yanick Blouin</p>
                <span>Co-fondateur et expert Microsoft</span>
              </div>
              <div class="team-contact">
                <span class="email"> <i class="fa fa-envelope-o"></i> info@delisoft.ca</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 sm-mb-30">
          <div class="team">
            <div class="team-photo">
              <img class="img-fluid mx-auto" src="<?= $about3url ?>images/Martin.jpg" alt="Placeholder">
            </div>
            <div class="team-description">
              <div class="team-info">
                <p class="seo-h5">Martin Rainville</p>
                <span>Co-fondateur et expert Microsoft</span>
              </div>
              <div class="team-contact">
                <span class="email"> <i class="fa fa-envelope-o"></i> info@delisoft.ca</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
