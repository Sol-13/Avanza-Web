<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$dni=$_POST['dni'];
$edad=$_POST['edad'];
$fecha=$_POST['fecha'];
$team=$_POST['team'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message.="DNI: " . $dni . "\r\n";
$message.="Distancia: " .$radio1 . "\r\n";
$message.="Distancia: " .$radio2 . "\r\n";
$message.="Distancia: " .$radio3 . "\r\n";
$message.="Posta: " .$posta . "\r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'solealvar13@gmail.com'; /*pedir mail de avanza*/
$asunto = "Mensaje de: " . $name . " \r\n" ;

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>