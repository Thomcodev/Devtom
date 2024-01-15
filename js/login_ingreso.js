document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

    //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "block";
    }else{
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "10px";
            formulario_register.style.display = "none";
            caja_trasera_register.style.opacity = "1";
            caja_trasera_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_register.style.display = "none";
            caja_trasera_register.style.display = "block";
            caja_trasera_login.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "410px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.opacity = "0";
            caja_trasera_login.style.opacity = "1";
        }else{
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.display = "none";
            caja_trasera_login.style.display = "block";
            caja_trasera_login.style.opacity = "1";
        }
}

function mostrarOcultarContrasena1() {
    var campoContrasena = document.getElementById("contrasena");
    var iconoOjo = document.getElementById("icono-ojo");
  
    if (campoContrasena.getAttribute("type") === "password") {
      campoContrasena.setAttribute("type", "text");
      iconoOjo.classList.remove("fa-eye");
      iconoOjo.classList.add("fa-eye-slash");
    } else {
      campoContrasena.setAttribute("type", "password");
      iconoOjo.classList.remove("fa-eye-slash");
      iconoOjo.classList.add("fa-eye");
    }
  }

  function mostrarOcultarContrasena2() {
    var campoContrasena = document.getElementById("contrasena1");
    var iconoOjo = document.getElementById("icono-ojo");
  
    if (campoContrasena.getAttribute("type") === "password") {
      campoContrasena.setAttribute("type", "text");
      iconoOjo.classList.remove("fa-eye");
      iconoOjo.classList.add("fa-eye-slash");
    } else {
      campoContrasena.setAttribute("type", "password");
      iconoOjo.classList.remove("fa-eye-slash");
      iconoOjo.classList.add("fa-eye");
    }
  }

  const registroForm = document.getElementById('registroForm');

  registroForm.addEventListener('submit', function(event) {
    // Evita que el formulario se envíe automáticamente
    event.preventDefault();

    // Obtén los valores de los campos
    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('contrasena1').value;

    // Verifica si todos los campos están llenos
    if (nombre && email && password) {
      // Muestra el mensaje de registro exitoso como una alerta
      alert('¡Registro exitoso!');

      // Envía el formulario manualmente
      registroForm.submit();
    } else {
      // Muestra el mensaje de campos incompletos como una alerta
      alert('Por favor, complete todos los campos requeridos.');
    }
  });
