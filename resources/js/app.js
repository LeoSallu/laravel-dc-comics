import './bootstrap';
import '~resources/scss/app.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

// gestione immagini build
import.meta.glob([
    '../img/**'
])

const eventBtn = document.querySelector('#alert');
    eventBtn.addEventListener('click', function() {
        alert('Sei sicuro di voler cancellare questo dato ?');
    });