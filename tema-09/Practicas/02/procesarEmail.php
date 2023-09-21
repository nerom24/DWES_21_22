<?php 
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';


	try {

		$mail = new PHPMailer(true);;
		$mail->CharSet = "UTF-8";
		$mail->Encoding = "quoted-printable";

		
		//Server settings smtp sendinblue.com
    	$mail->SMTPDebug = 2;                                 
    	$mail->isSMTP();                                      
    	$mail->Host = 'smtp-relay.sendinblue.com';  
    	$mail->SMTPAuth = true;                     
   		$mail->Username = 'nerom24@gmail.com';                 
    	$mail->Password = 'y5Ff4MagDKz8HbsC';                           
    	/*$mail->SMTPSecure = 'tls';    */                       
    	$mail->Port = 587; 

		$destinatario = $_POST['destinatario'];
		$remitente    = $_POST['remitente'];
		$asunto       = $_POST['asunto'];
		$mensaje      = $_POST['mensaje'];
		$archivo      = $_FILES['archivo']['name'];

		$mail->setFrom ( $destinatario , '<'.$destinatario.'>' ); 
		$mail->AddReplyTo($remitente, '<'.$remitente.'>'); 
		$mail->addAddress ( $destinatario , '<'.$destinatario.'>' ); 
		$mail->addAttachment('archivos/'.$archivo);
		$mail->Subject = $asunto;
		$mail->isHTML(true);

		//con imagen en el curpo
		$mail->AddEmbeddedImage("imagenes\bol.jpg","bol","imagenes\bol.jpg",'base64','image/jpeg' );

		$mail->Body = "<b>".$mensaje."</b>";

		$mail->send(); 
		
		Echo 'El mensaje ha sido enviado. ' ;

	} 	catch (Exception $e) {
    
    	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

	}
	

?>

