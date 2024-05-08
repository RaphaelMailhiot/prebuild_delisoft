import ComponentFactory from './ComponentFactory';
//import Icons from './utils/Icons';
//import 'bootstrap';


class Main {
  constructor() {
    this.init();
  }

  init() {
    document.documentElement.classList.add('has-js');

    new ComponentFactory();
    //Icons.load();
  }
}
new Main();
