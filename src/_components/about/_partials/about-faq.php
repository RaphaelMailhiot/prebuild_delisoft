<main class="faq">

  <!--Hero-->
  <section class="page-title bg-overlay-black-40 jarallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-name">
            <div class="seo-h6 subtitle text-white">À propos</div>
            <h1>Foire aux questions</h1>
            <p class="mb-0"><?= $namebase ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--FAQ-->

  <section class="faq white-bg page-section-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <div class="seo-h6">Foire aux Questions</div>
            <h2>Besoin de conseils ?</h2>
          </div>
        </div>
      </div>

      <div class="accordion gray plus-icon mb-30">

        <!--Les boucles sont là pour montrer plus de questions-->
        <?php for ($i = 0; $i < 5; $i++) : ?>
          <div class="acd-group">
            <a href="#" class="acd-heading">Question pertinente ?</a>
            <div class="acd-des">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam, blanditiis consequuntur
              corporis delectus doloribus enim eos illum maiores maxime modi odit officiis, omnis quas rem repellat
              rerum temporibus totam velit, voluptates? Fugiat, necessitatibus, tenetur. Adipisci aperiam eligendi iure
              minima recusandae repellat similique, soluta veniam. A fugit perferendis quidem sed.
            </div>
          </div>
        <?php endfor; ?>

      </div>


      <div class="text-center mt-40">
        <p class="seo-h6"> D'autres questions ou commentaires ?<span class="theme-color"><a href="#"> Contactez-nous !</a></span></p>
      </div>

    </div>
  </section>

</main>
