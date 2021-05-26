<?php
	$destino = "aleejandro.santos@gmail.com";
	$nombre = $_post["nombre_txt"];
	$correo = $_post["email_txt"];
	$asunto = $_post["Asunto_txt"];
	$mensaje = $_post["comentarios_txa"];
	$contenido = "Nombre: " . $nombre . "\ncorreo: " .$correo . "\nasunto: " . $asunto . "\nmensaje" .$mensaje;
	if(mail($destino,"Contacto", "Contacto". $contenido)){
	echo "vamoooo";
}else{
echo "Failed";
}
?>