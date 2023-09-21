<?php 
	/*
		Proyecto: Control de Sesiones Usuarios
		Tema : 06 - Control de Sesiones
		Curso: 2DAW - 18/19
		Descripción: Control de Sesiones para el acceso a la gestión usuarios
		Autor: Juan Carlos
		Fecha: 5/12/2018
	*/
		
	
	#include Funciones
	require_once("functions/controlsession.php");

	#Seguridad

	sec_session_start();

	if (!isset($_SESSION['id'])) {

		header("location:login.php");
	}
	
	#includes CLASES
	require_once("class/usuario.php");
	require_once("basedatos/conexionBD.php");

	#include Template
	require_once("template/plantilla.php");
	
	

	#Cargo la plantilla
	$plantilla = new plantilla("Página Principal");

	#Conectamos a la base de  datos bdusuarios
	#Creamos un objeto de la clase usuarios 
	$usuarios= new Usuarios();

	#Posible criterio de ordenación
	$ordenar = 'id';
	if (isset($_GET['criterio'])) {

		$ordenar = $_GET['criterio'];
	}

	#Obtengo el resultado de la consulta select * from usuarios
	$usuarios->setUsuarios($ordenar);

	#obtengo el objeto usuario a partir del id
	$usuario = $usuarios->getUserId($_SESSION['id']);

	#obtengo el perfil de usuario
	$idPerfil = $usuario->getIdPerfil();

	
?>

<!DOCTYPE html>
  <html lang="es">
  <?=$plantilla->head();?>
  <body>
  <div class="container">
      <?=$plantilla->cabecera();?>
      <!-- Especificar main-menu() --> 
      <?=$plantilla->menu($usuario);?>
      <!-- Muestra el contenido de la página -->
      <section> 
        <table class="table table-hover">
            <thead>
                <!-- Muestra la cabecera de la tabla cursos -->
                <?php $usuarios->cabTablaUsuarios(); ?>
            </thead>
            <tbody>
                <?php
                    #Muestra todos los cursos
                    $usuarios->mostrarUsuarios($idPerfil);
                    #Mostrar número de elementos
                    $usuarios->mostrarNumElementos();
                ?>
            </tbody>
        </table>
      </section>
      <?=$plantilla->pie();?>
  </div>
  </div>
  <?=plantilla::scriptVarios();?>
  </body>
  </html>

