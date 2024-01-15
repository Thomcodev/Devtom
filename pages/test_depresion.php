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
// Calcula la puntuación total
$totalScore = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9+$q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18+$q19 + $q20 + $q21;

$sql = "INSERT INTO responses (q1, q2, q3, q4, q5, q6, q7, q8, q9,q10, q11, q12, q13, q14, q15, q16, q17,q18, q19, q20, q21, totalScore) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20,$q21,$totalScore]);

// Almacena la puntuación total en una variable de sesión
session_start();
$_SESSION['totalScore'] = $totalScore;

// Redirige a la página de resultados
header('Location: resultados_test.php');
exit;


?>