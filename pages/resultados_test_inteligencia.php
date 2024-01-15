<?php
$host = 'localhost'; // tu host
$db   = 'bdthomas'; // tu base de datos
$user = 'root'; // tu usuario
$pass = ''; // tu contraseña
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

// Variable de control para verificar si todas las preguntas se han respondido
$allQuestionsAnswered = false;

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario y los convierte a números enteros
    $q1 = isset($_POST['q1']) ? intval($_POST['q1']) : 0;
    $q2 = isset($_POST['q2']) ? intval($_POST['q2']) : 0;
    $q3 = isset($_POST['q3']) ? intval($_POST['q3']) : 0;
    $q4 = isset($_POST['q4']) ? intval($_POST['q4']) : 0;
    $q5 = isset($_POST['q5']) ? intval($_POST['q5']) : 0;
    $q6 = isset($_POST['q6']) ? intval($_POST['q6']) : 0;
    $q7 = isset($_POST['q7']) ? intval($_POST['q7']) : 0;
    $q8 = isset($_POST['q8']) ? intval($_POST['q8']) : 0;
    $q9 = isset($_POST['q9']) ? intval($_POST['q9']) : 0;
    $q10 = isset($_POST['q10']) ? intval($_POST['q10']) : 0;
    $q11 = isset($_POST['q11']) ? intval($_POST['q11']) : 0;
    $q12 = isset($_POST['q12']) ? intval($_POST['q12']) : 0;
    $q13 = isset($_POST['q13']) ? intval($_POST['q13']) : 0;
    $q14 = isset($_POST['q14']) ? intval($_POST['q14']) : 0;
    $q15 = isset($_POST['q15']) ? intval($_POST['q15']) : 0;
    $q16 = isset($_POST['q16']) ? intval($_POST['q16']) : 0;
    $q17 = isset($_POST['q17']) ? intval($_POST['q17']) : 0;
    $q18 = isset($_POST['q18']) ? intval($_POST['q18']) : 0;
    $q19 = isset($_POST['q19']) ? intval($_POST['q19']) : 0;
    $q20 = isset($_POST['q20']) ? intval($_POST['q20']) : 0;
    $q21 = isset($_POST['q21']) ? intval($_POST['q21']) : 0;
    $q22 = isset($_POST['q22']) ? intval($_POST['q22']) : 0;
    $q23 = isset($_POST['q23']) ? intval($_POST['q23']) : 0;
    $q24 = isset($_POST['q24']) ? intval($_POST['q24']) : 0;
    $q25 = isset($_POST['q25']) ? intval($_POST['q25']) : 0;
    $q26 = isset($_POST['q26']) ? intval($_POST['q26']) : 0;
    $q27 = isset($_POST['q27']) ? intval($_POST['q27']) : 0;
    $q28 = isset($_POST['q28']) ? intval($_POST['q28']) : 0;
    $q29 = isset($_POST['q29']) ? intval($_POST['q29']) : 0;
    $q30 = isset($_POST['q30']) ? intval($_POST['q30']) : 0;
    $q31 = isset($_POST['q31']) ? intval($_POST['q31']) : 0;
    $q32 = isset($_POST['q32']) ? intval($_POST['q32']) : 0;
    $q33 = isset($_POST['q33']) ? intval($_POST['q33']) : 0;
    $q34 = isset($_POST['q34']) ? intval($_POST['q34']) : 0;
    $q35 = isset($_POST['q35']) ? intval($_POST['q35']) : 0;

    // Verifica si todas las preguntas se han respondido
    if ($q1 !== 0 && $q2 !== 0 && $q3 !== 0 && $q4 !== 0 && $q5 !== 0 && $q6 !== 0 && $q7 !== 0 && $q8 !== 0 && $q9 !== 0 && $q10 !== 0 && $q11 !== 0 && $q12 !== 0 && $q13 !== 0 && $q14 !== 0 && $q15 !== 0 && $q16 !== 0 && $q17 !== 0 && $q18 !== 0 && $q19 !== 0 && $q20 !== 0 && $q21 !== 0 && $q22 !== 0 && $q23 !== 0 && $q24 !== 0 && $q25 !== 0 && $q26 !== 0 && $q27 !== 0 && $q28 !== 0 && $q29 !== 0 && $q30 !== 0 && $q31 !== 0 && $q32 !== 0 && $q33 !== 0 && $q34 !== 0 && $q35 !== 0) {
        $allQuestionsAnswered = true;
    }
}

// ... (resto del código HTML)

// Si todas las preguntas se han respondido, realiza los cálculos de resultados
if ($allQuestionsAnswered) {
    // Calcula los resultados de inteligencia
    $Inteligencia_Verbal_Linguistica = $q9 + $q10 + $q17 + $q22 + $q30;
    $Inteligencia_Logico_Matematica = $q5 + $q7 + $q15 + $q20 + $q25;
    $Inteligencia_Visual_Espacial = $q1 + $q11 + $q14 + $q23 + $q27;
    $Inteligencia_Kinestesica_Corporal = $q8 + $q16 + $q19 + $q21 + $q29;
    $Inteligencia_Musical_Ritmica = $q3 + $q4 + $q13 + $q24 + $q28;
    $Inteligencia_Intrapersonal = $q2 + $q6 + $q26 + $q31 + $q33;
    $Inteligencia_Interpersonal = $q12 + $q18 + $q32 + $q34 + $q35;

    // Inserta los resultados en la base de datos o muestra los resultados en la página
    // Puedes incluir aquí tu código actual para insertar los resultados o mostrarlos
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/result_depresion.css">

    <title>Test Thómas</title>
</head>
<body>
    
<header class="header">
        <header class="menu " >
        <a  href="#"><img src="../img/1-removebg-preview.png" alt="thómas, aistente virtual" class="logo-header"></a>
            
    
           
         


            <div class="socials-1">
            <a href="./test_depresion.html" class="icono-salida"><img src="../img/salida.png" alt="Cerrar sesión"></a>
                <a href="https://www.instagram.com/thomas.checo/"><img src="../img/instagram.svg" alt=""></a>
                <a href="https://www.facebook.com/profile.php?id=100085543308468"><img src="../img/facebook.svg" alt=""></a>
                <a href="https://www.linkedin.com/in/pachecop%C3%A9rez/"><img src="../img/linkedin.svg" alt=""></a>
            </div>

          

        </header>
        <h1>RESULTADOS DEL TEST DE DEPRESION</h1>
    </header>
   


    <div class="container">

    <section>
    


   
<br>
<p>Puntuación de Inteligencia A: <?php echo $Inteligencia_Verbal_Linguistica ?></p>
<p>Puntuación de Inteligencia A: <?php echo $Inteligencia_Logico_Matematica ?></p>
<p>Inteligencia Visual/Espacial: <?php echo $Inteligencia_Visual_Espacial ?></p>
<p>Inteligencia Kinestésica/Corporal: <?php echo $Inteligencia_Kinestesica_Corporal ?></p>
<p>Inteligencia Musical/Rítmica: <?php echo $Inteligencia_Musical_Ritmica  ?></p>
<p>Inteligencia Intrapersonal: <?php echo $Inteligencia_Intrapersonal ?></p>
<p>Inteligencia Interpersonal: <?php echo $Inteligencia_Interpersonal ?></p>

    </section>




    





<footer class="footer">
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
