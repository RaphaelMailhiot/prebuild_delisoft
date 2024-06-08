<?php

/*
 * NE PAS MODIFIER SOUS AUCUN PRÉTEXTE,
 * SAUF SI VOUS SAVEZ CE QUE VOUS FAITES
 * */

// TODO mettre de nombre d'article à afficher
$nombreArticleAffiche = "3";

/*Pour get les infos des articles Wordpress*/
require_once "assets/models/articles-wp.php";
$articles = Articles::getInstance();
$posts = $articles->connection("posts?_embed&orderby=date&order=desc");

?>

<section class="page-section-ptb">
  <div class="container">
    <div class="section-title text-center">
      <div class="seo-h6 theme-color">Découvrez les articles que nous partageons sur nos médias sociaux</div>
      <div class="seo-h1">Notre blogue</div>
    </div>

    <div class="row">

      <?php

      // Afficher les articles
      if ($posts) {
        // Compte le nombre de post
        $nbArticle = 0;
        foreach ($posts as $post) {

          // TODO Mettre seulement si vous utiliser les catégories pour les langues
          if ($post['_embedded']['wp:term'][0][0]['slug'] === $lang) {

            // Augmente le nombre d'articles
            $nbArticle ++;
            // Va chercher les informations de l'article
            $article_info = $articles->query($post);
            // Le lien vers le single de l'article
            $article_link = $url . $meta['blogue'][$lang] . '/' . $post['slug']; ?>

            <div class="col-md-4 col-sm-6">
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

          <?php }
          if ($nbArticle == $nombreArticleAffiche){
            break;
          }
        }
      } else {
        echo "Aucun article trouvé ou erreur de requête.";
      } ?>

    </div>
  </div>
</section>
