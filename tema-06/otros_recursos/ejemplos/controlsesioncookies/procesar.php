<?php
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	echo $usuario;
	echo $clave;

	if ($clave=='1234') {
		setcookie('control', '1234', time() + 300000, '/', 'localhost');
		header('Location: correcto.php');
	}

	else 
		header('Location: error.php');
?>
