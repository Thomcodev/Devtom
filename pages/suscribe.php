<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if (isset($_GET["email"])) {
    $email = $_GET["email"];

    // Configura los detalles de tu base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdthomas";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Chequea la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepara el SQL para insertar el email
    $sql = "INSERT INTO subscribers (email) VALUES (?)";

    if ($stmt = $conn->prepare($sql)) {
        // Vincula los parámetros a la sentencia preparada
        $stmt->bind_param("s", $email);

        // Ejecuta la sentencia preparada
        if ($stmt->execute()) {
            echo "Se agregó un nuevo suscriptor.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    // Cierra la conexión
    $conn->close();

    $mail = new PHPMailer(true);

    try {
        // Configura los ajustes del servidor
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tu-email@gmail.com'; // reemplazar con tu email
        $mail->Password   = 'tu-contraseña'; // reemplazar con tu contraseña
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Configura los destinatarios
        $mail->setFrom('no-reply@yourdomain.com', 'Tu nombre');
        $mail->addAddress($email); // correo del suscriptor

        // Configura el contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Confirmación de suscripción';
        $mail->Body    = 'Gracias por suscribirte a nuestro newsletter.';
        $mail->AltBody = 'Gracias por suscribirte a nuestro newsletter.';

        // Enviar el correo
        $mail->send();
        echo 'El correo ha sido enviado al suscriptor exitosamente.';

       
        $mail->addAddress('tu-email@yourdomain.com'); // tu correo
        $mail->Subject = 'Nueva suscripción';
        $mail->Body    = 'Nuevo suscriptor: ' . $email;
        $mail->AltBody = 'Nuevo suscriptor: ' . $email;

        // Envía el correo electrónico
        $mail->send();
        echo 'El correo ha sido enviado a tu bandeja de entrada exitosamente.';
        
    } catch (Exception $e) {
        echo "El correo no pudo ser enviado. Error de Mailer: {$mail->ErrorInfo}";
    }

} else {
    echo "No se proporcionó ninguna dirección de correo electrónico.";
}
?>

