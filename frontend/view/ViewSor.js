class ViewSor {
    #adat
    #szuloElem
  constructor(adat, szuloElem) {
    this.#adat = adat;
    this.#szuloElem = szuloElem;
    this.#sor()
  }

  #sor(){
    let txt = "";
    txt += `<tr>`;
    for (let key in this.#adat) {
      txt += `<td>${this.#adat[key]}</td>`;
    }
    txt += "</tr>";

    this.#szuloElem.append(txt);
  }
}

export default ViewSor;
