import DataService from "../modell/data.js";
import View from "../view/View.js";

class Controller {
  #dataService;
  #modell
  constructor() {
    this.#dataService = new DataService();
    this.#get();
  }

  megjelenit(list) {
    new View($("article"), list);
  }

  #get() {
    this.#dataService.getAxiosData(
      `http://localhost:8000/api/bejegyzesek`,
      this.megjelenit
    );
  }
}

export default Controller;
