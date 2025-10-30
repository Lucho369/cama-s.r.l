<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $ciudad = $_POST['ciudad'];
  $pais = $_POST['pais'];
  $mensaje = $_POST['mensaje'];

  $para = "cama.electric.20@gmail.com";
  $asunto = "Nuevo mensaje desde el formulario web";

  $contenido = "Nombre: $nombre\n";
  $contenido .= "Apellidos: $apellidos\n";
  $contenido .= "Email: $email\n";
  $contenido .= "Teléfono: $telefono\n";
  $contenido .= "Ciudad: $ciudad\n";
  $contenido .= "País: $pais\n";
  $contenido .= "Mensaje:\n$mensaje";

  $cabeceras = "From: $email";

  if (mail($para, $asunto, $contenido, $cabeceras)) {
    echo "<script>alert('Mensaje enviado correctamente'); window.location.href = 'index.html';</script>";
  } else {
    echo "<script>alert('Error al enviar el mensaje'); window.history.back();</script>";
  }
}
?>
