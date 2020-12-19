<?php
	$destinatatio = 'gonzappere07@gmail.com';

 	$nombre = $_POST['nombre'];
 	$asunto = $_POST['asunto'];
 	$mensaje = $_POST['mensaje'];
 	$email = $_POST['email'];

 	$header = "Enviado desde la pagina de Gonzalo";
 	$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

 	mail($destinatatio, $asunto, $mensajeCompleto, $header);
 	echo "<script>alert('correo enviado exitosamente')</script>";
 	echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
