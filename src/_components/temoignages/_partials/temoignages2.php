<section class="temoignages2 page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 align-self-center xs-mb-30">
        <div class="section-title mb-20">
          <div class="seo-h6 text-white">SousTitre</div>
          <div class="seo-h2 title text-uppercase text-white">Titre</div>
        </div>
        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ipsum iusto nihil
          omnis perferendis quasi. Fugiat illum quaerat vitae voluptatibus!</p>
        <a class="button button-border white" href="#">Voir plus de témoignagnes</a>
      </div>
      <div class="col-lg-8 col-md-8">
        <div class="swiper" data-component="Carousel" data-carousel="two">
          <div class="swiper-wrapper">
            <?php for ($i = 0; $i < 3; $i++) : ?>
              <div class="swiper-slide">
                <div class="testimonial rounded mt-0">
                  <div class="testimonial-info">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias corporis delectus eaque, eveniet
                    facere illo molestiae molestias mollitia odit.
                  </div>
                  <div class="author-info">
                    <strong>Nom Personne -<span> Ville</span></strong>
                  </div>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
