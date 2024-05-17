<div class="cookies-square js-cookie-consent" data-component="Cookies">
  <p><?= $cookies[$lang][0] ?></p>
  <div class="cookies-square-buttons">
    <button class="button js-cookie-consent-refuse">
      <?= $cookies[$lang][1] ?>
    </button>
    <button class="button js-cookie-consent-agree">
      <?= $cookies[$lang][2] ?>
    </button>
  </div>
  <button aria-label="Close" class="close-square">
    <i class="ti-close text-white js-cookie-button-close"></i>
  </button>
</div>
