<?php
	/**
	* 	@nombre: actualizar.php 
	* 	@descripción: actualiza los detalles de un objeto del array
	* 	@get: id - índice correspondiente al objeto que se desea editar
	*	@post: datos del formulario
	**/ 
	
	include ("classUsuarios.php");
	include("functions.php");

	$id = $_GET['id'];

	//creamos un objeto tipo usuario con los valores POST del formulario
	$usuario = new usuario (
		text_input($_POST['usuario']),
		text_input($_POST['email']),
		text_input($_POST['tipo']),
		text_input($_POST['clave'])
	);
	session_start();
	if (!isset($_SESSION['indUsuario'])) {

		header('location: login.php');
	}
	
	$usuarios = $_SESSION['arrayUsuarios'];

	//Validación del formulario

	$key = false;
	$key2 = false;
	
	//validamos el nombre de usuario solo si se ha modificado
	if ($usuario->getUsuario() != $usuarios->getUsuario($id)->getUsuario()){
		
		$key = $usuarios->valUsuario($usuario->getUsuario());
		//Comprobar existencia de usuario
		if($key !== false) {
			?>	<script language="javascript">
						window.location = "formActualizar.php?id=<?php echo $id ?>";
						alert("Nombre usuario existente");
				</script>
			<?php  
		} 
	}

	if ($usuario->getEmail() != $usuarios->getUsuario($id)->getEmail()){

		$key2 = $usuarios->valEmail($usuario->getEmail());
		
		if($key2 !== false) {
			?>	<script language="javascript">
						window.location = "formActualizar.php?id=<?php echo $id ?>";
						alert("Email existente");
				</script>
			<?php  
		} 

	}
	
	if ($key == false && $key2 == false) {
	
		$usuarios->actualizar($id, $usuario);
		header('location: acceso.php');

	}
	
?>
