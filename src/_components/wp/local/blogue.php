<?php

//TODO include le fichier wp-load.php
require_once $wpUrl . "wp-load.php";

//TODO mettre le nombre d'article par page
$posts_per_page = 6;

/*Pour get la page*/
$blogPage = isset($_SERVER['REDIRECT_QUERY_STRING']) ? preg_replace('/\D/', '', $_SERVER['REDIRECT_QUERY_STRING']) : 1;

// Fonction pour obtenir le nombre d'articles dans une catégorie par son nom
function get_post_count_in_category_by_name($category_name) {
  // Obtenir l'ID de la catégorie en utilisant son nom
  $category_id = get_cat_ID($category_name);

  // Vérifier si la catégorie existe
  if (!$category_id) {
    return 0;
  }

  // Obtenir les informations de la catégorie
  $category = get_category($category_id);

  // Retourner le nombre d'articles publiés dans la catégorie
  return $category->count;
}

// Utilisation de la fonction pour obtenir le nombre d'articles dans la catégorie
$post_count = get_post_count_in_category_by_name($category_name);

// Pour le nombre de pages
$nombrePage = ceil($post_count / $posts_per_page);

$previousPage = $blogPage > 1 ? $blogPage - 1 : false;
$nextPage = $blogPage < $nombrePage ? $blogPage + 1 : false;

$args = array(
  'posts_per_page' => $posts_per_page, // -1 pour récupérer tous les articles
  'post_status' => 'publish', // Seulement les articles publiés
  'post_type' => 'post', // Assurez-vous de cibler le type 'post' ou un autre type personnalisé si nécessaire
  'category_name' => $lang, // TODO mettre pour gérer les langues (mettre slug catégorie → {fr, en, etc.})
  'paged' => $blogPage,
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
          foreach ($posts as $k => $post) {
            setup_postdata($post);

            $thumbnail_id = get_post_thumbnail_id($post->ID);
            if ($thumbnail_id) {
              // Récupérer l'URL de l'image à la une
              $image_url = wp_get_attachment_image_url($thumbnail_id, 'medium_large');
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
                  <img class="img-fluid" src="<?= $image_url ?>" alt="<?= $image_alt ?>" <?php if ($k > 4) { echo 'loading="lazy"'; } ?>>
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
          <?php } ?>
          <div>
            <nav aria-label="Pagination articles">
              <ul class="pagination justify-content-center">
                <li class="page-item <?php if (!$previousPage) { echo "disabled"; }?>">
                  <a class="page-link" href="<?php echo $previousPage ? $url . $meta['blogue'][$lang] . '?blog_page=' . $previousPage : '#'; ?>" <?php if (!$previousPage) { echo 'tabindex="-1"'; } ?>>Précédente</a>
                </li>

                <?php for ($i = 1; $i <= $nombrePage; $i++) : ?>
                  <li class="page-item <?php if ($i == $blogPage) { echo "active"; }?>">
                    <a class="page-link" href="<?= $url . $meta['blogue'][$lang] . '?blog_page=' . $i ?>"><?= $i ?></a>
                  </li>
                <?php endfor; ?>

                <li class="page-item <?php if (!$nextPage) { echo "disabled"; }?>">
                  <a class="page-link" href="<?php echo $nextPage ? $url . $meta['blogue'][$lang] . '?blog_page=' . $nextPage : '#'; ?>" <?php if (!$nextPage) { echo 'tabindex="-1"'; } ?>>Suivante</a>
                </li>
              </ul>
            </nav>
          </div>
        <?php } else {
          echo "Aucun article trouvé ou erreur de requête.";
        }
        wp_reset_postdata(); ?>

      </div>
    </div>
  </section>

</main>
