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

// Calcular las sumas para cada tipo de inteligencia

$Inteligencia_Verbal_Linguistica = $q9 + $q10 + $q17 + $q22 + $q30;
$Inteligencia_Logico_Matematica = $q5 + $q7 + $q15 + $q20 + $q25;
$Inteligencia_Visual_Espacial = $q1 + $q11 + $q14 + $q23 + $q27;
$Inteligencia_Kinestesica_Corporal = $q8 + $q16 + $q19 + $q21 + $q29;
$Inteligencia_Musical_Ritmica = $q3 + $q4 + $q13 + $q24 + $q28;
$Inteligencia_Intrapersonal = $q2 + $q6 + $q26 + $q31 + $q33;
$Inteligencia_Interpersonal = $q12 + $q18 + $q32 + $q34 + $q35;

    // Inserta las respuestas en la base de datos
    $sql = "INSERT INTO respuestas_inteligencia (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, Inteligencia_Verbal_Linguistica,Inteligencia_Logico_Matematica,Inteligencia_Visual_Espacial,Inteligencia_Kinestesica_Corporal,Inteligencia_Musical_Ritmica,Inteligencia_Intrapersonal,Inteligencia_Interpersonal) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?)";

$stmt= $pdo->prepare($sql);
$stmt->execute([$q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20,$q21,$q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30, $q31, $q32, $q33, $q34, $q35, $Inteligencia_Verbal_Linguistica,$Inteligencia_Logico_Matematica,$Inteligencia_Visual_Espacial,$Inteligencia_Kinestesica_Corporal,$Inteligencia_Musical_Ritmica,$Inteligencia_Intrapersonal,$Inteligencia_Interpersonal]);



// Redirige a la página de resultados
header('Location: resultados_test_inteligencia.php');
exit;


?>
