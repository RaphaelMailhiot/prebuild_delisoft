<?php

/*
 * NE PAS MODIFIER SOUS AUCUN PRÉTEXTE,
 * SAUF SI VOUS SAVEZ CE QUE VOUS FAITES
 * */

// TODO mettre le id de la catégorie
switch ($lang) {
  case 'fr':
    $faq_id = 2;
    break;
  case 'en':
    $faq_id = 3;
    break;
}

/*Pour get les infos les FAQs Wordpress (Avada)*/
include "assets/models/articles-wp.php";
$articles = Articles::getInstance();
$questions = $articles->connection('avada_faq');

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
        if ($questions) {
        foreach ($questions as $question) {
          // TODO Mettre seulement si vous utiliser les catégories pour les langues
          if ($question['faq_category'][0] === $faq_id) {
          ?>
          <div class="acd-group">
            <a href="#" class="acd-heading"><?= $question['title']['rendered'] ?></a>
            <div class="acd-des">
              <?= $question['content']['rendered'] ?>
            </div>
          </div>
        <?php }}} else {
          echo "Aucune question trouvé ou erreur de requête.";
        } ?>

      </div>


      <div class="text-center mt-40">
        <p class="seo-h6"> D'autres questions ou commentaires ?<span class="theme-color"><a href="#"> Contactez-nous !</a></span></p>
      </div>

    </div>
  </section>

</main>
