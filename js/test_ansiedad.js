document.getElementById("nextBtn").addEventListener("click", function(event) {
    event.preventDefault();  // Evita que el formulario se envíe
    let table1 = document.getElementById("table1");
    let table2 = document.getElementById("table2");

    if (table1.classList.contains("show")) {
        table1.classList.remove("show");
        table1.classList.add("hide");
        table2.classList.remove("hide");
        table2.classList.add("show");
    }
    else {
        table1.classList.remove("hide");
        table1.classList.add("show");
        table2.classList.remove("show");
        table2.classList.add("hide");
    }
});





window.onload = function() {
    let table1 = document.querySelector('#table1');
    let table2 = document.querySelector('#table2');
    let nextBtn = document.querySelector('#nextBtn');
    let prevBtn = document.querySelector('#prevBtn');
    let submitBtn = document.querySelector('#submitBtn');

    nextBtn.addEventListener('click', function(e) {
        e.preventDefault();
        table1.style.display = 'none'; // Oculta la primera tabla
        table2.style.display = 'table'; // Muestra la segunda tabla
        nextBtn.style.display = 'none'; // Oculta el botón "Siguiente"
        prevBtn.style.display = 'block'; // Muestra el botón "Devolver"
        submitBtn.style.display = 'block'; // Muestra el botón "Enviar"
    });

    prevBtn.addEventListener('click', function(e) {
        e.preventDefault();
        table2.style.display = 'none'; // Oculta la segunda tabla
        table1.style.display = 'table'; // Muestra la primera tabla
        prevBtn.style.display = 'none'; // Oculta el botón "Devolver"
        nextBtn.style.display = 'block'; // Muestra el botón "Siguiente"
        submitBtn.style.display = 'none'; // Oculta el botón "Enviar"
    });
}
