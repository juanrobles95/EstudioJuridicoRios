<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por:" . $name . "\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono: " . $telefono . " \r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'consultas@estudiojuridicorios.com.ar';
$asunto = 'Mensaje enviado desde la pagina';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:mensaje_enviado.html");
?>
