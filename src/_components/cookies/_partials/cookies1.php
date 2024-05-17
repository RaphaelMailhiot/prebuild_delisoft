<div class="cookies-bar js-cookie-consent pt-20 pb-20" data-component="Cookies">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 align-self-center md-text-center sm-mb-20">
                <span class="text-white"><?= $cookies[$lang][0] ?></span>
            </div>
            <div class="col-12 col-xl-6 md-text-center">
                <button class="button mb-0 black x-small xs-mt-10 js-cookie-consent-refuse">
                    <?= $cookies[$lang][1] ?>
                </button>
                <button class="button mb-0 button-border white x-small xs-ml-0 xs-mt-10 js-cookie-consent-agree">
                    <?= $cookies[$lang][2] ?>
                </button>
                <button aria-label="Close" class="cookie-button-close d-none d-sm-none d-md-block">
                  <i class="js-cookie-button-close ti-close text-white"></i>
                </button>
            </div>
        </div>
    </div>
</div>
