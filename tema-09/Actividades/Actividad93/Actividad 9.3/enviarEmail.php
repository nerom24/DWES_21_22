<?php 
	include "myphpmailer.php";
	session_start();
	
	if (isset($_REQUEST['btnBorrar'])) {
		unset($_SESSION['correo']);
		unset($_SESSION['respuesta']);
		unset($_SESSION['CC']);
		unset($_SESSION['BCC']);
		unset($_SESSION['archivos']);
		session_destroy();
		header("location: index.php");
	}else{
		$contenidoEmail =  $_SESSION["correo"][0];
		$mail->CharSet = "UTF-8";
		$mail->Encoding = "quoted-printable";
		$mail = new MyPHPMailer;
		$mail->setFrom ('javier@example.com','Actividad 9.3' );
		$mail->anadircorreos( $_SESSION["correo"][1]);
		$mail->Subject = $_SESSION["correo"][2];
		$mail->isHTML(true);
		$mail->Body = $contenidoEmail;
		$mail->anadirImagenes($_SESSION['imagenes']["name"]);
		$mail->transformarTexto($_SESSION["correo"][0]);
		if (!empty($_SESSION['respuesta'])) $mail->AddReplyTo($_SESSION['respuesta'],'Emailrespuesta');
		if (!empty($_SESSION['CC'])) $mail->anadirCC($_SESSION['CC']);
		if (!empty($_SESSION['BCC'])) $mail->anadirBCC($_SESSION['BCC']);
		$mail->anadirArchivos($_SESSION['archivos']["name"]);
		if (!$mail->send()) {
 			setcookie("error",' Error de correo: '.$mail->errorInfo,time()+360);
		}else{
			setcookie("error","Se enviado el correo",time()+360);
		}
		unset($_SESSION['correo']);
		unset($_SESSION['respuesta']);
		unset($_SESSION['CC']);
		unset($_SESSION['BCC']);
		unset($_SESSION['archivos']);
		session_destroy();
		header("location: index.php");
	}


 ?>
