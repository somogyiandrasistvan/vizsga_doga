import Tevekenyseg from "./Tevekenyseg.js";
import ViewSor from "./ViewSor.js";

class View {
  #szuloElem;
  #tablaElem;
  #list = [];
  constructor(szuloElem, list) {
    this.#szuloElem = szuloElem;
    this.#list = list;
    this.#szuloElem.append("<table>");
    this.#tablaElem = szuloElem.children("table");
    this.#tevekenyseg();
    this.#sor();
    this.#tablazatbaIr();
  }

  #tevekenyseg() {
    let txt = "";
    txt += "<br><br>";
    txt += `<select name="tevekenyseg" id="tevekenyseg">`;
    txt += `<option value=tevekenyseg>Válassz tevékenységet!</option>`;
    for (let key in this.#list) {
      txt += `<option value=${this.#list[key].tevekenyseg_nev}>${
        this.#list[key].tevekenyseg_nev
      }</option>`;
    }
    txt += "</select>";
    txt += `<select name="osztaly id="osztaly">`;
    txt += `<option value=osztaly>Válassz osztályt!</option>`;
    for (let key in this.#list) {
      txt += `<option value=${this.#list[key].osztaly_id}>${
        this.#list[key].osztaly_id
      }</option>`;
    }
    txt += "</select>";
    txt += "<br><br>";
    txt += '<input type="submit" value="Submit">';

    this.#szuloElem.append(txt);
  }

  #sor() {
    let txt = "";

    txt += "<tr>";

    txt += `<th>Státusz</th>`;
    txt += `<th>Osztály</th>`;
    txt += `<th>Tevékenység</th>`;
    txt += `<th>Pontszám</th>`;
    txt += "</tr>";
    this.#tablaElem.append(txt);
  }

  #tablazatbaIr() {
    for (const key in this.#list) {
      new ViewSor(this.#list[key], this.#tablaElem);
    }
  }
}
export default View;
