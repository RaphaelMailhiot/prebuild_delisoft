<?php

/*
 * NE PAS MODIFIER SOUS AUCUN PRÉTEXTE,
 * SAUF SI VOUS SAVEZ CE QUE VOUS FAITES
 * */

// TODO mettre le id de la catégorie
/*switch ($lang) {
    case 'fr':
        $faq_id = 2;
        break;
    case 'en':
        $faq_id = 3;
        break;
}*/

/*Pour get les infos les FAQs Wordpress (Avada)*/
require_once "assets/models/articles-wp.php";
$articles = Articles::getInstance();
$postes = $articles->connection('avada_portfolio');

?>

<!--Carrières-->
<section class="page-section-ptb">
  <div class="container">

    <div class="row">
      <?php

      // Afficher les postes
      if ($postes) {
        foreach ($postes as $poste) {

          $poste_info = $articles->query($poste);
          $poste_link = $url . $meta['carriere'][$lang] . '/' . $poste['slug'];
          ?>

          <a href="<?= $poste_link ?>" class="col-md-4 col-sm-6 mb-24">
            <img class="img-fluid" src="<?= $poste_info['image_url'] ?>" alt="<?= $poste_info['image_url'] ?>">
            <p class="seo-h4 mt-20"><?= $poste_info['title'] ?></p>
            <p><?= $poste_info['excerpt'] ?></p>
          </a>

        <?php }} else {
        echo "Aucune question trouvé ou erreur de requête.";
      } ?>
    </div>

  </div>
</section>
