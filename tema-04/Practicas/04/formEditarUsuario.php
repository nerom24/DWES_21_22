<?php 

	include("classUsuarios.php");
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 44 - Tema 4 - POO", 
		"Editar Usuario", 
		"Gestión de Usuarios POO",
		"Juan Carlos - 2ºDAW 18/19"
	);

	#Se recoge la variable $key de tipo GET
	$key = $_GET['key'];

	$usuarios = new usuarios();
	$usuarios->loadUsuarios();
	$tipos = $usuarios->getArrayTiposUsuarios();

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

		<!-- Mostrar Formulario Añadir Usuario -->
		<?=$plantilla->FormEditarUsuario($key, $usuario, $tipos);?>
	
		<?=$plantilla->showPie();?>

	</div>
	</div>

	<?=plantilla::scriptVarios();?>
	
</body>
</html>