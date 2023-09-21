<?php 
	require_once('PHPMailer/class.phpmailer.php');
	$mail = new PHPMailer;
	$mail->CharSet = "UTF-8";
	$mail->Encoding = "quoted-printable";
	$mail->setFrom ( 'javier@example.com' , 'Javier' );
	$mail->AddReplyTo('respuesta@example','Email respuesta');
	$mail->addAddress ( 'destinatario1@example.net' , 'Destinatario1' );
	$mail->addAddress ( 'destinatario2@example.net' , 'Destinatario2' );
	$mail->Subject = 'Practica 9.2';
	$mail->isHTML(true);
	$mail->addEmbeddedImage("house.jpg", "house","house",'base64','image/jpeg'); 
	$mail->Body = '<h2>Actividad 9.2 Email Básico con PHPMailer</h2>
	<h5>Crear un procedimiento PHP que envíe un email básico usando la clase phpmailer a partir de los siguientes requisitos.</h5> 
	<ul>
		<li>Cuerpo contendrá etiquetas HTML</li>
    	<li>Crear cuerpo alternativo en caso de no ser compatible con HTML</li>
    	<li>Incluir al menos 2 destinatarios</li>
    	<li>Incluir dirección de respuesta</li>
    	<li>Incluir nombre y dirección del remitente</li>
    	<li>Nombre del AsuntoIncluir un archivo adjunto</li>
    </ul>
	<a href="www.google.es">Click aqui</a>
    <img src="cid:house" alt="my-photo">';
	$mail->AltBody = 'Actividad 9.2 Email Básico con PHPMailer
	Crear un procedimiento PHP que envíe un email básico usando la clase phpmailer a partir de los siguientes requisitos.
	Cuerpo contendrá etiquetas HTML
	Crear cuerpo alternativo en caso de no ser compatible con HTML
	Incluir al menos 2 destinatarios
	Incluir dirección de respuesta
	Incluir nombre y dirección del remitente
	Nombre del AsuntoIncluir un archivo adjunto';
	$mail->addAttachment("archivo.txt");
	$mail->addAttachment("house.jpg");
	if( !$mail->send ()) {
		echo 'El mensaje no fue enviado.';
		echo ' Error de correo: ' . $mail->ErrorInfo;
	} else {
		echo 'Se ha enviado un mensaje.';
	}
 ?>
