<section class="services-5 page-section-ptb">
  <div class="container">
    <div class="swiper" data-component="Carousel" data-carousel="three">
      <div class="swiper-wrapper">

        <!--Les boucles sont là pour montrer plus de slides-->
        <?php for ($i = 1; $i <= 2; $i++) : ?>
          <?php for ($j = 1; $j <= 3; $j++) : ?>
            <div class="swiper-slide">
              <a href="#">
                <div class="portfolio-item image-text">
                  <img src="/assets/images/placeholder/services5-bg-<?= $j ?>.webp" alt="Placeholder">
                  <div class="portfolio-overlay text-center pl-20 pr-20">
                    <!--il est possible de mettre une image ou un svg (mettre un width)-->
                    <i class="fa-solid fa-heart a-services-icons mb-20"></i>
                    <div class="seo-h4 text-white text-uppercase">Titre</div>
                  </div>
                </div>
              </a>
            </div>
          <?php endfor; ?>
        <?php endfor; ?>

      </div>
    </div>
  </div>
</section>
