<?php 
//ESTO ES DE MI FORMULARIO PARA ENVIAR MSJS AL MAIL
$nombre =$_POST['nombre'];
$email =$_POST['email'];
$telefono =$_POST['telefono'];
$mensaje =$_POST['mensaje'];

$remitente = "from: $nombre <$email>";
$destino = 'ayelotero@gmail.com';
$asunto =$nombre . 'Envio la siguiente consulta a traves de la web';

$cuerpo = ' nombre: ' . $nombre  . "\r\n";
$cuerpo .= ' email: ' . $email . "\r\n";
$cuerpo .= ' telefono: ' . $telefono . "\r\n";
$cuerpo .= ' mensaje: ' . $mensaje  . "\r\n";

$remitente_usuario ="from: sitio web <ayeloter@gmail.com>";
$asunto_usuario = "aviso de recibo de consulta";
 
$contenido_usuario = ' Hola ' . $nombre . "\r\n" . ' Has enviado el siguiente mensaje : ' .  $mensaje  . "\r\n" ;
$contenido_usuario .=  ' a la brevedad nos comunicaremos con vos ' ;


mail($destino, $asunto, $cuerpo, $remitente);//esto le llegaria al dueño de la empresa
mail($email, $asunto_usuario, $contenido_usuario, $remitente_usuario);

header('location:contacto.php?envio=ok#contacto');



?>