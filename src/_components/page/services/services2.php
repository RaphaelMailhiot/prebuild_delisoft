<?php

/*Pour éviter de télécharger les images (ne pas mettre inline css dans le code final svp)*/
$services2url = "https://z-chirotrottier.temoignagesvideo.com/";

?>

<main class="page2">

  <section class="page-title bg-overlay-black-40 parallax" style="background: url(<?= $services2url ?>images/bg/bg-pediatrique.jpg);">
    <div class="container">
      <div class="page-title-name">
        <h1>Chiropratique pédiatrique</h1>
        <p>Chiropratique Trottier</p>
      </div>
    </div>
  </section>

  <section class="page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 order-md-switch align-self-center">
          <img class="img-fluid" src="<?= $services2url ?>images/services/services-7.jpg" alt="Placeholder">
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="section-title">
            <div class="seo-h6 subtitle theme-color">Chiro Boucherville</div>
            <div class="seo-h2 title">Chiropratique pédiatrique</div>
          </div>
          <p>La chiropratique peut être bénéfique pour les nouveaux-nés et les jeunes enfants. En effet, lors de la
            naissance la colonne vertébrale et le crâne du bébé subissent de fortes pressions.</p>
          <p>Le système neuro-musculo-squelettique du nouveau-né subit donc un traumatisme même si la naissance se
            déroule
            bien.</p>
          <p>Les chiropraticiens sont bien outillés afin d’adapter leurs soins aux tout-petits et aider à rétablir
            plusieurs problématiques suivant la naissance comme les torticolis, les asymétries du crâne, la difficulté
            de
            tourner la tête des deux côtés, les inconforts abdominaux, etc. Il n’est jamais trop tôt pour faire évaluer
            vos tout-petits !</p>
        </div>
      </div>
    </div>
  </section>

  <?php

  /*Nos Services*/
  include "_components/section/services/_partials/services4.php";

  /*CTA*/
  include "_components/section/actionbox/_partials/actionbox1.php";

  ?>

</main>
