<?php 
	
	
	$destinatario = $_POST['destinatario'];
	$remitente    = $_POST['remitente'];
	$asunto       = $_POST['asunto'];
	$mensaje      = $_POST['mensaje'];


	//Cabecera. Debe establecerse la cabecera Content-type
	$header = "Mime-Versión: 1.0". "\r\n";
	$header .= "Content-Type: text/html; charset-iso-8859-1"."\r\n";

	//Cabeceras adicionales
	$header .= "To: <".$remitente.">"."\r\n"; //dirección respuesta
	$header .= "From: <".$remitente.">"."\r\n"; //remitente

	//
	If (mail($destinatario , $asunto , $mensaje , $header )) {
	echo('<p>Email enviado.</p>'); 
	} else {
	echo('<p>Error de Envío.</p>');
	};
	
	header("location:index.php");

?>

