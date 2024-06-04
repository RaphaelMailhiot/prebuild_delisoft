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
                  <a href="<?= $url . $meta['accueil'][$lang] ?>">
                    <img src="/assets/images/logo.webp" alt="Logo de <?= $namebase ?>"></a>
                </li>
              </ul>

              <!-- menu links -->
              <div class="menu-bar">
                <ul class="menu-links">

                  <!--Page-->
                  <li><a href="#">Page <i class="fa fa-angle-down fa-indicator"></i></a>
                    <div class="drop-down grid-col-12">
                      <div class="grid-row">
                        <!--Accueil-->
                        <div class="grid-col-3">
                          <ul>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <li <?php if ($_GET["page"] === "accueil-" . $i): ?> class="active" <?php endif; ?>>
                                <a href="<?= $url . $meta['accueil-' . $i][$lang] ?>">
                                  <?= $meta['header']['menu']['accueil-' . $i] ?>
                                </a></li>
                            <?php endfor; ?>
                          </ul>
                        </div>
                        <!--À propos-->
                        <div class="grid-col-3">
                          <ul>
                            <?php for ($j = 1; $j <= 5; $j++) : ?>
                              <li <?php if ($_GET["page"] === "a-propos-" . $j): ?> class="active" <?php endif; ?>>
                                <a
                                  href="<?= $url . $meta['a-propos-' . $j][$lang] ?>"><?= $meta['header']['menu']['a-propos'] ?> <?= $j ?></a>
                              </li>
                            <?php endfor; ?>
                            <li <?php if ($_GET["page"] === "a-propos-avantages"): ?> class="active" <?php endif; ?>>
                              <a href="<?= $url . $meta['a-propos-avantages'][$lang] ?>">
                                <?= $meta['header']['menu']['a-propos-avantages'] ?>
                              </a></li>
                            <li <?php if ($_GET["page"] === "a-propos-deroulement"): ?> class="active" <?php endif; ?>>
                              <a href="<?= $url . $meta['a-propos-deroulement'][$lang] ?>">
                                <?= $meta['header']['menu']['a-propos-deroulement'] ?>
                              </a></li>
                            <li <?php if ($_GET["page"] === "a-propos-faq"): ?> class="active" <?php endif; ?>>
                              <a href="<?= $url . $meta['a-propos-faq'][$lang] ?>">
                                FAQ
                              </a></li>
                          </ul>
                        </div>
                        <!--Services-->
                        <div class="grid-col-3">
                          <ul>
                            <?php for ($k = 1; $k <= 5; $k++) : ?>
                              <li <?php if ($_GET["page"] === "services-" . $k): ?> class="active" <?php endif; ?>>
                                <a href="<?= $url . $meta['services-' . $k][$lang] ?>">
                                  Services <?= $k ?>
                                </a></li>
                            <?php endfor; ?>
                          </ul>
                        </div>
                        <!--Contact-->
                        <div class="grid-col-3">
                          <ul>
                            <?php for ($l = 1; $l <= 4; $l++) : ?>
                              <li <?php if ($_GET["page"] === "contact-" . $l): ?> class="active" <?php endif; ?>>
                                <a href="<?= $url . $meta['contact-' . $l][$lang] ?>">
                                  Contact <?= $l ?>
                                </a></li>
                            <?php endfor; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>

                  <!--Section-->
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
                        <a href="<?= $url . $meta['all'][$lang] ?>">
                          All
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-avantages"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-avantages'][$lang] ?>">
                          <?= $meta['header']['menu']['components-avantages'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-actionbox"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-actionbox'][$lang] ?>">
                          <?= $meta['header']['menu']['components-actionbox'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-bloc-texte"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-bloc-texte'][$lang] ?>">
                          <?= $meta['header']['menu']['components-bloc-texte'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-contact"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-contact'][$lang] ?>">
                          Contact
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-four-sections"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-four-sections'][$lang] ?>">
                          <?= $meta['header']['menu']['components-four-sections'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-modules"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-modules'][$lang] ?>">
                          Modules
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-partenaires"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-partenaires'][$lang] ?>">
                          <?= $meta['header']['menu']['components-partenaires'] ?>
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-services"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-services'][$lang] ?>">
                          Services
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-sliders"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-sliders'][$lang] ?>">
                          Sliders
                        </a></li>
                      <li <?php if ($_GET["page"] === "components-temoignages"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['components-temoignages'][$lang] ?>">
                          <?= $meta['header']['menu']['components-temoignages'] ?>
                        </a></li>
                    </ul>
                  </li>

                  <!--_components/wp-->
                  <li <?php if (in_array($_GET["wp"], ["blogue", "boutique"])): ?> class="active" <?php endif; ?>>
                    <a href="#">WP<i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel left-side">
                      <li <?php if ($_GET["wp"] === "blogue"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['blogue'][$lang] ?>">
                          Blogue
                        </a></li>
                      <li <?php if ($_GET["page"] === "boutique"): ?> class="active" <?php endif; ?>>
                        <a href="<?= $url . $meta['boutique'][$lang] ?>">
                          Boutique
                        </a></li>
                    </ul>
                  </li>

                  <!--_components/exemples-->
                  <li <?php if ($_GET["page"] === "exemples"): ?> class="active" <?php endif; ?>>
                    <a href="<?= $url . $meta['exemples'][$lang] ?>">
                      <?= $meta['header']['menu']['exemples'] ?>
                    </a></li>

                  <!--views/traduction-->
                  <li <?php if ($_GET["page"] === "traduction"): ?> class="active" <?php endif; ?>>
                    <a href="<?= $url . $meta['traduction'][$lang] ?>">
                      <?= $meta['header']['menu']['traduction'] ?>
                    </a></li>

                  <!--Permet de changer de langue-->
                  <li><a
                      href="<?= $url . $meta[$page][$meta['header']['switch']] ?>"><?= $meta['header']['switch'] ?></a>
                  </li>

                </ul>
              </div>
            </section>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
