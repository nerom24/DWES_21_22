<?php 
	
	$agenda = array(
		"MCD" => array("Manuel Cruz Doblas", "956321741"),
		"ATV" => array("Antonio Tamayo", "654123987"),
		"JSI" => array("Jose Manuel Iglesias","987654321"),
		"JCJ" => array("Jose Canto","963852741"),
		"DRF" => array("Daniel Rubio","987325698")
	);

	$user = $_POST["user"];

	$comp = array_key_exists($user,$agenda);
	if($comp == false) {
		echo '<script language="javascript">
				alert("Usuario no existía");
				window.location = "borrar.php";
		</script>';
	} else {
		unset($agenda[$user]);
	}
	
	asort($agenda);

	$numReg = count($agenda);

	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Plantilla Básica con Bootstrap</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1 class="text-muted">Tema 03 - DWES</h1>
					<h3>Practica 3 - Agenda de contactos</h3>
				</hgroup>
		</header>
		<nav>
			<ul class="nav">
			  <li class="nav-item">
			    <a class="nav-link active" href="index.php">Inicio</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="formNuevo.php">Nuevo</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="formActualizar.php">Actualizar</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="formBuscar.php">Buscar</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active" href="formEliminar.php">Eliminar</a>
			  </li>
			</ul>
		</nav>
		<section>
			<article>
				<form method="get">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Nombre</th>
								<th>Telefono</th>
							</tr>
						</thead>
						<tbody>
							<?php 
						 		foreach ($agenda as $usuario=>$dato) {
							 		echo "<tr>";
							 		echo "<td>";
							 		echo $usuario;
							 		echo "</td>";
							 		foreach ($dato as $dato) {
							 			echo "<td>";
							 			echo "$dato";
							 			echo "</td>";
							 		}
									echo "</tr>";
						 		}

						 		// Mostrar número de contactos
						 		echo "<tr><td colspan='3'>";
						 		echo "Contactos: ";
						 		echo $numReg;
						 		echo "</td></tr>";
							?>
						</tbody>
					</table>
				</form>
			</article>
		</section>
		<br>
		<hr>
		<footer>
			<p>&copy; DWES - Juan Carlos Moreno - 2º DAW - Curso 17/18</p>
		</footer>
	</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>