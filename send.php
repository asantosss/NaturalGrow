<?php

$mail ="aleejandro.santos@gmail.com";

$nombre=$_POST["name"];
$correo=$_POST["email"];
$telefono=$_POST["telefono"];    
$mensaje=$_POST["mensaje"];

$contenido = "Apellido y Nombre: ".$nombre . "\nCorreo: " .$correo . "\nTeléfono: " .$telefono . "\nMensaje: " .$mensaje;

mail($mail,"Contacto desde web",$contenido);

header("Location:index.html");
?>