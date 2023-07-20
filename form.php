<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['data'];
/*
echo $nombre . "</br>";
echo $mail . "</br>";
echo $mensaje . "</br>";
 */

 //Como va a llegar el mensaje
 $mensaje = "Este mensaje fue enviado por ". $nombre . ",\r\n";
 $mensaje .= "Su e-mail es: " . $mail . ",\r\n";
 $mensaje .= "Mensaje: ". $_POST['data']. ",\r\n";
 $mensaje .= "Enviado el " .date('d/m/Y',time());

 $destinatario = "eloy.maguinaricra@gmail.com";
 $asunto = "Correo enviado desde el Portafolio";

 mail($destinatario, $asunto, utf8_decode($mensaje));


// header('Location:index.html');
?>