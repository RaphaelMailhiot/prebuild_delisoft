<?= include("assets/models/array.php") ?>

<section class="page-title bg-overlay-black-60 parallax"
         style="background-image: url(<?= $url ?>images/bg/a-contact-bg-min.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1 class="text-uppercase"><?= $serviceclean ?> <?= $townclean ?></h1>
        </div>
        <ul class="page-breadcrumb pt-10">
          <li><a href="<?= $url . $meta['accueil'][$lang] ?>">Accueil</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span><?= $serviceclean ?> <?= $townclean ?></span></li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section class="page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 sm-mt-30">
        <div class="section-title line lef mb-20">
          <h2 class="title uppercase"><?= $serviceclean ?> <?= $townclean ?></h2>
          <p class="seo-h2 mt-30">Notre mandat, <span
              class="theme-color">vous éclairer</span></p>
        </div>
        <p>Bienvenue chez Michaud & Frères, votre partenaire de confiance pour tous vos besoins en après-sinistre. Notre
          équipe d'experts dédiés offre une gamme de service en estimation et expertise en bâtiment.</p>
        <p>Nous comprenons l'importance de rétablir rapidement votre propriété après un sinistre. C'est pourquoi nous
          nous engageons à fournir des solutions efficaces et professionnelles pour vous aider à retrouver la
          tranquillité d'esprit le plus rapidement possible.</p>

        <a class="button" href="<?= $url . $meta['contact'][$lang] ?>">
          Prendre rendez-vous <i class="fa fa-angle-right"></i></a>

      </div>
    </div>
  </div>
</section>


<section class="carousel-ville">
  <div class="container">
    <div class="swiper" data-component="Carousel" data-carousel="five">
      <div class="swiper-wrapper">

        <?php foreach ($array1 as $key => $value) {
          $valueclean = str_replace('-', ' ', $value); ?>

          <div class="swiper-slide">
            <a href="<?= $url ?><?= $value; ?>/<?= $town ?>/"><?= $valueclean; ?></a>
          </div>

        <?php } ?>

      </div>
    </div>
  </div>
</section>


<section class="new-split-section left">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-6 col-sm-12 col-img">
        <img class="img-fluid new-split-section-image" src="/assets/images/placeholder/about/about-avantage-1.webp"
             alt="Placeholder">
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="new-split-section-texte">
          <h3 class="seo-h2 mt-10"><?= $serviceclean ?> <?= $townclean ?></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aspernatur assumenda atque, autem
            consequuntur cum earum eius error esse, est eveniet harum hic illo iure laudantium libero nam nisi non
            nostrum obcaecati possimus, quae quasi reprehenderit sequi similique velit. Ab architecto, consectetur
            dignissimos eveniet libero magnam maxime sit voluptatibus?</p>
          <a class="button" href="<?= $url . $meta['contact'][$lang] ?>">Contactez-nous <i
              class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="new-split-section right">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-5 col-sm-12">
        <div class="new-split-section-texte">
          <h4 class="seo-h2 mt-10"><?= $serviceclean ?> <?= $townclean ?></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur est labore ullam! A aliquid aut
            consequuntur culpa cumque cupiditate dignissimos ea exercitationem facere illo illum inventore iste iure
            laudantium natus, obcaecati odit officia quae quidem quisquam reiciendis rem repellendus similique soluta
            temporibus ut voluptatem voluptates! Debitis fugiat quaerat ullam.</p>
          <a class="button" href="<?= $url . $meta['contact'][$lang] ?>">Contactez-nous <i
              class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-img">
        <img class="img-fluid new-split-section-image" src="/assets/images/placeholder/about/about-avantage-2.webp"
             alt="Placeholder">
      </div>
    </div>
  </div>
</section>


<section class="new-split-section left">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-6 col-sm-12 col-img">
        <img class="img-fluid new-split-section-image" src="/assets/images/placeholder/about/about-avantage-1.webp"
             alt="Placeholder">
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="new-split-section-texte">
          <h5 class="seo-h2 mt-10"><?= $serviceclean ?> <?= $townclean ?></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aspernatur assumenda atque, autem
            consequuntur cum earum eius error esse, est eveniet harum hic illo iure laudantium libero nam nisi non
            nostrum obcaecati possimus, quae quasi reprehenderit sequi similique velit. Ab architecto, consectetur
            dignissimos eveniet libero magnam maxime sit voluptatibus?</p>
          <a class="button" href="<?= $url . $meta['contact'][$lang] ?>">Contactez-nous <i
              class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
