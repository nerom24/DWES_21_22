<?php 

include("functions.php");

//Limpiamos los campos llamando a la función anterior
$nombre = text_input($_POST['nombre']);
$apellidos=text_input($_POST['apellido']);
$email=text_input($_POST['email']);
$url=text_input($_POST['url']);
$edad=text_input($_POST['edad']);
$estudios=text_input($_POST['estudios']);
$user=text_input($_POST['user']);
$pass=text_input($_POST['pass']);

$usuarios[] = [
	'nombre' => $nombre,
	'apellidos' => $apellidos,
	'email' => $email,
	'url' => $url,
	'edad' => $edad,
	'estudios' => $estudios,
	'user' => $user,
	'pass' => $pass
];

// Arrays para guardar mensajes y errores:
$aErrores = array();

// Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
$patron_estudios = "/^[a-zA-Z0-9áéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
$patron_nomUsuario = "/^[a-zA-Z0-9\-_]{5,10}$/";
$patron_pass = "/^[a-zA-Z0-9\-_]+$/";

if( !empty($_POST) ) {

	//Validación Nombre
	if(empty($nombre)) {

		$aErrores[] = "Nombre está vacío.";
	} elseif (!preg_match($patron_texto, $nombre)) {
		
		$aErrores[] = "El nombre sólo puede contener letras y espacios";
	}


	//Validación Apellidos
	if(empty($apellidos)) {

		$aErrores[] = "Nombre está vacío.";
	} elseif (!preg_match($patron_texto, $apellidos)) {
		
		$aErrores[] = "Los apellidos sólo puede contener letras y espacios";
	}

	//Validación Estudios
	if(empty($estudios)) {

		$aErrores[] = "Nombre está vacío.";
	} elseif (!preg_match($patron_estudios, $estudios)) {
		
		$aErrores[] = "Estudios no permitidos";
	}

	//Validación Edad
	if(empty($edad)) {

		$aErrores[] = "El campo edad está vacío.";
	} elseif (!filter_var($edad, FILTER_VALIDATE_INT)) {
		
		$aErrores[] = "La Edad ha se ser un número";
	}

	//Validación Email
	if(empty($email)) {

		$aErrores[] = "El campo email está vacío.";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		$aErrores[] = "Email no válido";
	}

	//Validación Url
	if(empty($url)) {

		$aErrores[] = "El campo url está vacío.";
	} elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
		
		$aErrores[] = "URL no válido";
	}

	//Validación Usuario
	if(empty($user)) {

		$aErrores[] = "El campo usuario está vacío.";
	} elseif (!preg_match($patron_nomUsuario, $user)) {
		
		$aErrores[] = "Nombre de Usuario no válido";
	}

	//Validación Password
	if(empty($pass)) {

		$aErrores[] = "El campo Password está vacío.";
	} elseif (!preg_match($patron_pass, $pass)) {
		
		$aErrores[] = "Password no válido";
	}
} else {

	$aErrores[] = "ERROR: Formulario Vacío";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Actividad 3.4- Tema03 - DWES</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<!-- Títulos y subtítuos -->
					<h1 class="text-muted">Tema.03 - DWES</h1>
					<h3>Actividad 3.4 - Formularios con validación</h3>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<!-- Especificar Contenido -->
				<div class="table-responsive">
					<table class="table table-hover">
						<?php 
							if (!empty($aErrores)) {
								tablaErrores($aErrores);
							} else {
								tablaUsuarios($usuarios);
							}
						 ?>
					</table>
				</div>
			<a class="btn btn-primary" href="index.php" role="button">Volver</a>
			</article>
		</section>
		<footer>
			<hr>
			<p>&copy; DWES - Juan Carlos Moreno - 2º DAW - Curso 17/18</p>
		</footer>
	</div>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>