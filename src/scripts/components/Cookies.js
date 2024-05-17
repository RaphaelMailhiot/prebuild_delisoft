export default class Cookies {
  constructor(element) {
    this.element = element;

    this.cookieValue = 0;
    this.cookieName = "cookie_for_consent";
    this.cookieDomain = window.location.hostname;
    this.cookieLifetime = "7300";
    this.sessionSecure = ";secure";

    this.init();
  }

  init() {
    if (this.cookieExists(this.cookieName)) {
      this.hideCookieDialog();

      if (document.cookie.split('; ').some(cookie => cookie.startsWith(this.cookieName + '=1')))
        this.consentGranted();
    }

    document.addEventListener('click', (event) => {
      if (event.target.matches('.js-cookie-consent-agree')) {
        this.cookieValue = 1;
        this.consentWithCookies();
      } else if (event.target.matches('.js-cookie-consent-refuse')) {
        this.consentWithCookies();
        //removeCookies();
      } else if (event.target.matches('.js-cookie-button-close')) {
        this.hideCookieDialog();
      }
    });
  }

  consentWithCookies() {
    this.setCookie(this.cookieName, this.cookieValue, this.cookieLifetime);

    if (this.cookieValue === 1) this.consentGranted();

    this.hideCookieDialog();
  }

  cookieExists(name) {
    return document.cookie.split('; ').some(cookie => cookie.startsWith(name + '=' + this.cookieValue) || cookie.startsWith(name + '=1'));
  }

  hideCookieDialog() {
    document.querySelectorAll('.js-cookie-consent').forEach(element => element.style.display = 'none');
  }

  setCookie(name, value, expirationInDays) {
    const date = new Date();
    date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
    let secureSetting = this.sessionSecure ? ';secure' : '';
    document.cookie = `${name}=${value}; expires=${date.toUTCString()}; domain=${this.cookieDomain}; path=/${secureSetting}`;
  }

  consentGranted() {
    if (typeof gtag === 'function') {
      gtag('consent', 'update', {
        'analytics_storage': 'granted'
      });
    } else {
      console.log('gtag n\'est pas présent sur cette page.');
    }
  }
}
