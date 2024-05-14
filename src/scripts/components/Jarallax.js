export default class Jarallax {
  constructor(element) {
    this.element = element;

    this.init();
  }

  init() {
    document.addEventListener("DOMContentLoaded", function() {

      setTimeout(function() {
        const jarallax = document.querySelector("#jarallax-container-0");
        jarallax.children[0].alt = "Image de fond";
      }, 1000);

    });
  }
}
