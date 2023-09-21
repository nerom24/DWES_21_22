<?php
	require("usuarios.php");
	session_start();
	
	// Se inicia sesión	
	//$_SESION["usuarios"]

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Añadir Usuario
		if (isset($_REQUEST['anadir'])) {
			$nuevoUsuario=new usuario($_POST['usuario'], $_POST['email'], $_POST['tipo'], $_POST['clave']);
		 	$_SESSION["usuarios"]->insertaUsuario($nuevoUsuario); 

			} 
		if (isset($_REQUEST['suprimir'])) {
		 	$_SESSION["usuarios"]->eliminarUsuario($_POST['usuario']);
			}
		
		if (isset($_REQUEST['actualizar'])) {
		 	$_SESSION["usuarios"]->actualizarUsuario($_POST['usuario'], $_POST['email'], $_POST['tipo'], $_POST['clave'] );
			}
				
		// Eliminar Usuarios
		if (isset($_REQUEST['eliminarUser']) && (!empty($_POST['check']))){
			$_SESSION["usuarios"]->eliminarUsuarios($_POST['check']);
			
		} 
		
		// La selección de todos los usuarios se realiza en el checbox del formulario
		// No selecciono ningún usuario
		if (isset($_REQUEST['allNoSeleccion']) && (!empty($_POST['check']))){
			if (!empty($_POST['check']))
			$_POST['check']=$_SESSION["usuarios"]->allNoSeleccion($_POST['check']);
		}
		
	}
	else {
		// Inicializo la agenda con 3 usuarios
		$_SESSION["usuarios"]=new agenda();
		// inicializo el array de usuarios
		$nuevoUsuario = new usuario('Nerom24', 'nerom24@gmail.com', 'Admin', 'm122121');
		$_SESSION["usuarios"]->insertaUsuario($nuevoUsuario);
		$nuevoUsuario = new usuario('Julia23', 'julia23@gmail.com', 'Admin', 'm122121');
		$_SESSION["usuarios"]->insertaUsuario($nuevoUsuario);
		$nuevoUsuario = new usuario('JoseAntonio', 'joseantonio@gmail.com', 'Admin', 'm122121');
		$_SESSION["usuarios"]->insertaUsuario($nuevoUsuario);
		
		 
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Agenda de Contactos POO</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Gestión Usuarios - POO</H1>
					<H2>Tema 04 Programación Orientada a Objetos PHP</H2>
				</hgroup>
		</header>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<nav>
		<!-- Especificar main-menu() -->
		<div class="btn-group" role="group" aria-label="...">
					<input type="submit" class="btn btn-default" value="Eliminar" name="eliminarUser" /> 
					<input type="submit" class="btn btn-default" value="Seleccionar Todos" name="allSeleccion" /> 
					<input type="submit" class="btn btn-default" value="Borrar Selección" name="allNoSeleccion" />   
				</div>
		<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal">			
			<span class="glyphicon glyphicon-option-vertical"></span>
		</button>
		</nav>
		<section>
			<article>
				<!-- 
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<input class="btn btn-default" type="submit" value="Nuevo" name="nuevo">
				</form> -->
				
				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				    <!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"> -->
					    <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Gestión Usuarios</h4>
					    </div>
				      	<div class="modal-body">
							<div class="form-group">
								<label for="usuario">Usuario:</label>
  								<input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario" autofocus>
							</div>
							<div class="form-group">
    							<label for="email">Email:</label>
    							<input type="email" class="form-control" name="email" placeholder="Correo electrónico">
  							</div>					
							
  							<div class="form-group">
  								<label for="tipo">Tipo Usuario:</label>
								<select class="form-control" name="tipo">
								    <option value="Administrador">Administrador</option> 
							   		<option value="Editor">Editor</option> 
									<option value="Colaborador">Colaborador</option>
									<option value="Visitante">Visitante</option> 
								</select>
							</div>
							<div class="form-group">
    							<label for="clave">Password:</label>
    							<input type="password" class="form-control" name="clave">
  							</div>
					    </div>
					    <div class="modal-footer">
					    <div class="btn-group" role="group" aria-label="...">
						    <input type="submit" class="btn btn-default" value="Añadir" name="anadir" />
						    <input type="submit" class="btn btn-default" value="Actualizar" name="actualizar" />
						    <input type="submit" class="btn btn-default" value="Suprimir" name="suprimir" />
						</div>
						<div class="btn-group" role="group" aria-label="...">
						    <input type="reset" class="btn btn-default" value="Borrar" />
						    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					    </div>
					    </div>
					<!--</form> -->
				    </div>
				  </div>
				</div>
				<!-- Fin del Modal -->
				<!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"> -->
				<?php 
					$_SESSION["usuarios"]->mostrarAgenda();
				?>
				<!--
				<div class="btn-group" role="group" aria-label="...">
					<input type="submit" class="btn btn-default" value="Eliminar" name="eliminarUser" /> 
					<input type="submit" class="btn btn-default" value="Seleccionar Todos" name="allSeleccion" /> 
					<input type="submit" class="btn btn-default" value="Borrar Selección" name="allNoSeleccion" />   
				</div> -->
				</form>
				
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>
