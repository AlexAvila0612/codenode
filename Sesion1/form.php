<?php


$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

$mensaje = "Este mensaje fue enviado por: " . $nombre . "\r\n";
$mensaje .= "Su correo es: " . $email . "\r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());`

$para = 'alexavila@ejemplo.com';
$asunto = 'Contacto desde la web';

mail($para, $asunto, utf8_decode($mensaje), "From: $email");

header('Location: exito.html');

<?php