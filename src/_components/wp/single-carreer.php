<?php

/*
 * NE PAS MODIFIER SOUS AUCUN PRÉTEXTE,
 * SAUF SI VOUS SAVEZ CE QUE VOUS FAITES
 * */

/*Pour get les infos des articles Wordpress*/
require_once "assets/models/articles-wp.php";
$articles = Articles::getInstance();
$postes = $articles->connection('avada_portfolio');

/*Pour get le slug du poste*/
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $path);
$posteSlug = end($segments);

if ($postes) {
    foreach ($postes as $poste) {
        if ($poste['slug'] === $posteSlug) {
            // Va chercher les informations de l'article
            $poste_info = $articles->query($poste);
            // Va chercher le content de l'article
            $content = $poste['content']['rendered'];
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
                        <div class="seo-h6 text-white">Carrière</div>
                        <h1><?= $poste_info['title'] ?></h1>
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
                    <img class="img-fluid" src="<?= $poste_info['image_url'] ?>" alt="<?= $poste_info['alt_text'] ?>">
                </div>
                <div class="blog-detail">
                    <div class="entry-meta mb-10">
                        <ul>
                            <li><p><i class="fa fa-calendar-o"></i> <?= $poste_info['date'] ?></p></li>
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
