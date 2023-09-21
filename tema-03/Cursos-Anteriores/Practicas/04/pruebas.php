<?php

	$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
	$patron_usuario = "/^[a-zA-Z0-9\-_]{5,10}$/";
	$patron_pass = "/^[a-zA-Z0-9\-_]+$/";

	$usuario ="Mulera_24-";


	$aErrores = array();
	
	//Validación Nombre
	if(empty($usuario)) {

		$aErrores[] = "Usuario está vacío.";
	} elseif (!preg_match($patron_usuario, $usuario)) {
		
		$aErrores[] = "Error en el nombre de usuario";
	}

	print_r($aErrores);

?>
