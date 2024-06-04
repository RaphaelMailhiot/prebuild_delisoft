<!--
Voici un exemple pour la traduction de site multi-langue

Pour la traduction → assets/lang/{lang}/{page}.php
-->

<!--=================================
 Section Hero -->

<section class="page-section-ptb gray-bg">
    <div class="container">
        <h1><?= $meta['translate']['hero'][1] ?></h1>
        <h2><?= $meta['translate']['hero'][2] ?></h2>
        <p><?= $meta['translate']['hero'][3] ?></p>
        <p><?= $meta['translate']['hero'][4] ?></p>
        <a href="<?= $url . $meta[$page][$meta['translate']['switch']] ?>" class="button"><?= $meta['translate']['hero'][5] ?></a>
    </div>
</section>

<!--=================================
 Section Contenu -->

<section class="page-section-ptb">
    <div class="container">
        <h3><?= $meta['translate']['contenu'][1] ?></h3>
        <div class="row">
            <div class="col-md-6">
                <ul class="list list-arrow">
                    <li><?= $meta['translate']['contenu'][2] ?></li>
                    <li><?= $meta['translate']['contenu'][3] ?></li>
                    <li><?= $meta['translate']['contenu'][4] ?></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list list-arrow">
                    <li><?= $meta['translate']['contenu'][5] ?></li>
                    <li><?= $meta['translate']['contenu'][6] ?></li>
                    <li><?= $meta['translate']['contenu'][7] ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
