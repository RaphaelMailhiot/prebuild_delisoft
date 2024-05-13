<section class="services-3 page-section-ptb">
  <div class="container-fluid">
    <div class="swiper" data-component="Carousel" data-carousel="four">
      <div class="swiper-wrapper">

        <?php for ($i = 0; $i < 6; $i++) : ?>
          <div class="swiper-slide">
            <div class="portfolio-item image-text">
              <img class="img-fluid" src="assets/images/img.png" alt="Placeholder">
              <div class="portfolio-overlay">
                <div class="seo-h6 subtitle text-white">SousTitre</div>
                <a class="seo-h3 text-white text-uppercase" href="#">Titre</a>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <a class="button icon mb-10" href="#">
                  <span>En savoir plus</span>
                </a>
              </div>
            </div>
          </div>
        <?php endfor; ?>

      </div>
    </div>
  </div>
</section>
