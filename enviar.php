<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title>

</head>

<body>
<?php

$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];
$fecha = $_POST['fecha'];
$team = $_POST['team'];
$phone = $_POST['phone'];
$example = $_POST['example'];
$posta = $_POST['posta'];
$Mensaje = $_POST['Mensaje'];
$archivo = $_FILES['adjunto'];

if ($Nombre=='' || $Email=='' || $Mensaje==''){ 

<<<<<<< HEAD
echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{
=======
$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Edad: " .$edad. " \r\n";
$message.="DNI: " . $dni . "\r\n";
$message.="Fecha de nacimiento: " . $_POST['fecha'] . " \r\n";
 $message.="Running Team: " . $_POST['team'] . " \r\n";
$message.= "Distancia:" . $_POST['example'] . " \r\n";
    
$message.="Posta:" . $_POST['posta'] . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'solealvar13@gmail.com'; /*pedir mail de avanza*/
$asunto = "Mensaje de: " . $name . " \r\n" ;
>>>>>>> e58fc09d8b43a6479e16b5a7531a17d928da7852


    require 'phpmailer/class.phpmailer.php';
    require 'phpmailer/class.smtp.php'; //incluimos la clase para envíos por SMTP
    $mail = new PHPMailer();

    $mail->From     = $Email;
    $mail->FromName = $Nombre; 
    $mail->FromEdad = $edad;
    $mail->FromDni = $dni;
    $mail->FromFecha = $fecha;
    $mail->FromTeam = $team;
    $mail->FromPhone = $phone;
    $mail->FromDistancia = $example;
    $mail->FromPosta = $posta;
    $mail->AddAddress("avanza@live.com.ar"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Nombre: $Nombre \n<br />".
    "Email: $Email \n<br />".
    "Edad: $edad \n<br />".
    "Dni: $dni \n<br />".
    "Fecha de nacimiento: $fecha \n<br />".
    "Running Team: $team \n<br />".
    "Celular: $phone \n<br />".
    "Distancia: $example \n<br />".
    "Posta: $posta \n<br />".
    "Mensaje: $Mensaje \n<br />";
    $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);   
    
    

// Datos del servidor SMTP

   /* $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com"; //servidor smtp, esto lo puedes dejar igual
    $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
    $mail->Username = 'solealvar13@gmail.com';  // Tu correo gmail
    $mail->Password = 'dcc15f29'; // Tu contrasena gmail
    $mail->FromName = 'Tu nombre'; // 
    $mail->From = 'solealvar13@gmail.com'; //email de remitente desde donde se envía el correo, este caso para evitar spam es el mismo que tu correo gmail*/
    
    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>
</body>
</html>