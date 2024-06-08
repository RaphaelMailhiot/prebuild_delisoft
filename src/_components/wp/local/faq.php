<?php

//TODO include le fichier wp-load.php
include $wpUrl . "wp-load.php";

/*Pour get les infos les FAQs Wordpress (Avada)*/
$faq_posts = get_posts(array(
  'post_type' => 'avada_faq',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'faq_category' => $lang // TODO mettre pour gérer les langues (mettre slug catégorie → {fr, en, etc.})
));

?>

<main class="faq">

  <!--Hero-->
  <section class="page-title bg-overlay-black-40 jarallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-name">
            <div class="seo-h6 subtitle text-white">WordPress Avada</div>
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

        <?php
        // Afficher les questions
        if ($faq_posts) {
          foreach ($faq_posts as $post) {
            setup_postdata($post); ?>

            <div class="acd-group">
              <a href="#" class="acd-heading"><?= get_the_title() ?></a>
              <div class="acd-des">
                <?= get_the_content() ?>
              </div>
            </div>

          <?php }
        } else {
          echo "Aucune question trouvé ou erreur de requête.";
        }
        wp_reset_postdata();
        ?>

      </div>


      <div class="text-center mt-40">
        <p class="seo-h6"> D'autres questions ou commentaires ?<span class="theme-color"><a
              href="#"> Contactez-nous !</a></span></p>
      </div>

    </div>
  </section>

</main>
