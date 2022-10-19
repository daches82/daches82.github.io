<?php

$para="daches82@gmail.com";
$asunto="Mensaje de biomed";
$mailheader="from: ".$_POST["email"]."\r\n";
$mailheader .="Reply: ".$_POST["email"]."\r\n";
$mailheader .="Content-type: text/html; charset=utf-8\r\n";
$mensaje= "Nombre: ".$_POST["name"]."\n";
$mensaje .= "\n<br>Email: ".$_POST["email"]."\n";
$mensaje .= "\n<br>Mensaje: ".nl2br($_POST["message"])."\n";

mail($para,$asunto,$mensaje,$mailheader) or die("Error sending the email");

header('Location: http://marca.es');

?>

