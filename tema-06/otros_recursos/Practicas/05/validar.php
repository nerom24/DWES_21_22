<?php 
	/*
		Práctica: 05 - Gestion de Sesiones
		Tema: 05 Control de Sesiones
		Fichero: validar.php

	*/ 

	include("plantilla.php");
	include("classUsuarios.php");
	include("functions.php"); 

	$email = text_input($_POST['email']);
	$clave = text_input($_POST['clave']);

	$usuarios = new usuarios();
	$usuarios->loadUsuarios();

	$errores = array();

	$key1 = $usuarios->valEmail($email);

	if ($key1 === false) {

		$errores[] = "Error: Email no validado";
	}

	$key2 = $usuarios->valClave($clave);

	if ($key2 === false) {

		$errores[] = "Error: Password no validado";
	}

	if ($key1 !== $key2) {

		$errores[] = "Error: Email no se corresponde con la clave";
	}

	if (empty($errores)) {

		session_start();
		
		$_SESSION['indUsuario'] = $key1;

		$_SESSION['arrayUsuarios'] = new usuarios();
		$_SESSION['arrayUsuarios']->loadUsuarios();

		

		if(isset($_POST['recordar'])){
			setcookie("control",$key1, time()+84300);
		}else{
			setcookie("control",$key1, time()-3600);
		}
		header('Location: acceso.php');

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
			<table class="table">
				<legend>Parte de Errores</legend>
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Error</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		foreach ($errores as $key => $value) {
			  		echo '<tr>';
			  		echo '<td scope="row">'. $key . '</td>';
			  		echo '<td>'. $value . '</td>';
			  		echo '</tr>';
			  		} 
			  	?>
			  </tbody>
			</table>

			</article>
			<a href="login.php" class="btn btn-primary" role="button" aria-pressed="true">Login</a>
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