<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eliminar Usuarios</title>
</head>
<body>
	<?php 
	$usuariosSelect=($_POST['check']);
	print_r($usuariosSelect);
	print_r($_SESSION);
	$aUsuarios=$_SESSION['usuarios'];
	foreach ($usuariosSelect as $uEliminar) {
		
		echo "Se va a eliminar $uEliminar";
		unset ($aUsuarios[$uEliminar]);
	}
	$_SESSION['usuarios']=$aUsuarios;
	?>	
	<p>Usuarios Eliminados</p>
	<a href="index">Volver</a>
</body>
</html>
