<?php
$name     = $_POST['name'];
$email    = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje  = $_POST['mensaje'];
$correo = "consultas@estudiojuridicorios.com.ar";
$asunto = "FORM_SITIOWEB";


$header  = 'From: ' . 'c2201267.ferozo.com' . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0" . "\r\n";
$header .= "Content-Type: text/plain";

$message  = "CORREO: " . $email . " \r\n";
$message .= "NOMBRE: " . $name . "\r\n";
$message .= "Teléfono: " . $telefono . " \r\n";
$message .= "Mensaje: " . $mensaje . " \r\n";

//mb_send_mail($correo,$asunto,utf8_encode($mensaje),$header);
mail($correo, $asunto, utf8_decode($message),$header);

header("Location:mensaje_enviado.html")
?>
