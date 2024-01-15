<?php
$host = 'localhost';
$db   = 'chatbot';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];

    // Buscar el ID del usuario en la base de datos.
    $stmt = $pdo->prepare('SELECT id FROM usuarios WHERE nombre = ?');
    $stmt->execute([$nombre]);
    $usuario = $stmt->fetch();

    // Si el usuario no existe en la base de datos, crearlo.
    if (!$usuario) {
        $stmt = $pdo->prepare('INSERT INTO usuarios (nombre) VALUES (?)');
        $stmt->execute([$nombre]);
        $usuario_id = $pdo->lastInsertId();
    } else {
        $usuario_id = $usuario['id'];
    }

    // Insertar el mensaje del usuario en la base de datos.
    $stmt = $pdo->prepare('INSERT INTO conversaciones (usuario_id, mensaje_usuario) VALUES (?, ?)');
    $stmt->execute([$usuario_id, $mensaje]);

    // Por ahora, el chatbot solo responde con un eco del mensaje.
    $respuesta = $mensaje;

    // Insertar la respuesta del chatbot en la base de datos.
    $stmt = $pdo->prepare('UPDATE conversaciones SET mensaje_bot = ? WHERE id = ?');
    $stmt->execute([$respuesta, $pdo->lastInsertId()]);

    echo $respuesta;
}
?>
