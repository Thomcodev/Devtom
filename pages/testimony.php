<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdthomas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$testimonial = $conn->real_escape_string($_POST['testimonial']);

$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["imgSrc"]["name"]);

if (move_uploaded_file($_FILES["imgSrc"]["tmp_name"], $target_file)) {
  $imgSrc = $target_file;

  // Insertar el testimonio en la base de datos
  $sql = "INSERT INTO testimonials (name, testimonial, imgSrc) VALUES ('$name', '$testimonial', '$imgSrc')";
  if ($conn->query($sql) === TRUE) {
    echo "Testimonio agregado correctamente.";
    
    header('Location: pagina1.php#testimonios');
    exit;
    

  } else {
    echo "Error al agregar el testimonio: " . $conn->error;
  }
} else {
  echo "Error al cargar la imagen.";
}

$conn->close();
?>





