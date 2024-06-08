<?php

//TODO include le fichier wp-load.php
include $wpUrl . "wp-load.php";

/*Pour get le slug de l'article*/
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $path);
$articleSlug = end($segments);

$args = array(
  'posts_per_page' => -1, // -1 pour récupérer tous les articles
  'post_status' => 'publish', // Seulement les articles publiés
  'post_type' => 'post' // Assurez-vous de cibler le type 'post' ou un autre type personnalisé si nécessaire
);

$posts = get_posts($args);

if ($posts) {
  foreach ($posts as $post) {
    if ($post->post_name === $articleSlug) {
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
      } ?>

      <main class="single-post">

        <!--Hero-->
        <section class="page-title bg-overlay-black-40 jarallax">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="page-title-name">
                  <div class="seo-h6 text-white">Blogue</div>
                  <h1><?= get_the_title() ?></h1>
                  <p class="mb-0"><?= $namebase ?></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="page-section-ptb">
          <div class="container">
            <div class="blog-entry mb-10">
              <div class="entry-image clearfix">
                <img class="img-fluid" src="<?= $image_url ?>"
                     alt="<?= $image_alt ?>">
              </div>
              <div class="blog-detail">
                <div class="entry-meta mb-10">
                  <ul>
                    <li><p><i class="fa fa-calendar-o"></i> <?= get_the_date('F j, Y', $post) ?></p>
                    </li>
                  </ul>
                </div>
                <div class="entry-content">
                  <?= get_the_content() ?>
                </div>
              </div>
            </div>
          </div>
        </section>

      </main>

    <?php }
  }
}

wp_reset_postdata();

?>
