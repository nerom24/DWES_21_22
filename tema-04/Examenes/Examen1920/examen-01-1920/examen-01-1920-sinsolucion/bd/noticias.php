<?php 
	/*	

		Noticia 1

	*/
	$id =1;
	$titulo = "PHP 7.0 ya está aquí";
	$extracto = "Llega la nueva versión de PHP con la primera release de la serie PHP 7, 	un popular lenguaje para desarrollo web ahora más maduro, rápido y potente.";
	$contenido = "
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing
	elit. Curabitur in nisl placerat, rutrum eros non, tincidunt 
	sem. Ut vehicula nulla vitae neque aliquet, id dictum magna
	bibendum. Donec iaculis nunc non eros commodo vestibulum.</p>

	<p>In viverra non ligula vitae convallis. In justo ligula, 
	rutrum ac commodo a, pulvinar nec lorem. Vestibulum sit amet 
	nibh sed libero scelerisque rhoncus. In et tempor neque, 
	sed porttitor est.</p>

	<p>Donec aliquet elit diam, in efficitur massa luctus vitae. 
	ellentesque nec nisi ligula. Integer vitae pulvinar quam.
	Pellentesque ex nisi, tempus non aliquam eget, egestas sed 
	augue. Integer nibh nisl, fringilla et nisl et, dignissim 
	dictum ante. Fusce tincidunt dui sapien, in feugiat urna 
	consectetur in. Nam orci lorem, volutpat eu laoreet nec, 
	tempus non odio.</p>";
	$autor = "Francisco Espejo DM";
	$imagen = "images/cafe.jpg";
	$seccion = "Tecnologías";
	$etiquetas = ["Opinión", "Programación"];
	$fecha = "05.11.2017";
	
	# Construyo la primera noticia
    $noticia1 = new Noticia(

		$id,
		$titulo,
        $extracto,
        $contenido,
        $autor,
        $fecha,
        $imagen,
		$seccion,
		$etiquetas
	);

	$id =2;
	$titulo = "Deporte en la playa";
	$imagen = "images/karate.jpg";
	$seccion = "Deportes";
	

	$noticia2 = new Noticia(

		$id,
		$titulo,
        $extracto,
        $contenido,
        $autor,
        $fecha,
        $imagen,
		$seccion,
		$etiquetas
	);
	
	$id =3;
	$titulo = "Viaje a Nigeria";
	$imagen = "images/africa.jpg";
	$seccion = "Viajes";

	$noticia3 = new Noticia(

		$id,
		$titulo,
        $extracto,
        $contenido,
        $autor,
        $fecha,
        $imagen,
		$seccion,
		$etiquetas
	);

	$id =4;
	$titulo = "Vida animal";
	$imagen = "images/tigre.jpg";

	$noticia4 = new Noticia(

		$id,
		$titulo,
        $extracto,
        $contenido,
        $autor,
        $fecha,
        $imagen,
		$seccion,
		$etiquetas
	);

	$id = 5;
	$titulo = "New York";
	$imagen = "images/city.jpg";

	$noticia4 = new Noticia(

		$id,
		$titulo,
        $extracto,
        $contenido,
        $autor,
        $fecha,
        $imagen,
		$seccion,
		$etiquetas
	);
 ?>