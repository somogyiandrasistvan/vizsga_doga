class Tevekenyseg {
  #adat;
  #szuloElem;
  constructor(adat, szuloElem) {
    this.#adat = adat;
    this.#szuloElem = szuloElem;
    this.#sor();
  }

  #sor() {
    let txt = "";
    txt += `<select name="tevekenyseg" id="tevekenyseg">`;
    for (let key in this.#adat) {
      txt += `<option value=${this.#adat.tevekenyseg_nev}>${this.#adat.tevekenyseg_nev}</option>`;
    }
    txt += "</select>";
    txt += "<br><br>"
    txt += '<input type="küld" value="Submit">'


    this.#szuloElem.append(txt);
    /*
<form action="/action_page.php">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
    */
  }
}

export default Tevekenyseg;
