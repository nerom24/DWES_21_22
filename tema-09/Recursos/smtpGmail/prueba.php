<?
	include("class.phpmailer.php");
     
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "ssl://smtp.gmail.com";
	$mail->Timeout=30; //Dar tiempo al servidor para que te autentifique.
    $mail->Port = 465;
    $mail->Username = "nerom24@gmail.com";
    $mail->Password = "goMulera_24"; //aquí debes poner tu contraseña.
    $mail->From = "nerom24@gmail.com";
    $mail->FromName = "Juan Carlos";
    $mail->Subject = "Email de pruebas desde un script PHP";
    $mail->AltBody = "Hola, te doy mi nuevo numero\nxxxx.";
    $mail->MsgHTML("Hola, este email viene desde PHP. <span style='color:red'>Muchas Gracias</span>");
	$mail->AddAttachment("class.smtp.php");
	$mail->AddAddress("juancarlos.moreno@ieslosremedios.org", "Destinatario");
    $mail->IsHTML(true);
     
	$cont=0;
    while ( (!$mail->Send()) && ($cont<5) )
	{ 
		$mensaje= "Error: " . $mail->ErrorInfo;
		sleep(5);
		$cont++;
	}
	
	if ($cont==5) echo $mensaje;
	else echo "correcto";
	
	echo "hola";
	 
	if (mail("nerom24@gmail.com","asuntillo","Este es el cuerpo del mensaje")) echo "todo correcto";
	else echo "Todo incorrecto";

  
?>
