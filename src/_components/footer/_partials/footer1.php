<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                    <ul>
                        <li><a href="<?= $url . $meta['accueil'][3] ?>">Accueil</a></li>
                        <li><a href="<?= $url . $meta['a-propos'][3] ?>">À propos</a></li>
                        <li><a href="<?= $url . $meta['services'][3] ?>">Services</a></li>
                        <li><a href="<?= $url . $meta['realisations'][3] ?>">Réalisations</a></li>
                        <li><a href="<?= $url . $meta['contact'][3] ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Liens utils</h6>
                    <ul>
                        <li><a href="#">Lien1</a></li>
                        <li><a href="#">Lien2</a></li>
                        <li><a href="#">Lien3</a></li>
                        <li><a href="#">Lien4</a></li>
                        <li><a href="#">Lien5</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 xs-mb-30">
                <h6 class="text-white mb-30 mt-10 text-uppercase">Contact</h6>
                <ul class="addresss-info">
                    <li><i class="fa fa-map-marker"></i>
                        <p>Adresse : 1910 Bd Édouard, Longueuil, QC J4T 1Z4</p></li>
                    <li><i class="fa fa-phone"></i> <a href="tel:4503327577"><span>450 332-7577</span></a></li>
                    <li><i class="fa fa-envelope-o"></i>Courriel : info@delisolft.ca</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h6 class="text-white mb-30 mt-10 text-uppercase">S'inscrire à notre infolettre</h6>
                <p>Inscrivez-vous à notre infolettre pour recevoir nos nouvelles et nos offres.</p>
                <div class="footer-Newsletter">

                        <!--Mettre un Zoho Form-->

                </div>
            </div>
        </div>
        <div class="footer-widget mt-20">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <p class="mt-15"> &copy; <?= $namebase ?> <span id="copyright"></span>
                        | Tous Droits Réservés | <a href="https://delisoft.ca/" target="_blank">Conception Web Delisoft</a></p>
                </div>
                <div class="col-lg-4 col-md-6 text-end">
                    <div class="footer-widget-social">
                        <ul>
                            <li><a aria-label="Facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a aria-label="Instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a aria-label="Twitter" href="#" target="_blank"><i class="fa fa-twitter"></i> </a></li>
                            <li><a aria-label="Linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear().toString()))</script>
