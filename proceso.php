<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
//$fecha = $_POST['fecha'];
//$personas = $_POST['personas'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "coroexnovo@gmail.com"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto";
$cuerpo = "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Telefono: ".$telefono."<br>";
//$cuerpo .= "Fecha / Hora: ".$fecha."<br>";
//$cuerpo .= "N� de personas: ".$personas."<br>";
$cuerpo .= "Mensaje: ".$mensaje;
 
// Esta es una pequena validaci�n, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombre != '' && $email != '' && $telefono != '' && $mensaje != ''){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
}
?>