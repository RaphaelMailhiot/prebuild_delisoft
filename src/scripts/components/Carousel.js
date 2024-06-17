import Swiper from "swiper/bundle";

/** Composante Carousel de Timtools */
export default class Carousel {
  /**
   * Méthode constructeur
   * @param {HTMLElement} element - Élément HTML sur lequel la composante est instanciée
   */
  constructor(element) {
    this.element = element;

    // Options par défaut pour la librairie Swiper
    this.defaultOptions = {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      pagination: {
        el: this.element.querySelector(".swiper-pagination"),
        type: "bullets"
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: true
      }
    };

    this.spaceBetween = {
      spaceBetween: 24
    };

    this.init();
  }

  /**
   * Méthode d'initialisation
   */
  init() {
    let options = this.defaultOptions;

    // Gestion des paramètres différents lorsqu'on veut avoir
    // 2 slides visibles sur grand écran et une seule sur petit écran
    switch (this.element.dataset.carousel) {
      case "two":
        options = {
          ...this.defaultOptions,
          ...this.spaceBetween,
          ...{
            slidesPerView: 1,
            breakpoints: {
              768: {
                slidesPerView: 2
              }
            }
          }
        };
        break;
      case "three":
        options = {
          ...this.defaultOptions,
          ...this.spaceBetween,
          ...{
            slidesPerView: 1,
            breakpoints: {
              768: {
                slidesPerView: 2
              },
              1200: {
                slidesPerView: 3
              }
            }
          }
        };
        break;
      case "four":
        options = {
          ...this.defaultOptions,
          ...this.spaceBetween,
          ...{
            slidesPerView: 1,
            breakpoints: {
              544: {
                slidesPerView: 2
              },
              768: {
                slidesPerView: 3
              },
              1200: {
                slidesPerView: 4
              }
            }
          }
        };
        break;
      case "five":
        options = {
          ...this.defaultOptions,
          ...this.spaceBetween,
          ...{
            slidesPerView: 1,
            breakpoints: {
              544: {
                slidesPerView: 2
              },
              768: {
                slidesPerView: 3
              },
              992: {
                slidesPerView: 4
              },
              1200: {
                slidesPerView: 5
              }
            }
          }
        };
    }

    // Instanciation d'un nouveau Swiper avec les options
    new Swiper(this.element, options);
  }
}
