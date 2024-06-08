<?php

/*
 * NE PAS MODIFIER SOUS AUCUN PRÉTEXTE,
 * SAUF SI VOUS SAVEZ CE QUE VOUS FAITES
 * */

/*Pour get les infos des articles Wordpress*/
require_once "assets/models/articles-wp.php";
$articles = Articles::getInstance();
$posts = $articles->connection('posts?_embed');

/*Pour get le slug de l'article*/
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $path);
$articleSlug = end($segments);

if ($posts) {
  foreach ($posts as $post) {
    if ($post['slug'] === $articleSlug) {
      // Va chercher les informations de l'article
      $article_info = $articles->query($post);
      // Va chercher le content de l'article
      $content = $post['content']['rendered'];
    }
  }
}

?>

<main class="single-post">

  <!--Hero-->
  <section class="page-title bg-overlay-black-40 jarallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-name">
            <div class="seo-h6 text-white">Blogue</div>
            <h1><?= $article_info['title'] ?></h1>
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
          <img class="img-fluid" src="<?= $article_info['image_url'] ?>" alt="<?= $article_info['alt_text'] ?>">
        </div>
        <div class="blog-detail">
          <div class="entry-meta mb-10">
            <ul>
              <li><p><i class="fa fa-calendar-o"></i> <?= $article_info['date'] ?></p></li>
            </ul>
          </div>
          <div class="entry-content">
            <?= $content ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
