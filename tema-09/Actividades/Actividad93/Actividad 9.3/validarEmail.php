<?php
	session_start();
	function moverArchivos($arrayDatos,$mode){
		if($mode == 0){
			$mode =  "archivos/";
		}else{
			$mode = "imagenes/";
		}
		for ($i=0; $i < count($arrayDatos['name']) ; $i++) { 
			if( is_uploaded_file($arrayDatos['tmp_name'][$i])){
				$dir = $mode.$arrayDatos['name'][$i];
				move_uploaded_file($arrayDatos['tmp_name'][$i],$dir);
			}
		}	
	}
	function comprobarTamano($ficheros)
	 {
	 	$maxTamano = 25165824;
	 	$tamano = 0;
	 	for ($i=0; $i < count($ficheros['name']) ; $i++) { 
	 		$tamano .= $ficheros['size'][$i];
	 	}
	 	if ($maxTamano > $tamano) {
	 		return true;
	 	}
	 	return false;
	 } 
	
	if (empty($_POST["editor1"]) || comprobarTamano($_FILES['inputFile']) == false ) {
		setcookie("error","No hay texto o superas el tamaño de los archivos",time()+360);
		header("location: index.php");
	}else{
		$contenidoEmail = $_POST['editor1'];
		$destinatario = $_POST['inputEmail'];
		$asunto = $_POST['inputAsunto'];
		$arrayCorreo = array($contenidoEmail,$destinatario,$asunto); 
		if (isset($_POST['inputRespuesta'])) {
			$_SESSION['respuesta'] = $_POST['inputRespuesta'];
		}
		if (isset($_POST['inputCC'])) {
			$_SESSION['CC'] = $_POST['inputCC'];
		}
		if (isset($_POST["inputBCC"])) {
			$_SESSION['BCC'] = $_POST['inputBCC'];
		}
		if (isset($_FILES["inputFile"])) {
			$_SESSION['archivos'] = $_FILES['inputFile'];
		}
		if (isset($_FILES["inputImagen"])) {
			$_SESSION['imagenes'] = $_FILES['inputImagen'];
		}
		$_SESSION['correo'] = $arrayCorreo;
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Enviar Email</title>
</head>
<body>
	<div class="container">
	<header class="jumbotron">
			<hgroup>
				<h1>Actividad 9.2</h1>
				<h2>Javier holgado Barreno</h2>
			</hgroup>
	</header>
	<nav>
	
	</nav>
	<section>
		<article>
			<h3>Contenido del Email</h3>
			<ul>
				<li>Direccion: <?php echo $_SESSION['correo'][1] ?></li>
				<li>Asunto:  <?php echo $_SESSION['correo'][2] ?></li>
				<?php 
					if (!empty($_SESSION['respuesta'])) echo "<li>Respuesta: ". $_SESSION['respuesta']. "</li>";
					if (!empty($_SESSION['CC'])) echo "<li>CC: ". $_SESSION['CC']. "</li>";
					if (!empty($_SESSION['BCC'])) echo "<li>BCC: ". $_SESSION['BCC']. "</li>";
					if (!empty($_SESSION['archivos']["name"][0])){
						echo "<li>Archivos Adjuntos: <ul>";
						moverArchivos($_SESSION["archivos"],0);
						for ($i=0; $i < count($_SESSION["archivos"]['name']); $i++) { 
							echo "<li>". $_SESSION["archivos"]['name'][$i]. "</li>";
						}
						echo "</ul></li>";
					} 
				?>
			</ul>
			<div class="container" style="border: 1px solid;">
				<?php 
					echo $_SESSION['correo'][0];
					if (!empty($_SESSION['imagenes']["name"][0])){
						moverArchivos($_SESSION["imagenes"],1);
						for ($i=0; $i < count($_SESSION["imagenes"]['name']); $i++) { 
							echo "<img src='imagenes/".$_SESSION["imagenes"]['name'][$i]."'>";
						}
						echo "</ul></li>";
					}
				?>

			</div>
			<form action="enviarEmail.php" method="POST">
				<br>
				<div class="btn-group pull-right">
					<a href="index.php" class="btn btn-danger">Cancelar</a>
					<button type="submit" class="btn btn-danger" name="btnBorrar">Borrar</button>		
					<button type="submit" class="btn btn-primary">Aceptar</button>
				</div>
			</form>
		</article>
	</section>
</body>
</html>
