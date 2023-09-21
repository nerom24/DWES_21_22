<?php 
	//Destinatario
	$destinatario = "destinatario@dominio.com";

	//Asunto
	$asunto = "La función mail() de PHP";

	//Mensaje
	$mensaje = "Aquí aprenderán cómo enviar mensajes con la función <b>mail()</b> de PHP con código HTML incrustado!";

	//Cabecera. Debe establecerse la cabecera Content-type
	$header = "Mime-Versión: 1.0". "\r\n";
	$header .= "Content-Type: text/html; charset-iso-8859-1"."\r\n";

	//Cabeceras adicionales
	$header .= "To: Juan Carlos <nerom24@gmail.com>"."\r\n"; //dirección respuesta
	$header .= "From: J. Carlos <nerom24@hotmail.com>"."\r\n"; //remitente
	$header .= "cc: juanito@gmail.com"."\r\n";  //Con copia
	$header .= "Bcc: maria@hotmail.com"."\r\n";  //Con copia oculta

	//
	If (mail($destinatario , $asunto , $mensaje , $header )) {
	echo('<p>Email enviado.</p>'); 
	} else {
	echo('<p>Error de Envío.</p>');
	};

?>