<?php

$about4url = "https://visionere4.com/";

?>


<section class="page-title bg-overlay-black-50 jarallax" data-speed="0.6"
         style="background-image: url(<?= $about4url ?>images/a-propos/a-propos-slider1-min.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1 class="title-hero">À propos</h1>
          <p class="pt-20 pb-10">Notre expertise en gestion de la Santé, Sécurité, Environnement et Qualité s’appuient
            sur
            de nombreuses années d’expériences dans différents secteurs d’activités.</p>
          <a class="button medium mt-10" href="#">Consulter nos services en gestion SSEQ</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 pr-20 xs-pr-15">

        <div class="swiper" data-component="Carousel">
          <div class="swiper-wrapper">

            <?php for ($i = 1; $i <= 3; $i++) : ?>
              <div class="swiper-slide">
                <img class="img-fluid" src="<?= $about4url ?>images/a-propos/a-propos-histoire-c<?= $i ?>-min.jpg"
                     alt="Firme VisionÈre">
              </div>
            <?php endfor; ?>

          </div>
        </div>
      </div>

      <div class="col-lg-8 col-md-7 pl-20 xs-pl-15 align-self-center xs-mt-30">
        <div class="section-title mb-30">
          <h6 class="subtitle theme-color-dark">Firme VisionÈre</h6>
          <h1 class="title theme-color">Notre <span class="theme-bg text-white pl-15 pr-15">histoire</span></h1>
        </div>
        <p>Firme VisionÈre a été fondée par deux femmes déterminées possédant 25 ans d’expérience chacune dans leurs
          domaines respectifs, soit la Santé, Sécurité, Environnement et Qualité dans les chantiers de construction,
          les industries et le domaine minier ainsi que l’accompagnement des entreprises, la recherche et la science
          de l’éducation.</p>
        <p>Le développement des compétences et la qualification de la main-d’œuvre étant au cœur de leurs
          préoccupations, elles ont uni leurs forces pour répondre aux enjeux de l’industrie 4.0.</p>
      </div>

      <div class="col-lg-12 mt-20 xs-mt-0">
        <p>C’est par sa vision avant-gardiste que Firme VisionÈre inclut dans ses offres de services de formation et
          de gestion en santé et sécurité du travail, les nouvelles technologies pour l’optimisation des procédés,
          pour le développement de nouvelles stratégies d’apprentissage, le tout dans le but de mieux accompagner les
          organisations à prendre le virage du changement 4.0.</p>
        <p>À l’été 2022, Roxanne Savard, l’une des deux co-fondatrices de Firme VisionÈre, prend seule la direction de
          l’entreprise. C’est dans cette foulée de changement qu’elle exprime toute sa reconnaissance à trois de ses
          plus anciens employés en leur offrant la possibilité de devenir associés dans l’entreprise. De son côté,
          Nathalie Murray retourne exercer sa passion dans le domaine de l’éducation.</p>
        <p>Firme VisionÈre compte dorénavant sur la forte expérience de ses associés afin d’offrir à sa clientèle des
          services personnalisés et orientés vers les changements du futur.</p>
      </div>
    </div>
  </div>
</section>

<?php

/*https://visionere4.com/a-propos/*/
/*Ajouter background-image et changer de bord*/
include "_components/section/bloc-texte/_partials/bloc-texte1.php";

?>

<div class="accueil4">
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
</div>

<section class="page-section-ptb gray-bg">
  <div class="container">
    <p class="seo-h1 text-center theme-color mb-30 xs-mb-10">Notre <span
        class="theme-bg text-white pl-15 pr-15">équipe</span> de direction</p>
    <p class="text-center">Tous les membres de notre équipe sont recrutés et mobilisés avec une volonté d’excellence et
      d’innovation dans tous nos procédés.</p>

    <div class="row">

      <?php for ($j = 1; $j <= 5; $j++) : ?>
        <div class="col-lg-4 col-sm-6 mb-24">
          <div class="team white-bg h-100">
            <div class="team-photo">
              <img class="img-fluid w-100" src="<?= $about4url ?>images/a-propos/a-propos-equipe<?= $j ?>.jpg"
                   alt="Steve Leblanc">
            </div>
            <div class="team-description">
              <div class="team-info">
                <p class="seo-h5 theme-color">Steve Leblanc</p>
                <span>Coordonnateur formation en ligne et développement des affaires SSEQ</span>
              </div>
              <div class="social-icons color clearfix">
                <ul class="list-unstyled">
                  <li class="social-facebook"><a href="#"><i class="fa fa-envelope"></i></a></li>
                  <li class="social-linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>

    </div>
  </div>
</section>

<?php

include "_components/section/partenaires/_partials/partenaires1.php";

?>
