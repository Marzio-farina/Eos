import './bootstrap';
import 'bootstrap';

// Visualizzare i pdf da una cartella

let files = [];
let currentIndex = 0;

document.getElementById('fileInput').addEventListener('change', function(event) {
    files = Array.from(event.target.files).filter(file => file.type === 'application/pdf');
    if (files.length > 0) {
        currentIndex = 0;
        displayPDF(files[currentIndex]);
    }
});

document.getElementById('prevBtn').addEventListener('click', function() {
    if (currentIndex > 0) {
        currentIndex--;
        displayPDF(files[currentIndex]);
    }
});

document.getElementById('nextBtn').addEventListener('click', function() {
    if (currentIndex < files.length - 1) {
        currentIndex++;
        displayPDF(files[currentIndex]);
    }
});

function displayPDF(file) {
    const fileURL = URL.createObjectURL(file);
    document.getElementById('pdfViewer').src = fileURL;
    document.getElementById('fileNameDisplay').textContent = file.name;
}


// Aggiungere dati ad una Select

// Recupera gli elementi dal DOM
const textInput = document.getElementById('textInput');
const addButton = document.getElementById('addButton');
const dynamicSelect = document.getElementById('dynamicSelect');
const selectContainer = document.getElementById('selectContainer');
const contenitoreSelectItem = document.getElementById('contenitoreSelectItem');

// Aggiunge un event listener al button
addButton.addEventListener('click', function() {
    // Prende il valore dal text input
    const inputValue = textInput.value.trim();

    // Controlla se il valore non è vuoto
    if (inputValue) {
        // Crea una nuova option
        const newOption = document.createElement('option');
        newOption.textContent = inputValue;
        newOption.value = inputValue;

        // Aggiunge la nuova option alla select
        dynamicSelect.appendChild(newOption);

        // Crea un div per visualizzare l'opzione con un pulsante di cancellazione
        const selectItem = document.createElement('div');
        selectItem.className = 'select-item';
        selectItem.textContent = inputValue;

        // Crea il pulsante di cancellazione
        const removeButton = document.createElement('button');
        removeButton.innerHTML = '&times;';
        removeButton.addEventListener('click', function() {
            // Rimuove l'opzione dalla select
            const options = dynamicSelect.options;
            for (let i = 0; i < options.length; i++) {
                if (options[i].value === inputValue) {
                    dynamicSelect.remove(i);
                    break;
                }
            }
            
           // Rimuove l'elemento div dal container
           contenitoreSelectItem.removeChild(selectItem);
        });

        // Aggiunge il pulsante di cancellazione all'elemento div
        selectItem.appendChild(removeButton);

        // Aggiunge l'elemento div al container
        contenitoreSelectItem.appendChild(selectItem);

        // Pulisce il campo di testo dopo aver aggiunto l'opzione
        textInput.value = '';
    }
});