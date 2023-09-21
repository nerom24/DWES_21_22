<?php 
	/*
		Práctica: 01 - Control de Sesiones
		Tema: 05 Control de Sesiones
		Fecha: 15/11/2017
		Fichero: login.php
	*/ 

	include("plantilla.php");
	include("classUsuarios.php");

	$usuario = new usuario();
	
	$usuarios = new usuarios();
	$usuarios->loadUsuarios();

	//Compruebo que existe la cookie de control
	if (isset($_COOKIE['control'])) {
		
		$key=$_COOKIE['control'];
		$usuario = $usuarios->getUsuario($key);

	}
	

?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	<?php headPlantilla(); ?>

</head>
<body>
	<div class="container"> 
		<header>
			<?php headerPlantilla(); ?>
		</header>
		<!-- Menú de Navegación  -->
		
		<?php menuPlantilla(); ?>
		
		<section>
			<article>
			<form action="validar.php" method="POST">
			  <legend>Login de Usuario</legend>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
				value = "<?=$usuario->getEmail() ?>"
			    >
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="clave" id="exampleInputPassword1" placeholder="Password"
				value = "<?=$usuario->getClave() ?>"
			    >
			  </div>
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input" name="recordar" value=1>
			      Check me out
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Login</button>
			</form>
			</article>
		</section>
		<footer>
			<?php footerPlantilla(); ?>
		</footer>
	</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php footerJquery(); ?>
</body>
</html>