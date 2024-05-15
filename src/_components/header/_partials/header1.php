<!--=================================
 header -->

<header id="header" class="header fancy">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 xs-mb-10">
                    <div class="topbar-call text-left">
                        <ul>
                            <li><i class="fa fa-envelope-o theme-color"></i> <a href="mailto:info@delisoft.ca">info@delisoft.ca</a></li>
                            <li><i class="fa fa-phone"></i> <a href="tel:4503327577"><span>450 332-7577</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-social text-end">
                        <ul>
                            <li><a aria-label="Facebook" href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                            <li><a aria-label="Instagram" href="#" target="_blank"><span class="ti-instagram"></span></a></li>
                            <li><a aria-label="Twitter" href="#" target="_blank"><span class="ti-twitter"></span></a></li>
                            <li><a aria-label="Linkedin" href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
     mega menu -->

    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- menu start -->
                    <nav id="menu" class="mega-menu">
                        <!-- menu list items container -->
                        <section class="menu-list-items">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="<?= $url . $meta['accueil'][3] ?>"><img src="assets/images/logo.webp" alt="Logo de <?= $namebase ?>"></a>
                                </li>
                            </ul>
                            <!-- menu links -->

                            <div class="menu-bar">
                                <ul class="menu-links">

                                    <li <?php if ($_GET["page"] === "accueil"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['accueil'][3] ?>">Accueil</a></li>

                                    <li <?php if (in_array($_GET["about"], ["about", "about", "about", "about"])): ?> class="active" <?php endif;?>><a href="#">About<i class="fa fa-angle-down fa-indicator"></i></a>
                                      <ul class="drop-down-multilevel left-side">
                                        <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['about'][3] ?>">About</a></li>
                                        <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['about'][3] ?>">Avantages</a></li>
                                        <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['about'][3] ?>">Fonctionnement</a></li>
                                        <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['about'][3] ?>">FAQ</a></li>
                                      </ul>
                                    </li>

                                    <!--À utiliser quand on utilise des ancres dans la même page-->
                                    <li <?php if ($_GET["page"] === "a-propos"): ?> class="active" <?php endif;?>><a href="#">À Propos<i class="fa fa-angle-down fa-indicator"></i></a>
                                        <ul class="drop-down-multilevel left-side">
                                            <li><a href="<?= $url . $meta['a-propos'][3] ?>">À Propos</a></li>
                                            <li><a href="<?= $url . $meta['a-propos'][3] ?>#">Mettre une page</a></li>
                                            <li><a href="<?= $url . $meta['a-propos'][3] ?>#">Mettre une page</a></li>
                                        </ul>
                                    </li>
                                    <!--Fin de l'exemple-->

                                    <!--À utiliser quand on utilise un drop down avec des pages différentes-->
                                    <!--Mettre les pages du dropdown dans la liste ["","",etc.]-->
                                    <li <?php if (in_array($_GET["page"], ["page1", "page2", "page3", "page4"])): ?> class="active" <?php endif;?>><a href="#">Nos services<i class="fa fa-angle-down fa-indicator"></i></a>
                                        <ul class="drop-down-multilevel left-side">
                                            <li <?php if ($_GET["page"] === "page1"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['page1'][3] ?>">Page1</a></li>
                                            <li <?php if ($_GET["page"] === "page2"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['page2'][3] ?>">Page2</a></li>
                                            <li <?php if ($_GET["page"] === "page3"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['page3'][3] ?>">Page3</a></li>
                                            <li <?php if ($_GET["page"] === "page4"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['page4'][3] ?>">Page4</a></li>
                                        </ul>
                                    </li>
                                    <!--Fin de l'exemple-->

                                    <li <?php if ($_GET["page"] === "services"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['services'][3] ?>">Services</a></li>
                                    <li <?php if ($_GET["page"] === "realisations"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['realisations'][3] ?>">Réalisations</a></li>

                                    <li <?php if (in_array($_GET["contact"], ["contact1", "contact2", "contact3", "contact4"])): ?> class="active" <?php endif;?>><a href="#">Contact<i class="fa fa-angle-down fa-indicator"></i></a>
                                      <ul class="drop-down-multilevel left-side">
                                        <li <?php if ($_GET["page"] === "contact1"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['contact1'][3] ?>">Contact1</a></li>
                                        <li <?php if ($_GET["page"] === "contact2"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['contact2'][3] ?>">Contact2</a></li>
                                        <li <?php if ($_GET["page"] === "contact3"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['contact3'][3] ?>">Contact3</a></li>
                                        <li <?php if ($_GET["page"] === "contact4"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['contact4'][3] ?>">Contact4</a></li>
                                      </ul>
                                    </li>

                                  <li <?php if ($_GET["page"] === "exemples"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['exemples'][3] ?>">Exemples</a></li>

                                  <!--Permet de changer de langue-->
                                    <li><a href="<?= $meta[$page]['en'] ?>">EN</a></li>

                                </ul>
                            </div>
                        </section>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- menu end -->
</header>

<!--=================================
 header -->
