<?php 

	include("classUsuarios.php");
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 44 - Tema 4 - POO", 
		"Mostrar Usuario", 
		"Gestión de Usuarios POO",
		"Juan Carlos - 2ºDAW 18/19"
	);

	#Se recoge la variable $key de tipo GET
	$key = $_GET['key'];

	$usuarios = new usuarios();
	$usuarios->loadUsuarios();

	#Extraigo el Objeto usuario que voy a editar
	$usuario = $usuarios->getUsuario($key);


?>
<!DOCTYPE html>
<html lang="es">

<?=$plantilla->headPlantilla();?>

<body>
	<div class="container">

		<?=$plantilla->showCabecera();?>
			
		<!-- Especificar main-menu() -->
		<?=$plantilla->menuPlantilla();?>

		<!-- Mostrar Formulario Con los datos -->
		<?=$plantilla->FormMostrarUsuario($usuario);?>
	
		<?=$plantilla->showPie();?>

	</div>
	</div>

	<?=plantilla::scriptVarios();?>
	
</body>
</html>