<?php

/*
 * NE PAS MODIFIER SOUS AUCUN PRÉTEXTE,
 * SAUF SI VOUS SAVEZ CE QUE VOUS FAITES
 * */

/*Pour get les infos des articles Wordpress*/
require_once "assets/models/articles-wp.php";
$articles = Articles::getInstance();
$produits = $articles->connection('product?_embed');

?>

<section class="page-section-ptb gray-bg">
    <div class="container">
        <div class="swiper" data-component="Carousel" data-carousel="four">
            <div class="swiper-wrapper">

                <?php

                // Afficher les produits
                if ($produits) {
                foreach ($produits as $produit) { ?>

                    <div class="swiper-slide">
                        <div class="product">
                            <div class="product-image">
                                <img class="img-fluid mx-auto" src="<?= $produit["_embedded"]["wp:featuredmedia"][0]["link"] ?>" alt="<?= $produit["_embedded"]["wp:featuredmedia"][0]["alt_text"] ?>" loading="lazy">
                                <div class="product-overlay">
                                    <div class="add-to-cart">
                                        <a href="#">Voir la boutique</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-des">
                                <div class="product-title">
                                    <a href="#"><?= $produit["title"]["rendered"] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }} else {
                    echo "Aucun produit trouvé ou erreur de requête.";
                } ?>

            </div>
        </div>
    </div>
</section>
