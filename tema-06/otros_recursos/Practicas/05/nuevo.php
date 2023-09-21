<?php
	/**
	* 	@nombre: nuevo.php 
	* 	@descripción: añade un objeto al array a partir de los datos del formulario
	* 	@post: datos del formualario
	**/
	
	include ("classUsuarios.php");
	include("functions.php");

	session_start();

	if (!isset($_SESSION['indUsuario'])) {

		header('location: login.php');
	}


	$usuarios = $_SESSION['arrayUsuarios'];
	
	//creamos un objeto tipo usuario con los valores POST del formulario
	$usuario = new usuario (
		text_input($_POST['usuario']),
		text_input($_POST['email']),
		text_input($_POST['tipo']),
		text_input($_POST['clave'])
	);

	//validamos el nombre de usuario
	$key = $usuarios->valUsuario($usuario->getUsuario());
	$key2 = $usuarios->valEmail($usuario->getEmail());
	
	//Comprobar existencia de usuario
	if($key !== false) {
		echo '	<script language="javascript">
					window.location = "formNuevo.php";
					alert("Nombre usuario existente");
				</script>
			'; 
	} 

	else if($key2 !== false) {
		echo '	<script language="javascript">
					window.location = "formNuevo.php";
					alert("Email existente");
				</script>
			'; 
	} else {
		
		$usuarios->insertar($usuario);
		header('location: acceso.php');
	}
?>
