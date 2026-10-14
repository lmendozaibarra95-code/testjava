<?php
require_once "recaptchalib.php";

require_once "recaptchalib.php";   
 $secret = "6LfE12AkAAAAALzOFsurtozpuVG_PTf1JPG3j6o_";
 $response = null;
 // Verificamos la clave secreta
 $reCaptcha = new ReCaptcha($secret);
 if ($_POST["g-recaptcha-response"]) {
     $response = $reCaptcha->verifyResponse(
     $_SERVER["REMOTE_ADDR"],
     $_POST["g-recaptcha-response"]
     );
  }
 
 if ($response != null && $response->success) {
  
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];

$destinatario = "luis_mendz18@hotmail.com";

$datos = "De: $nombre  \n";
$datos .= "Correo: $correo \n";
$datos .= "Telefono: $telefono \n";
$datos .= "Mensaje: $mensaje \n";

mail($destinatario, $asunto, $datos);
header('Location:enviado.html');

  } else {
    header('Location:index.html#contacto');

  }







?>