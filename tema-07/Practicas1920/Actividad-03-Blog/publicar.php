<?php 
	include 'imagen.model.php';
	include 'noticia.entidad.php';
	include 'fichero.model.php';
	$imagen = new Imagen($_FILES['imagen']);
	if ($imagen->valFormato() && $imagen->valResolucion() && $imagen->valTamano()) {
		$imagen->moverImagen();
		$noticia = new Noticia(
			$_POST['titulo'], 
			$_POST['fecha'], 
			$_POST['autor'], 
			$_POST['tema'], 
			$_POST['contenido'], 
			$_FILES['imagen']['name']
		);
		$fichero = new Fichero ("noticias.csv");
		$fichero->registrarNoticia($noticia);
		header('Location: index.php');	
	} else {
		header('Location: index.php');
	}
	
 ?>