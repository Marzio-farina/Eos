import './bootstrap';
import 'bootstrap';


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
}


