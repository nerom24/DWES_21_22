<?php 
	
	/*
    Fichero: formRegistrar.php
    Descripción: Permite el registro de usuarios
    Proyecto: Control de Sesiones Usuarios
    Tema : 06 - Control de Sesiones
    Curso: 2DAW - 18/19
    Autor: Juan Carlos
    Fecha: 5/12/2018
  */ 

	#include Funciones
  require_once("functions/controlsession.php");

  #include CLASS
  require_once("class/usuario.php");
  require_once("basedatos/conexionBD.php");

  #include plantilla
  require_once("template/plantilla.php");

  sec_session_start();

  $usuario = new Usuario();

  if (isset($_SESSION['errores'])) {

    $errores = $_SESSION['errores'];
    $usuario = unserialize($_SESSION['usuario']);

    unset($_SESSION['errores']);
    unset($_SESSION['usuario']);
    
  }

  #Cargo la plantilla
  $plantilla = new plantilla("Registro de Usuarios");

?>

<!DOCTYPE html>
<html lang="es">
  <?=$plantilla->head();?>
  <body>
  <div class="container">
      <?=$plantilla->cabecera();?>
      <!-- Especificar main-menu() -->
      <!-- Muestra posibles errores -->
      <?php if (isset($errores)) {
        $plantilla->mostrarErrores($errores); 
      }
      ?>
      <!-- Formulario para añadir nuevo registro -->
      <?=$plantilla->formRegistroUsuario($usuario);?>
      </section> 
      <?=$plantilla->pie();?>
  </div>
  </div>
  <?=plantilla::scriptVarios();?>
  </body>
</html>
