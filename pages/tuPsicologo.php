<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tuPsicologo.css">

    <title>Test Thómas</title>
</head>
<body>
    
<header class="header">
        <header class="menu " >
            <a  href="#"><img src="../img/1-removebg-preview.png" alt="thómas, aistente virtual" class="logo-header"></a>
    
            <nav class="navbar">
                <ul>
                
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#profesionales">Nuestros Profesionales</a></li>
            <li><a href="#citas">Agendar Cita</a></li>
            <li><a href="#contacto">Contacto</a></li>
        
                </ul>
            </nav>
            
            
    

            <div class="socials-1">
                <a href="../pages/pagina1.php" class="icono-salida"><img src="../img/salida.png" alt="Cerrar sesión"></a>
                <a href="https://www.instagram.com/thomas.checo/"><img src="../img/instagram.svg" alt=""></a>
                <a href="https://www.facebook.com/profile.php?id=100085543308468"><img src="../img/facebook.svg" alt=""></a>
                <a href="https://www.linkedin.com/in/pachecop%C3%A9rez/"><img src="../img/linkedin.svg" alt=""></a>
            </div>

          

        </header>
        <h1>Bienvenidos a tu psicologo virtual</h1>
    </header>
    
    <section id="inicio">
   
    <p>Aquí puedes recibir atención psicológica profesional desde la comodidad de tu hogar.</p>
</section>

<!-- Sección de Profesionales -->
<section id="profesionales">
    
    
    <!-- Tarjeta de profesional -->
    <div class="perfil-profesional">
        <img src="../img/psicologo.jpeg" alt="Foto del Dr. Juan Pérez">
        <div class="info-profesional">
            <h3>Dr. Juan Pérez</h3>
            <p>Especialista en terapia cognitivo-conductual. Con más de 10 años de experiencia.</p>
        </div>
    </div>

    <!-- Tarjeta de profesional -->
    <div class="perfil-profesional">
        <img src="../img/psicologa.jpeg" alt="Foto del Dr. Maria García">
        <div class="info-profesional">
            <h3>Dr. Maria García</h3>
            <p>Especialista en terapia de pareja. Más de 8 años ayudando a personas a mejorar sus relaciones.</p>
        </div>
    </div>
    <div class="perfil-profesional">
        <img src="../img/psicologo1.jpeg" alt="Foto del Dr. Juan Pérez">
        <div class="info-profesional">
            <h3>Dr. Thomas Checo</h3>
            <p>Especialista en terapia cognitivo-conductual. </p>
        </div>
    </div>

    <!-- Tarjeta de profesional -->
    <div class="perfil-profesional">
        <img src="../img/psicologa1.jpeg" alt="Foto del Dr. Maria García">
        <div class="info-profesional">
            <h3>Dr. Maria Herrera</h3>
            <p>Especialista en terapia a niños</p>
        </div>
    </div>
    <!-- ... Agrega más tarjetas según necesites -->
</section>

<!-- Sección para Agendar Citas -->
<section id="citas">
    <h2 >Agendar Cita </h2>
    <div class="citas-container">
        <form action="URL_DEL_SERVIDOR_DONDE_PROCESAS_EL_FORMULARIO" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha de la Cita:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>

            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje (Opcional):</label>
                <textarea id="mensaje" name="mensaje" rows="4"></textarea>
            </div>

            <button type="submit">Agendar Cita</button>
        </form>
    </div>
</section>


<!-- Sección de Contacto -->



<footer  id="contacto" class="footer">
    <div class="copyright">
        &copy; 2023 Thómas, Asistente Virtual. Todos los derechos reservados.
    </div>
    
    <div class="footer-socials">
        <a href="https://www.instagram.com/thomas.checo/"><img src="../img/instagram.svg" alt="Perfil de Instagram de Thomas Checo"></a>
        <a href="https://www.facebook.com/profile.php?id=100085543308468"><img src="../img/facebook.svg" alt="Perfil de facebook de Thomas Checo"></a>
        <a href="https://www.linkedin.com/in/pachecop%C3%A9rez/"><img src="../img/linkedin.svg" alt="Perfil de linkedin de Thomas Checo"></a>
    </div>
</footer>
</body>
</html>
