<?php

//TODO include le fichier wp-load.php
include $wpUrl . "wp-load.php";

$args = array(
  'posts_per_page' => -1, // -1 pour récupérer tous les articles
  'post_status' => 'publish', // Seulement les articles publiés
  'post_type' => 'post', // Assurez-vous de cibler le type 'post' ou un autre type personnalisé si nécessaire
  'category_name' => $lang // TODO mettre pour gérer les langues (mettre slug catégorie → {fr, en, etc.})
);

$posts = get_posts($args);

?>

<main class="blogue">

  <!--Hero-->
  <section class="page-title bg-overlay-black-40 jarallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-name">
            <h1>Blogue</h1>
            <p class="mb-0"><?= $namebase ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog white-bg page-section-ptb">
    <div class="container">
      <div class="row">

        <?php
        if ($posts) {
          // Afficher les articles
          foreach ($posts as $post) {
            setup_postdata($post);

            $thumbnail_id = get_post_thumbnail_id($post->ID);
            if ($thumbnail_id) {
              // Récupérer l'URL de l'image à la une
              $image_url = wp_get_attachment_image_url($thumbnail_id, 'full');
              // Récupérer le texte alternatif de l'image
              $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            } else {
              $image_url = "";
              $image_alt = "Placeholder";
            }
            $article_link = $protocol . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'] . '/' . $post->post_name;
            ?>

            <div class="col-sm-6">
              <div class="blog-entry mb-50">
                <div class="entry-image clearfix">
                  <img class="img-fluid" src="<?= $image_url ?>" alt="<?= $image_alt ?>">
                </div>
                <div class="blog-detail">
                  <div class="entry-title mb-10">
                    <a href="<?= $article_link ?>"><?= get_the_title() ?></a>
                  </div>
                  <div class="entry-meta mb-10">
                    <ul>
                      <li><p><i class="fa fa-calendar-o"></i>
                          <?= get_the_date('F j, Y', $post) ?></p></li>
                    </ul>
                  </div>
                  <div class="entry-content">
                    <p><?= get_the_excerpt() ?></p></div>
                  <div class="entry-share clearfix">
                    <div class="entry-button">
                      <a href="<?= $article_link ?>" class="button arrow">En savoir plus
                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php }
        }
        wp_reset_postdata(); ?>

      </div>
    </div>
  </section>

</main>
