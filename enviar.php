<?php 
$myemail = 'alvaro.vergara.f@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "<script type='text/javascript'>alert('Mensaje enviado con éxito!');</script>";
echo "<script type='text/javascript'>window.location.href='http://dev.mayordomus.cl';</script>";
?>