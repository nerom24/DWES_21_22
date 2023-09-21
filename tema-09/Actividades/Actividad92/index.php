<?php 
	require_once('phpmailer/class.phpmailer.php');
	$mail = new PHPMailer;
	$mail->CharSet = "UTF-8";
	$mail->Encoding = "quoted-printable";
	$mail->setFrom ( 'antonioatienza@gmail.com' , 'Antonio Atienza' );
	$mail->AddReplyTo('responder@gmail.com', 'Email respuesta');
	$mail->addAddress ( 'javier@gmail.com' , 'Javier Holgado' );
	$mail->addAddress ( 'antonio@gmail.com' , 'Antonio Ramirez' );
	$mail->Subject = 'Mensaje de PHPMailer' ;
	$mail->isHTML(true);
	$mail->addEmbeddedImage("google-pixel.png", "pixel", 'pixel', 'base64', 'image/png');
	$mail->Body =  '<span style="color: red;"><h1>Esto es un título h1</h1></span>
					<span style="text-decoration: underline;"><h2>Esto es un título h2</h2></span>
					<p>Esto es un párrafo</p>
					<h3>Lista ordenada</h3>
					<ol>
						<li>Elemento1</li>
						<li>Elemento2</li>
						<li>Elemento3</li>
					</ol>
					<img src="cid:pixel">
					<a href="https://www.google.es"></a>';
	$mail->AltBody = 'Esto es un titulo h1
					Esto es un título h2
					Esto es un párrafo
					Lista ordenada
						Elemento1
						Elemento2
						Elemento3' ;
	$mail->addAttachment ('hola.txt');
	$mail->addAttachment ('google-pixel.png');
	if (!$mail->send ()) {
		echo 'El mensaje no fue enviado. ' ;
		echo ' Error de correo: ' . $mail->ErrorInfo ;
	} else {
		echo ' Se ha enviado un mensaje. ' ;
	}

 ?>
