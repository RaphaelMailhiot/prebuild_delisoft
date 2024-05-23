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
          <nav id="menu" class="mega-menu">
            <section class="menu-list-items">
              <!-- menu logo -->
              <ul class="menu-logo">
                <li>
                  <a href="<?= $url . $meta['accueil'][3] ?>">
                    <img src="/assets/images/logo.webp" alt="Logo de <?= $namebase ?>"></a>
                </li>
              </ul>

              <!-- menu links -->
              <div class="menu-bar">
                <ul class="menu-links">

                  <li <?php if (in_array($_GET["page"], [
                    "accueil1",
                    "accueil2",
                    "accueil3"
                  ])): ?> class="active" <?php endif; ?>>
                    <a href="#"><?= $meta['header']['menu']['accueil'] ?><i
                        class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <li <?php if ($_GET["page"] === "accueil-1"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['accueil-1'][3] ?>">
                          <?= $meta['header']['menu']['accueil-1'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "accueil-2"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['accueil-2'][3] ?>">
                          <?= $meta['header']['menu']['accueil-2'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "accueil-3"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['accueil-3'][3] ?>">
                          <?= $meta['header']['menu']['accueil-3'] ?>
                        </a></li>
                    </ul>
                  </li>

                  <li <?php if (in_array($_GET["about"], ["about", "avantages", "deroulement", "about"])): ?> class="active" <?php endif; ?>>
                    <a href="#"><?= $meta['header']['menu']['a-propos'] ?><i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['about'][3] ?>">
                          <?= $meta['header']['menu']['a-propos'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "a-propos-avantages"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['a-propos-avantages'][3] ?>">
                          <?= $meta['header']['menu']['a-propos-avantages'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "a-propos-deroulement"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['a-propos-deroulement'][3] ?>">
                          <?= $meta['header']['menu']['a-propos-deroulement'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['about'][3] ?>">
                          FAQ
                        </a></li>
                    </ul>
                  </li>


                  <li <?php if (in_array($_GET["page"], [
                    "all",
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
                  ])): ?> class="active" <?php endif; ?>>
                    <a href="#"><?= $meta['header']['menu']['components'] ?><i
                        class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <li <?php if ($_GET["page"] === "all"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['all'][3] ?>">
                          All
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-avantages"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-avantages'][3] ?>">
                          <?= $meta['header']['menu']['components-avantages'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-actionbox"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-actionbox'][3] ?>">
                          <?= $meta['header']['menu']['components-actionbox'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-bloc-texte"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-bloc-texte'][3] ?>">
                          <?= $meta['header']['menu']['components-bloc-texte'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-contact"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-contact'][3] ?>">
                          Contact
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-four-sections"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-four-sections'][3] ?>">
                          <?= $meta['header']['menu']['components-four-sections'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-modules"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-modules'][3] ?>">
                          Modules
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-partenaires"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-partenaires'][3] ?>">
                          <?= $meta['header']['menu']['components-partenaires'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-services"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-services'][3] ?>">
                          Services
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-sliders"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-sliders'][3] ?>">
                          Sliders
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-temoignages"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-temoignages'][3] ?>">
                          <?= $meta['header']['menu']['components-temoignages'] ?>
                        </a></li>
                    </ul>
                  </li>

                  <li <?php if ($_GET["page"] === "exemples"): ?> class="active" <?php endif; ?>>
                    <a href="<?= $url . $meta['exemples'][3] ?>">
                      <?= $meta['header']['menu']['exemples'] ?>
                    </a></li>

                  <li <?php if ($_GET["page"] === "traduction"): ?> class="active" <?php endif; ?>>
                    <a href="<?= $url . $meta['traduction'][3] ?>">
                      <?= $meta['header']['menu']['traduction'] ?>
                    </a></li>

                  <!--Permet de changer de langue-->
                  <li><a href="<?= $meta[$page][$meta['header']['switch']] ?>"><?= $meta['header']['switch'] ?></a></li>

                </ul>
              </div>
            </section>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
