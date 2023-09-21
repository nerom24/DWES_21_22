<?php 
	/*
		Fichero: login.php
		Descripcion: Muestra el formulario para identificar o registrar usuario
		Proyecto: Control de Sesiones Usuarios
		Tema : 06 - Control de Sesiones
		Curso: 2DAW - 18/19
		Descripción: Control de Sesiones para el acceso a la gestión usuarios
		Autor: Juan Carlos
		Fecha: 5/12/2018
	*/
		
	
	
	#include Funciones
	require_once("functions/controlsession.php");

	#seguridad
	sec_session_start();

	#include Template
	require_once("template/plantilla.php");

	$email = null;
	$password = null;

	

	if (isset($_SESSION['errores'])) {

		$errores = $_SESSION['errores'];
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];

		unset($_SESSION['errores']);
		unset($_SESSION['email']);
		unset($_SESSION['password']);
	}
	
	#Cargo la plantilla
	$plantilla = new plantilla("Login de Usuario");
	
?>

<!DOCTYPE html>
<html lang="es">
  <?=$plantilla->head();?>
  <body>
  <div class="container">
      <?=$plantilla->cabecera();?>
      <!-- Muestra posibles errores -->
      <?php if (isset($errores)) {
        $plantilla->mostrarErrores($errores); 
      }
      ?>
      <!-- Formulario para añadir nuevo registro -->
      <?=$plantilla->formLogin($email, $password);?>
      </section> 
      <?=$plantilla->pie();?>
  </div>
  </div>
  <?=plantilla::scriptVarios();?>
  </body>
</html>
