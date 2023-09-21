<?php 
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	session_start();

	try {

		$mail = new PHPMailer(true);
		$mail->CharSet = "UTF-8";
		$mail->Encoding = "quoted-printable";
		
		$mail->SMTPDebug = false;
		$mail->do_debug = 0;
		$mail->isSMTP(); 

		
		//Server settings smtp gmail
		//Nos vamos a el perfil de la cuenta de gmail
		//Activamos la opción de seguridad autentificación a 2 pasos
		//Generamos una contraseña Temporal
		//Dicha contraseña la pegamos en la propiedad Password
		 
		$mail->Username = 'nerom24@gmail.com';                 
		//$mail->Password = 'fvkphrcuunqfvemv'; 
		$mail->Password = 'ipinjwdglpjulmqr';   

    	//$mail->SMTPDebug = 2; 
    	$mail->SMTPSecure = 'tls'; 
    	$mail->Host = 'smtp.gmail.com'; 
    	$mail->Port = 587;                               
    	                                     
    	$mail->SMTPAuth = true;                                  
    	                           

		$destinatario = $_POST['destinatario'];
		$remitente    = $_POST['remitente'];
		$asunto       = $_POST['asunto'];
		$mensaje      = $_POST['mensaje'];
		
		# Si se han enviado archivos los cargamos

		if (is_uploaded_file($_FILES['archivo']['tmp_name'][0])) {
			 
			# Cuento los archivos que se han subido
		 	$num_archivos = count($_FILES['archivo']['tmp_name']);
			 
			 for ($i=0; $i<$num_archivos; $i++ )  {
		 		if (is_uploaded_file($_FILES['archivo']['tmp_name'][$i])) {
		 			
		 			# Adjuntamos el archivo al correo
					 $mail->addAttachment($_FILES['archivo']['tmp_name'][$i], 
					 					  $_FILES['archivo']['name'][$i]);
				}
			}
		} 
		
		# Código en caso de solo aceptar un archivo
		
		//  if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
		//  
		//  		# Adjuntamos el archivo al correo
		//  		$mail->addAttachment($_FILES['archivo']['tmp_name'], 
		//                               $_FILES['archivo']['name']);
		//  }

		

		$mail->setFrom ( $destinatario , '<'.$destinatario.'>' ); 
		//$mail->AddReplyTo($remitente, '<'.$remitente.'>'); 
		$mail->addAddress ( $destinatario , '<'.$destinatario.'>' ); 
		
		$mail->Subject = $asunto;
		$mail->isHTML(true);

		//con imagen en el curpo
		//$mail->AddEmbeddedImage("imagenes\bol.jpg","bol","imagenes\bol.jpg",'base64','image/jpeg' );

		$mail->Body = "<b>".$mensaje."</b>";

		$mail->send(); 
		
		$_SESSION['mensaje'] ='El mensaje enviado con éxito. ' ;

	} 	catch (Exception $e) {
    
    	$_SESSION['mensaje']='Message could not be sent. Mailer Error: '. $mail->ErrorInfo;

	}

	header("location:index.php");
	

?>

