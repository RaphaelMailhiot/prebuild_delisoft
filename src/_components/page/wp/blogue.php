<?php

/*
 * NE PAS MODIFIER SOUS AUCUN PRÉTEXTE,
 * SAUF SI VOUS SAVEZ CE QUE VOUS FAITES
 * */

/*Pour get les infos des articles Wordpress*/
include "assets/models/articles-wp.php";
$articles = Articles::getInstance();
$posts = $articles->connection('posts?_embed');

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

        // Afficher les articles
        if ($posts) {
          foreach ($posts as $post) {
            // TODO Mettre seulement si vous utiliser les catégories pour les langues
            if ($post['_embedded']['wp:term'][0][0]['slug'] === $lang) {

            // Va chercher les informations de l'article
            $article_info = $articles->query($post);
            // Le lien vers le single de l'article
            $article_link = $protocol . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'] . '/' . $post['slug']; ?>

            <div class="col-sm-6">
              <div class="blog-entry mb-50">
                <div class="entry-image clearfix">
                  <img class="img-fluid" src="<?= $article_info['image_url'] ?>" alt="<?= $article_info['alt_text'] ?>">
                </div>
                <div class="blog-detail">
                  <div class="entry-title mb-10">
                    <a
                      href="<?= $article_link ?>"><?= $article_info['title'] ?></a>
                  </div>
                  <div class="entry-meta mb-10">
                    <ul>
                      <li><p><i class="fa fa-calendar-o"></i> <?= $article_info['date'] ?></p></li>
                    </ul>
                  </div>
                  <div class="entry-content">
                    <p><?= $article_info['excerpt'] ?></p></div>
                  <div class="entry-share clearfix">
                    <div class="entry-button">
                      <a href="<?= $article_link ?>" class="button arrow">En savoir plus
                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php }}} else {
          echo "Aucun article trouvé ou erreur de requête.";
        } ?>

      </div>
    </div>
  </section>

</main>
