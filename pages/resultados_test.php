
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




session_start(); // Inicia la sesión para que puedas acceder a las variables de sesión

if (isset($_SESSION['totalScore'])) { // Verifica si 'totalScore' está en la sesión
    $totalScore = $_SESSION['totalScore']; // Recoge la puntuación total de la sesión

    // Determina el nivel de depresión basado en la puntuación total
    if ($totalScore <= 10) {
        $depressionLevel = "Estos altibajos son considerados normales. ";
      
    } elseif ($totalScore <= 16) {
        $depressionLevel = "Leve perturbación del estado de ánimo";
      
    } elseif ($totalScore <= 20) {
        $depressionLevel = "Estados de depresión intermitentes.";
       
    } elseif ($totalScore <= 30) {
        $depressionLevel = "Depresión moderada.";
       
    } elseif ($totalScore <= 40) {
        $depressionLevel = "Depresión grave. ";
       
    }else {
        $depressionLevel = "Depresión extrema.";
       
    }
} else {
    $depressionLevel = "No se encontró ninguna puntuación.";
}

function calculateFlechaPosition($score) {
    $maxHeight = 400; // Asumiendo que la altura de tu barra es de 400px

    if ($score <= 10) {
        return ($maxHeight * 0.125) . 'px'; // Centro del segmento verde (12.5%)
    } elseif ($score <= 16) {
        return ($maxHeight * 0.325) . 'px'; // Centro del segmento amarillo (32.5%)
    } elseif ($score <= 20) {
        return ($maxHeight * 0.45) . 'px';  // Centro del segmento naranja claro (45%)
    } elseif ($score <= 30) {
        return ($maxHeight * 0.625) . 'px'; // Centro del segmento naranja oscuro (62.5%)
    } elseif ($score <= 40) {
        return ($maxHeight * 0.825) . 'px'; // Centro del segmento rojo (82.5%)
    } else {
        return ($maxHeight * 0.95) . 'px';  // Cerca de la parte superior para depresión extrema (95%)
    }
}


$sql = "SELECT * FROM responses ORDER BY id DESC LIMIT 1";  // Suponiendo que 'id' es el nombre de tu columna de identificador.
$stmt = $pdo->prepare($sql);
$stmt->execute();

$latestResult = $stmt->fetch();  // Nota: Estamos usando fetch() en lugar de fetchAll() ya que solo queremos un resultado.





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
    
        <div class="medidor-container">
            <div id="medidor">
                <div id="flecha" style="bottom: <?php echo calculateFlechaPosition($totalScore); ?>;"></div>
            </div>
        </div>

        <!-- Contenedor para la leyenda -->
        <div class="legend-container">
            <div class="legend">
            <table>
        <tr>
            <td><div class="color-key" style="background-color: green;"></div></td>
            <td>Estos altibajos son considerados normales.</td>
        </tr>
        <tr>
            <td><div class="color-key" style="background-color: yellow;"></div></td>
            <td>Leve perturbación del estado de ánimo.</td>
        </tr>
        <tr>
            <td><div class="color-key" style="background-color: orange;"></div></td>
            <td>Estados de depresión intermitentes.</td>
        </tr>
        <tr>
            <td><div class="color-key" style="background-color: darkorange;"></div></td>
            <td>Depresión moderada.</td>
        </tr>
        <tr>
            <td><div class="color-key" style="background-color: red;"></div></td>
            <td>Depresión grave.</td>
        </tr>
        <tr>
            <td><div class="color-key" style="background-color: darkred;"></div></td>
            <td>Depresión extrema.</td>
        </tr>
    </table>
            </div>
        </div>
        <div>
    <table border="1">
        <thead>
            <tr>
                <th>Q1</th>
                <th>Q2</th>
                <th>Q3</th>
                <th>Q4</th>
                <th>Q5</th>
                <th>Q6</th>
                <th>Q7</th>
                <th>Q8</th>
                <th>Q9</th>
                <th>Q10</th>
                <th>Q11</th>
                <th>Q12</th>
                <th>Q13</th>
                <th>Q14</th>
                <th>Q15</th>
                <th>Q16</th>
                <th>Q17</th>
                <th>Q18</th>
                <th>Q19</th>
                <th>Q20</th>
                <th>Q21</th>
                <!-- ... [y así sucesivamente para todas las columnas] -->
                <th>Puntaje Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($latestResult['q1']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q2']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q3']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q4']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q5']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q6']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q7']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q8']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q9']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q10']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q11']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q12']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q13']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q14']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q15']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q16']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q17']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q18']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q19']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q20']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['q21']); ?></td>
                <td><?php echo htmlspecialchars($latestResult['totalScore']); ?></td>
            </tr>
        </tbody>
    </table>
<br>
    <p>Tu nivel de depresión es: <?php echo $depressionLevel; ?></p>
</div>

    </section>
</div>



    





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
