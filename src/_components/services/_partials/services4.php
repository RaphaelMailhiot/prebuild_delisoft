<section class="section-4 page-section-ptb">
  <div class="container">
    <div class="swiper" data-compoenent="Carousel" data-carousel="three">
      <div class="swiper-wrapper">

        <?php for ($i = 0; $i < 6; $i++) : ?>
          <div class="swiper-slide">
            <a href="#">
              <div class="service-box-s services-herbes">
                <div class="service-info">
                  <i class="fa-solid fa-heart call-action-icon"></i>
                  <p class="seo-h4 theme-color-gray mb-0">Titre</p>
                </div>
                <div class="bnt-arrow-holder position-relative">
                  <div class="bnt-arrow-d-round">
                    <div class="bnt-services-d">
                      <i class="ti-arrow-top-right"></i>
                      <p>quelque chose</p>
                    </div>
                  </div>
                </div>
                <img class="img-fluid border-radius-20" src="assets/images/img.png"
                     alt="Placeholder">
              </div>
            </a>
          </div>
        <?php endfor; ?>

      </div>
    </div>
  </div>
</section>
