<!--EXEMPLE DE PAGE D'ACCUEIL 2-->
<!--CHIROPRATIQUE PELLETIER (https://z-chirotrottier.temoignagesvideo.com/ -> https://chiropratiquepelletier.ca/)-->

<main class="accueil2">

  <?php $namebase = "Chiro Boucherville"; ?>

  <!--Slider-->
  <section class="accueil2-slider animation-bg-zoom-out">
    <div class="container">
      <div>
        <p class="seo-h6 theme-color"><?= $namebase ?></p>
        <h1>Centre chiropratique familial Trottier</h1>
        <p class="accueil2-slider-p">Notre objectif est que vous soyez de retour au bien-être et à la santé le plus vite
          possible.</p>
        <div>
          <a href="#" class="button">Contactez-nous</a>
        </div>
      </div>
    </div>
  </section>

  <!--Quatre services-->
  <section class="accueil2-quatre-services">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <img src="/assets/images/placeholder/accueil/accueil2-service-icone-1.svg" alt="Examen chiropratique">
          <p class="seo-h4">Examen chiropratique</p>
        </div>
        <div class="col-md-3">
          <img src="/assets/images/placeholder/accueil/accueil2-service-icone-2.svg"
               alt="Chiropratique conventionnelle">
          <p class="seo-h4">Chiropratique conventionnelle</p>
        </div>
        <div class="col-md-3">
          <img src="/assets/images/placeholder/accueil/accueil2-service-icone-3.svg" alt="Chiropratique sportive">
          <p class="seo-h4">Chiropratique sportive</p>
        </div>
        <div class="col-md-3">
          <img src="/assets/images/placeholder/accueil/accueil2-service-icone-4.svg" alt="Chiropratique pédiatrique">
          <p class="seo-h4">Chiropratique pédiatrique</p>
        </div>
      </div>
    </div>
  </section>

  <!--Centre chiropratique-->
  <section class="page-section-ptb accueil2-centre">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 order-switch">
          <img class="img-fluid" src="/assets/images/placeholder/accueil/accueil2-centre-img.webp" alt="Placeholder">
        </div>
        <div class="col-md-7">
          <p class="seo-h6 theme-color text-uppercase"><?= $namebase ?></p>
          <p class="seo-h2">Centre chiropratique</p>
          <p>Au centre chiropratique familial Trottier de Boucherville, l’objectif de notre équipe est que vous soyez de
            retour au bien-être et à la santé le plus rapidement possible.</p>
          <p>Nous sommes situés, depuis déjà plus de 20 ans, à Boucherville afin de desservir les gens de la Rive-Sud.
            Facile d’accès pour tous, tout près de la 132, vous n’aurez aucun problème à nous rejoindre. Jonathan
            Trottier St-Pierre a acquis beaucoup d’expérience, et ce, avec une multitude de conditions. En effet, gradué
            du Doctorat en chiropratique, mais aussi d’un Baccalauréat en sciences de l’activité physique, Jonathan
            saura bien vous prendre en charge, vous ramener au bien-être et vous garder bien. Une évaluation de votre
            condition vous permettra de savoir rapidement les problèmes qui peuvent être soignés et Dr Trottier
            St-Pierre, chiropraticien vous expliquera ses recommandations et les soins qui s’offrent à vous.</p>
          <a href="#" class="button">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

  <?php

  /*Demeurez en santé*/
  include "_components/services/_partials/services2.php";

  /*Avantages*/
  include "_components/avantages/_partials/avantages2.php";

  ?>

  <!--Nos services-->
  <section class="page-section-ptb accueil2-services">
    <div class="container">
      <p class="seo-h6 text-center theme-color"><?= $namebase ?></p>
      <p class="seo-h2 text-center">Nos services</p>

      <?php include "_components/services/_partials/services4.php" ?>

      <?php include "_components/services/_partials/services4.php" ?>

    </div>
  </section>

  <!--Assurances-->
  <section class="page-section-ptb accueil2-assurances">
    <div class="container">
      <p class="seo-h6 text-center text-white"><?= $namebase ?></p>
      <p class="seo-h2 text-center text-white">Assurances</p>
      <p class="text-white">La Régie de l'assurance maladie du Québec ne couvre pas les soins chiropratiques. Toutefois,
        la majorité des
        compagnies d'assurance rembourse une partie de ces frais. Vérifiez votre contrat d'assurance pour connaître les
        détails de votre couverture concernant les soins chiropratiques. Dans le cas où vous êtes un accidenté du
        travail ou de la route, nos soins sont couverts en partie pour la SAAQ et en totalité pour la CNESST. Seulement
        pour ces cas, une référence médicale est requise. <b>Si vos assurances ne sont pas au privé et que vous avez les
          informations requises, nous faisons les réclamations pour vous.</b></p>
    </div>
  </section>

  <!--Témoignages-->
  <section class="page-section-ptb accueil2-temoignages">
    <div class="container">
      <p class="seo-h2 text-center">Nos clients satisfaits</p>

      <div class="swiper" data-component="Carousel" data-carousel="two">
        <div class="swiper-wrapper">

          <!--Les boucles sont là pour montrer plus de slide-->
          <?php for ($i = 0; $i < 6; $i++) : ?>
            <div class="swiper-slide">
              <div class="testimonial bottom_pos">
                <div class="testimonial-info">
                  <div class="testimonial-stars mb-24">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                  </div>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex magni quasi tempore. Commodi, facere
                  laborum minima praesentium quia repellat repellendus similique? Accusamus commodi et nobis!
                </div>
                <div class="author-info"><strong>Andréanne - <span>Cliente</span></strong></div>
              </div>
            </div>
          <?php endfor; ?>

        </div>

        <div class="swiper-pagination"></div>

      </div>
    </div>
  </section>

</main>
