let currentTestimony = 0;

document.getElementById('before').addEventListener('click', function() {
    // Obtener todos los testimonios
    const testimonies = document.querySelectorAll('.testimony__body');
    
    // Quitar la clase 'testimony__body--show' del testimonio actual
    testimonies[currentTestimony].classList.remove('testimony__body--show');
    
    // Decrementar el contador
    currentTestimony--;
    
    // Si llegamos al primer testimonio, vuelve al último
    if (currentTestimony < 0) {
        currentTestimony = testimonies.length - 1;
    }
    
    // Agregar la clase 'testimony__body--show' al testimonio anterior
    testimonies[currentTestimony].classList.add('testimony__body--show');
});

document.getElementById('next').addEventListener('click', function() {
    // Obtener todos los testimonios
    const testimonies = document.querySelectorAll('.testimony__body');
    
    // Quitar la clase 'testimony__body--show' del testimonio actual
    testimonies[currentTestimony].classList.remove('testimony__body--show');
    
    // Incrementar el contador
    currentTestimony++;
    
    // Si llegamos al último testimonio, vuelve al primero
    if (currentTestimony >= testimonies.length) {
        currentTestimony = 0;
    }
    
    // Agregar la clase 'testimony__body--show' al siguiente testimonio
    testimonies[currentTestimony].classList.add('testimony__body--show');
});

// Iniciar mostrando solo el primer testimonio
window.onload = function() {
    const testimonies = document.querySelectorAll('.testimony__body');
    testimonies[0].classList.add('testimony__body--show');
}
