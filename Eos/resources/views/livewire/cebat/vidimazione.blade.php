<form>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                01_Allegato_8
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body A08">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Assente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Non valido
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                      Valido
                    </label>
                </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              02_Allegato_9
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body A08">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault4" checked>
                    <label class="form-check-label" for="flexRadioDefault4">
                      Assente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault5">
                    <label class="form-check-label" for="flexRadioDefault5">
                      Non valido
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault6">
                    <label class="form-check-label" for="flexRadioDefault6">
                      Valido
                    </label>
                </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              03_Attestati_di_formazione
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body vidimazioneLavoratori">
              <div class="select-container" id="selectContainer">
                <div class="formazioniLavoratori">
                  <select class="form-select form-select-sm" aria-label="Small select example" id="dynamicSelect">
                      
                  </select>
                  {{-- <button >
                    +
                  </button> --}}
                  <input type="text" value="Lavoratore" id="textInput">
                </div>
                <div id="contenitoreSelectItem"></div>
              </div>
              <div class="ContenitoreLavoratoreProva">
                <select class="form-select form-select-sm" aria-label="Small select example">
                  <option selected>Unilav</option>
                  <option selected>Idoneità sanitaria</option>
                  <option selected>Formazione Base</option>
                  <option selected>Art.36</option>
                  <option selected>RLS</option>
                  <option selected>RSPP</option>
                  <option selected>Preposto</option>
                  <option selected>Antincendio</option>
                  <option selected>Primo Soccorso</option>
                  <option selected>Escavatorista</option>
                  <option selected>Gruista</option>
                  <option selected>PES</option>
                  <option selected>PEI</option>
                  <option selected>DPI 3 Categoria</option>
                  <option selected>Ponteggiatore</option>
                  <option selected>GAS</option>
                  <option selected>ASIC</option>
                  <option selected>Segnaletica</option>
                  <option selected>Tesserino</option>
                  <option selected>DPI</option>
                  <option selected>Trattorista</option>
                  <option selected>PLE</option>
                  <option selected>Carrellista</option>
                  <option selected>PAV</option>
                  <option selected>Profilo C</option>
                  <option selected>Profilo D</option>
                  <option selected>Profilo E</option>
                  <option selected>Profilo F</option>
                  <option selected>Profilo G</option>
                  <option selected>Profilo X</option>
                  <option selected>Profilo Y</option>
                  <option selected>Profilo Z</option>
                  <option selected>Documento di riconoscimento</option>
                </select>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefaultUnilav1" checked>
                  <label class="form-check-label" for="flexRadioDefaultUnilav1">
                    Assente
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefaultUnilav2">
                  <label class="form-check-label" for="flexRadioDefaultUnilav2">
                    Scaduto
                  </label>
                  <input type="text" value="data" class="ScadenzaVidimazione">
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefaultUnilav3">
                  <label class="form-check-label" for="flexRadioDefaultUnilav3">
                    Valido
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                04_Allegato_10
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                05_Mezzi_Macchinari
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                06_Attrezzature
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                07_Nomine_Figure_Responsabilità
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                08_POS_Allegati
              </button>
            </h2>
            <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapseThree">
                09_DVR
              </button>
            </h2>
            <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapseThree">
                10_Visura_CCIAA
              </button>
            </h2>
            <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapseThree">
                11_Dichiarazione_CCNL
              </button>
            </h2>
            <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapseThree">
                12_Iscrizione_Gestori_Ambientali
              </button>
            </h2>
            <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapseThree">
                13_Dichiarazione_Cave_Discariche
              </button>
            </h2>
            <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapseThree">
                14_SOA
              </button>
            </h2>
            <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapseThree">
                15_White_List
              </button>
            </h2>
            <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapseThree">
                16_Dichiarazione_art_14
              </button>
            </h2>
            <div id="collapse16" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapseThree">
                17_Procedura_Luoghi_Confinati
              </button>
            </h2>
            <div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapseThree">
                18_Piano_Amianto
              </button>
            </h2>
            <div id="collapse18" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span>prova</span>
                </div>
            </div>
        </div>
    </div>
</form>
