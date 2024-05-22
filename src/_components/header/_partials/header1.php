<!--=================================
 header -->

<header id="header" class="header fancy">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 xs-mb-10">
          <div class="topbar-call text-left">
            <ul>
              <li><i class="fa fa-envelope-o theme-color"></i> <a href="mailto:info@delisoft.ca">info@delisoft.ca</a>
              </li>
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
                  <a href="<?= $url . $meta['accueil'][3] ?>"><img src="/assets/images/logo.webp"
                                                                   alt="Logo de <?= $namebase ?>"></a>
                </li>
              </ul>
              <!-- menu links -->

              <div class="menu-bar">
                <ul class="menu-links">

                  <li <?php if ($_GET["page"] === "accueil"): ?> class="active" <?php endif; ?>><a
                      href="<?= $url . $meta['accueil'][3] ?>">Accueil</a></li>

                  <li <?php if (in_array($_GET["about"], ["about", "avantages", "deroulement", "about"])): ?> class="active" <?php endif; ?>>
                    <a href="#">About<i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['about'][3] ?>">About</a></li>
                      <li <?php if ($_GET["page"] === "a-propos-avantages"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['a-propos-avantages'][3] ?>">Avantages</a></li>
                      <li <?php if ($_GET["page"] === "a-propos-deroulement"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['a-propos-deroulement'][3] ?>">Déroulement</a></li>
                      <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['about'][3] ?>">FAQ</a></li>
                    </ul>
                  </li>


                  <li <?php if (in_array($_GET["page"], [
                    "components-avantages",
                    "components-actionbox",
                    "components-bloc-texte",
                    "components-contact",
                    "components-four-sections",
                    "components-modules",
                    "components-partenaires",
                    "components-services",
                    "components-sliders",
                    "components-temoignages"
                  ])): ?> class="active" <?php endif; ?>><a href="#">Components<i
                        class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <li <?php if ($_GET["page"] === "components-avantages"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-avantages'][3] ?>">Avantages</a></li>
                      <li <?php if ($_GET["page"] === "components-actionbox"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-actionbox'][3] ?>">ActionBox</a></li>
                      <li <?php if ($_GET["page"] === "components-bloc-texte"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-bloc-texte'][3] ?>">Bloc-texte</a></li>
                      <li <?php if ($_GET["page"] === "components-contact"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-contact'][3] ?>">Contact</a></li>
                      <li <?php if ($_GET["page"] === "components-four-sections"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-four-sections'][3] ?>">Four-sections</a></li>
                      <li <?php if ($_GET["page"] === "components-modules"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-modules'][3] ?>">Modules</a></li>
                      <li <?php if ($_GET["page"] === "components-partenaires"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-partenaires'][3] ?>">Partenaires</a></li>
                      <li <?php if ($_GET["page"] === "components-services"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-services'][3] ?>">Services</a></li>
                      <li <?php if ($_GET["page"] === "components-sliders"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-sliders'][3] ?>">Sliders</a></li>
                      <li <?php if ($_GET["page"] === "components-temoignages"): ?> class="active" <?php endif; ?>><a
                          href="<?= $url . $meta['components-temoignages'][3] ?>">Témoignages</a></li>
                    </ul>
                  </li>

                  <li <?php if ($_GET["page"] === "exemples"): ?> class="active" <?php endif; ?>><a
                      href="<?= $url . $meta['exemples'][3] ?>">Exemples</a></li>

                  <!--Permet de changer de langue-->
                  <!--<li><a href="<?php /*= $meta[$page]['en'] */?>">EN</a></li>-->

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

<div class="mb-60"></div>
