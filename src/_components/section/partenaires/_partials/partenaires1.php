<section class="partenaires1 page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title mb-30">
          <div class="subtitle theme-color-dark seo-h6">Sous-titre</div>
          <div class="theme-color mb-30 seo-h1">Nos <span
              class="black-bg text-white pl-15 pr-15">partenaire</span></div>
        </div>
      </div>
    </div>
    <div class="swiper" data-component="Carousel" data-carousel="four">
      <div class="swiper-wrapper">
        <?php for ($row = 1; $row <= 7; $row++): ?>
          <div class="swiper-slide d-flex justify-content-center">
            <img class="img-fluid" src="/assets/images/placeholder/partenaires-img.webp" alt="Placeholder">
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
