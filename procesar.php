<?php 

	$destino="enzomorbiducci@hotmail.com";
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$mensaje=$_POST['mensaje'];

	$contenido = "Nombre del usuario: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
	mail($destino, "Nuevo mensaje recibido", $contenido);
	header("Location:gracias.html");


 ?>