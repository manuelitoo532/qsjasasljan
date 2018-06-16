<?php

$destino = "ortezcarlos532@gmail.com"
    $nombre= $_POST["nombre"];
$correo $_post["correo"];
$telefono= $_post["telefono"];
$mensaje= $_post["mensaje"];
$contenido = "Nombre: ". $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino,"contacto", $contenido);
header("location: gracias.html");




?>