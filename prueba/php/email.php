<? php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$destinatario = "luis_mendz18@hotmail.com";
$asunto= "$asunto";

$datos = "De: $nombre /n";
$datos .= "Correo: $correo /n";
$datos .= "Teléfono: $telefono /n";
$datos .= "Mensaje: $mensaje /n";

mail($destinatario, $asunto, $datos);
header('location:enviado.html');

?>