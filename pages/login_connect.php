<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdthomas";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Registro de usuarios
if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['contrasena'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios_registrados (nombre, correo, contrasena) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $correo, $contrasena);

    if ($stmt->execute()) {
        echo "Usuario registrado con éxito";
        header("Location: acceso.html");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Inicio de sesión
if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $stmt = $conn->prepare("SELECT * FROM usuarios_registrados WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($contrasena, $user['contrasena'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['correo'] = $correo;
            header('Location: pagina1.php');
            exit;
        } else {
            echo "Correo o contraseña incorrectos";
        }
    } else {
        echo "Correo o contraseña incorrectos";
    }

    $stmt->close();
}

$conn->close();

?>

