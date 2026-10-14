<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];

$destinatario = "webmaster@euroamericana.com.mx";

$datos = "De: $nombre  \n";
$datos .= "Correo: $correo \n";
$datos .= "Telefono: $telefono \n";
$datos .= "Mensaje: $mensaje \n";

mail($destinatario, $asunto, $datos);
header('Location:enviado.html');

?>