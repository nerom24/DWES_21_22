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

	#includes CLASES
  require_once("../class/usuario.php");
  require_once("../basedatos/conexionBD.php");

  #include Template
  require_once("../template/plantilla.php");
  
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
      <?=$plantilla->menu();?>
      <!-- Muestra el contenido de la página -->
      <section> 
      <!-- Formulario para añadir nuevo registro -->
      <?=$plantilla->formNuevoUsuario();?>
      </section> 
      <?=$plantilla->pie();?>
  </div>
  </div>
  <?=plantilla::scriptVarios();?>
  </body>
</html>
