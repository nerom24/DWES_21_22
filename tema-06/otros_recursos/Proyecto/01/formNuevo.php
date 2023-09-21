<?php 
	
	/*
    Fichero: FormNuevo.php
    Descripción: Muestra el formulario que permite añadir un nuevo usuario a la tabla
    Proyecto: Control de Sesiones Usuarios
    Tema : 06 - Control de Sesiones
    Curso: 2DAW - 18/19
    Autor: Juan Carlos
    Fecha: 5/12/2018
  */ 

	#include Funciones
  require_once("functions/controlsession.php");

  #seguridad
  sec_session_start();

  if (!isset($_SESSION['id'])) {

    header("location:login.php");
  }

  #include CLASS
  require_once("class/usuario.php");
  require_once("basedatos/conexionBD.php");
  
  $usuarios = new Usuarios();

  #Comprobamos perfil
  $usuarioSesion = $usuarios->getUserId($_SESSION['id']);
  if ($usuarioSesion->getIdPerfil() != 1) {

    header("location:index.php");
  
  }

  #include plantilla
  require_once("template/plantilla.php");

  $usuario = new Usuario();
  
  #Extrae de la base de datos los tipos de perfiles de usuario
  $perfiles = $usuarios->perfiles();


  if (isset($_SESSION['errores'])) {

    $errores = $_SESSION['errores'];
    $usuario = unserialize($_SESSION['usuario']);

    unset($_SESSION['errores']);
    unset($_SESSION['usuario']);
    
  }

  #Cargo la plantilla
  $plantilla = new plantilla("Formulario de Usuario");

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
      <?=$plantilla->formNuevoUsuario($usuario, $perfiles);?>
      </section> 
      <?=$plantilla->pie();?>
  </div>
  </div>
  <?=plantilla::scriptVarios();?>
  </body>
</html>
