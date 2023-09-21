<?php 
	
	include("classUsuarios.php");
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 34 - Tema 4 - POO", 
		"Añadir Usuario", 
		"Gestión de Usuarios POO",
		"Juan Carlos - 2ºDAW 18/19"
	);

	$usuarios = new usuarios();

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
		<?=$plantilla->FormNuevoUsuario($usuarios->getArrayTiposUsuarios());?>
	
		<?=$plantilla->showPie();?>

	</div>
	</div>

	<?=plantilla::scriptVarios();?>
	
</body>
</html>