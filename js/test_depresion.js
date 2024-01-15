let currentQuestion = 0;

function showNextQuestion() {
    const questions = document.querySelectorAll('.question');

    // Verifica si hay una opción seleccionada en la pregunta actual
    const selectedOption = document.querySelector(`.question:nth-child(${currentQuestion + 1}) input[type="radio"]:checked`);

    if (!selectedOption) {
        alert("Por favor, selecciona una de las opciones.");
        return;
    }

    // Oculta la pregunta actual
    if (questions[currentQuestion]) {
        questions[currentQuestion].style.display = 'none';
    }

    // Avanza a la siguiente pregunta
    currentQuestion++;

    // Muestra la siguiente pregunta si hay alguna
    if (currentQuestion < questions.length) {
        questions[currentQuestion].style.display = 'block';
    }

    // Si es la última pregunta, muestra el botón de enviar y oculta el de "Siguiente"
    if (currentQuestion === questions.length - 1) {
        const submitButton = document.createElement('button');
        submitButton.type = 'submit';
        submitButton.innerText = 'Enviar';
        document.getElementById('submitBtnContainer').appendChild(submitButton);

        document.getElementById('nextBtn').style.display = 'none';
    }

    // Muestra el botón "Anterior" si no estás en la primera pregunta
    if (currentQuestion > 0) {
        document.getElementById('prevBtn').style.display = 'block';
    } else {
        document.getElementById('prevBtn').style.display = 'none';
    }

    updateProgressBar();
}

function updateProgressBar() {
    const totalQuestions = document.querySelectorAll('.question').length;
    const progressBar = document.getElementById('progressBar');
    const progressPercentage = (currentQuestion / totalQuestions) * 100;
    progressBar.style.width = progressPercentage + "%";
}

function showPreviousQuestion() {
    const questions = document.querySelectorAll('.question');

    if (questions[currentQuestion]) {
        questions[currentQuestion].style.display = 'none';
    }

    currentQuestion--;

    if (currentQuestion >= 0) {
        questions[currentQuestion].style.display = 'block';
    }

    if (currentQuestion === 0) {
        document.getElementById('prevBtn').style.display = 'none';
    }

    if (currentQuestion < questions.length - 1) {
        document.getElementById('nextBtn').style.display = 'block';
        const submitButton = document.querySelector('#submitBtnContainer button');
        if (submitButton) submitButton.remove();
    }
    updateProgressBar();
}

document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.question');
    for (let i = 1; i < questions.length; i++) {
        questions[i].style.display = 'none';
    }

    if (questions[0]) {
        questions[0].style.display = 'block';
    }

    updateProgressBar();
    document.getElementById('prevBtn').addEventListener('click', showPreviousQuestion);
});

document.getElementById('nextBtn').addEventListener('click', showNextQuestion);




document.getElementById('depressionTest').addEventListener('submit', function(event) {
    const inputs = document.querySelectorAll('input[required]');
    let allSelected = true;

    inputs.forEach(function(input) {
        const name = input.getAttribute('name');
        const checkedInput = document.querySelector(`input[name="${name}"]:checked`);
        if (!checkedInput) {
            allSelected = false;
        }
    });

    if (!allSelected) {
        event.preventDefault(); // Esto detiene el envío del formulario
        // No mostrar el alert aquí si ya tienes otro método para mostrar un mensaje
    }
});


//funcion de cuando se le de la opcion "otro" aparesca otro campo para escribir informacion especifica

function mostrarOtroCampo() {
    var seleccion = document.getElementById("grado").value;
    if (seleccion === "otro") {
        document.getElementById("otroCampo").style.display = "block"; // Muestra el campo
    } else {
        document.getElementById("otroCampo").style.display = "none";  // Oculta el campo
    }
}

// Función para mostrar u ocultar el campo "Otro"
function mostrarOtroCampo() {
    var seleccion = document.getElementById("grado").value;
    if (seleccion === "otro") {
        document.getElementById("otroCampo").style.display = "block"; // Muestra el campo
    } else {
        document.getElementById("otroCampo").style.display = "none";  // Oculta el campo
    }
}

// Función para manejar el envío del formulario
document.getElementById("formularioEstudiante").addEventListener("submit", function(event) {
    event.preventDefault();  // Evitar el envío del formulario
    // Aquí puedes añadir código para enviar los datos del formulario mediante AJAX, si lo deseas

    // Ocultar el formulario
    document.getElementById("formularioEstudiante").style.display = "none";
    
    // Mostrar un mensaje de éxito (opcional)
    var mensaje = document.createElement("p");
    mensaje.textContent = "Formulario enviado con éxito. ¡Gracias!";
    document.body.appendChild(mensaje);
});