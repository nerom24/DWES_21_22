<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Tabla con números del 1 al 100</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Método GET</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
				<div class="form-group">
					<label class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
					 	<input type="text" class="form-control" name="nombre" placeholder="Nombre "/>
					</div>
				</div>
				<div class="form-group">
				 	<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				 	<div class="col-sm-10">
				 		<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
				  	<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				  	<div class="col-sm-10">
				    	<input type="password" class="form-control" name="clave" placeholder="Password">
				   	</div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				    <div class="checkbox">
				       	<label>
				        <input type="checkbox" name="recordar"> Recordar
				        </label>
				    </div>
				   	</div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				    <input type="submit" class="btn btn-default" value="Enviar" name="enviar" />

				    </div>
				</div>
			</form>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>

<?php 
	 if (isset($_REQUEST['enviar'])) { 
		$nombre=$_GET['nombre'];

		$email=$_GET['email'];
		$recordar=$_GET['recordar'];
		$clave=$_GET['clave'];
		// Panel de información
		echo '<div class="container">';
		echo '<div class="alert alert-info alert-dismissable">';
		echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  		echo '<strong>';
  		echo '<BR>';
		echo $nombre;
		echo '<BR>';
		echo $email;
		echo '<BR>';
		echo (boolean) $recordar;
		echo '<BR>';
		echo $clave;
  		echo '</strong><br>';
  		echo '<a href="index.php" class="alert-link">Volver</a>';
		echo '</div>';
	}

 ?> 