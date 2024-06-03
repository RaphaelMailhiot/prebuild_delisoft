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

                  <!--_components/accueil-->
                  <li <?php if (in_array($_GET["page"], [
                    "accueil1", "accueil2", "accueil3",
                    "accueil4", "accueil5"
                  ])): ?> class="active" <?php endif; ?>>
                    <a href="#"><?= $meta['header']['menu']['accueil'] ?><i
                        class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <li <?php if ($_GET["page"] === "accueil-" . $i): ?> class="active" <?php endif; ?>>
                          <a href="<?= $url . $meta['accueil-' . $i][3] ?>">
                            <?= $meta['header']['menu']['accueil-' . $i] ?>
                          </a></li>
                      <?php endfor; ?>
                    </ul>
                  </li>

                  <!--_components/about-->
                  <li <?php if (in_array($_GET["about"], [
                    "a-propos-1", "a-propos-2", "a-propos-3",
                    "a-propos-4", "a-propos-5", "avantages",
                    "deroulement", "faq"])): ?> class="active" <?php endif; ?>>
                    <a href="#"><?= $meta['header']['menu']['a-propos'] ?><i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <li <?php if ($_GET["page"] === "about"): ?> class="active" <?php endif; ?>>
                        <a href="#"><?= $meta['header']['menu']['a-propos'] ?>
                          <i class="fa fa-angle-right fa-indicator"></i>
                        </a>
                        <ul class="drop-down-multilevel right-side">
                          <?php for ($j = 1; $j <= 5; $j++) : ?>
                            <li <?php if ($_GET["page"] === "a-propos-" . $j): ?> class="active" <?php endif; ?>>
                              <a
                                href="<?= $url . $meta['a-propos-' . $j][3] ?>"><?= $meta['header']['menu']['a-propos'] ?> <?= $j ?></a>
                            </li>
                          <?php endfor; ?>
                        </ul>
                      </li>
                      <li <?php if ($_GET["page"] === "a-propos-avantages"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['a-propos-avantages'][3] ?>">
                          <?= $meta['header']['menu']['a-propos-avantages'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "a-propos-deroulement"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['a-propos-deroulement'][3] ?>">
                          <?= $meta['header']['menu']['a-propos-deroulement'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "a-propos-faq"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['a-propos-faq'][3] ?>">
                          FAQ
                        </a></li>
                    </ul>
                  </li>

                  <!--_components/services-->
                  <li <?php if (in_array($_GET["page"], [
                    "services1", "services2", "services3",
                    "services4", "services5"
                  ])): ?> class="active" <?php endif; ?>>
                    <a href="#">Services<i
                        class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <?php for ($k = 1; $k <= 5; $k++) : ?>
                        <li <?php if ($_GET["page"] === "services-" . $k): ?> class="active" <?php endif; ?>>
                          <a href="<?= $url . $meta['services-' . $k][3] ?>">
                            Services <?= $k ?>
                          </a></li>
                      <?php endfor; ?>
                    </ul>
                  </li>

                  <!--_components-->
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

                  <!--_components/wp-->
                  <li <?php if (in_array($_GET["wp"], ["blogue", "boutique"])): ?> class="active" <?php endif; ?>>
                    <a href="#">WP<i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <li <?php if ($_GET["wp"] === "blogue"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['blogue'][3] ?>">
                          Blogue
                        </a></li>
                      <li <?php if ($_GET["page"] === "boutique"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['boutique'][3] ?>">
                          Boutique
                        </a></li>
                    </ul>
                  </li>

                  <!--_components/exemples-->
                  <li <?php if ($_GET["page"] === "exemples"): ?> class="active" <?php endif; ?>>
                    <a href="<?= $url . $meta['exemples'][3] ?>">
                      <?= $meta['header']['menu']['exemples'] ?>
                    </a></li>

                  <!--views/traduction-->
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
