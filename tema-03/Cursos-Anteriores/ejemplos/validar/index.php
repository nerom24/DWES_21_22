<!DOCTYPE html>
<html lang="es">
<head>
	<?php 
	// Función con mensajes de error
	function alerta($pTexto) {
		?>
	 	<div class='alert alert-warning'>
	 	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Aviso</strong> <?php echo $pTexto; ?>
		</div>
		<?php
		}

	?>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Tabla con números del 1 al 100</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Formularios - Validación Datos</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			<?php  
				if (!empty($_POST['modulos']) && !empty($_POST['nombre'])) {
					$nombre = $_POST['nombre'];
					$modulos = $_POST['modulos'];
					print "Nombre: ".$nombre."<br />";
					foreach ($modulos as $modulo) {
						print "Modulo: ".$modulo."<br />";
					}
				} else {
				?>
				<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="form-group">
					<label for="nombre">Nombre:</label>
					<input type="text" class="form-control" placeholder="Nombre del Alumno" name="nombre"  value="<?php if (!empty ($_POST['nombre'])) echo $_POST['nombre'];?>" autofocus >
					<?php
						if (isset($_POST['enviar']) && empty($_POST['nombre']))
						alerta("Debe introducir Nombre");
					?>
				</div>
				<div class="form-group">
					<label for="nombre">Módulos:</label>				
					<div class="checkbox">
						<label><input type="checkbox" name="modulos[]" value="DWES" 
						<?php 
						if(isset($_POST['modulos']) && in_array("DWES",$_POST['modulos']))
						echo 'checked="checked"';
					?>>Desarrollo web en entorno servidor</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="modulos[]" value="DWEC"

						<?php 
						if(isset($_POST['modulos']) && in_array("DWEC",$_POST['modulos']))
						echo 'checked="checked"';
						?>
						>Desarrollo web en entorno cliente</label>
					</div>
					<?php
						if (isset($_POST['enviar']) && empty($_POST['modulos']))
						alerta("Debe escoger al menos un módulo");
					?>
				</div>
				<input type="reset" class="btn btn-default" value="Borrar" />
				<input type="submit" class="btn btn-default" value="Enviar" name="enviar" />
				</form>
				<?php }
			 ?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>