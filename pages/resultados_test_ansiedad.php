
<?php
session_start(); // Inicia la sesión para que puedas acceder a las variables de sesión

if (isset($_SESSION['totalScore'])) { // Verifica si 'totalScore' está en la sesión
    $totalScore = $_SESSION['totalScore']; // Recoge la puntuación total de la sesión

    // Determina el nivel de depresión basado en la puntuación total
    if ($totalScore <= 10) {
        $depressionLevel = "Estos altibajos son considerados normales. ";
        $imagePath = "../img/clasificacion.png";
    } elseif ($totalScore <= 16) {
        $depressionLevel = "Leve perturbación del estado de ánimo";
        $imagePath = "../img/normal.png";
    } elseif ($totalScore <= 20) {
        $depressionLevel = "Estados de depresión intermitentes.";
        $imagePath = "../img/normal.png";
    } elseif ($totalScore <= 30) {
        $depressionLevel = "Depresión moderada.";
        $imagePath = "../img/normal.png";
    } elseif ($totalScore <= 40) {
        $depressionLevel = "Depresión grave. ";
        $imagePath = "../img/normal.png";
    }else {
        $depressionLevel = "Depresión extrema.";
        $imagePath = "../img/normal.png";
    }
} else {
    $depressionLevel = "No se encontró ninguna puntuación.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tests.css">

    <title>Test Thómas</title>
</head>
<body>
    
<header class="header">
        <header class="menu " >
            <a href="#"><img src="../img/logo.svg" alt=""></a>
            
    
            <nav class="navbar">
                <ul>
                    
                </ul>
            </nav>
            <li><a href="./test_depresion.html" class="btn-1">Regresar</a></li>


            <div class="socials-1">
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
            <p>RESULTADOS</p>
            <p>Tu nivel de depresión es: <?php echo $depressionLevel; ?></p>
            <img src="<?php echo $imagePath; ?>" alt="Nivel de Depresión">
        </section>
    </div>
    <footer>
    <p>&copy; 2023 Blog Thomas. Todos los derechos reservados.</p>
</footer>  
</body>
</html>
