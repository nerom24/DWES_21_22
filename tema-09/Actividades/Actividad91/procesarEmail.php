<?php 
	include 'alumno.model.php'; 
	if (isset($_POST['check'])) {
		$idalumnos = $_POST['check'];
		$idCorreos = implode(',',$idalumnos);
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Gestión Alumnos PDO</title>
</head>
<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_REQUEST['btnEnviar'])){
			$model = new AlumnoModel();
			$arraycorreos = array();
			$msg = $_POST['inputContenido'];
			$idCorreos = explode(',',$_POST['correo']);
			$asunto = $_POST['inputAsunto'];
			foreach ($idCorreos as $key => $idalumno) {
				array_push($arraycorreos,$model->obtenerCorreo($idalumno));
			}
			$To = implode(',',$arraycorreos);
			$msg = wordwrap($msg,70);
			$headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";
			if(mail($To,$asunto,$msg,$headers)){
				setcookie("correo","Correo enviado",time()+3600);
			}else{
				setcookie("correo","Se ha producido algun error",time()+3600);
			}
			header("Location: index.php");
		}
	}
 ?>
<body>
	<header class="jumbotron text-center">
            <h1>Actividad 9.1</h1>
            <h2>Tema 9</h2>
    </header>
	<div class="container" >
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			 <div class="form-group">
			    <label for="inputAsunto">Asunto</label>
			    <input type="text" class="form-control" name="inputAsunto" placeholder="asunto">
			  </div>
			  <div class="form-group">
			    <label for="inputContenido">Mensaje</label>
			    <textarea rows="5" cols="80" class="form-control" name="inputContenido"  placeholder="Escriba el Texto del Mensaje ..."></textarea>
			 <input type="hidden" name="correo" value="<?php echo $idCorreos ?>" >
			 <br>
			 <button class="btn btn-default"><a href="index.php">Volver</a>
			 </button>
			 <button type="reset" class="btn btn-default">Borrar
			 </button>
			 <button type="submit" class="btn btn-primary" name="btnEnviar">Aceptar
			 </button>
		</form>
	</div>
</body>
