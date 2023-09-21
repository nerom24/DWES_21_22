<?php 
	/*	

		Noticia 1

	*/
	$titulo = "PHP 7.0 ya está aquí";
	$copete = "Llega la nueva versión de PHP con la primera release de la serie PHP 7, 	un popular lenguaje para desarrollo web ahora más maduro, rápido y potente.";
	$texto = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing
	 elit. Curabitur in nisl placerat, rutrum eros non, tincidunt 
	 sem. Ut vehicula nulla vitae neque aliquet, id dictum magna
	  bibendum. Donec iaculis nunc non eros commodo vestibulum.</p>
	 <p>In viverra non ligula vitae convallis. In justo ligula, rutrum ac commodo a, pulvinar nec lorem. Vestibulum sit amet nibh sed libero scelerisque rhoncus. In et tempor neque, sed porttitor est.

	Donec aliquet elit diam, in efficitur massa luctus vitae. 
	Pellentesque nec nisi ligula. Integer vitae pulvinar quam.
	 Pellentesque ex nisi, tempus non aliquam eget, egestas sed 
	 augue. Integer nibh nisl, fringilla et nisl et, dignissim 
	 dictum ante. Fusce tincidunt dui sapien, in feugiat urna 
	 consectetur in. Nam orci lorem, volutpat eu laoreet nec, 
	 tempus non odio.</p>";
	$autor = "Francisco Espejo DM";
	$imagen = "images/cafe.jpg";
	$epigrafe = "Imagen PHP";
	$fecha = "05.11.2017 - 11:25h";
	
	# Construyo la primera noticia
    $noticia1 = new Noticia(

        $titulo,
        $copete,
        $texto,
        $autor,
        $fecha,
        $imagen,
        $epigrafe
	);
	$titulo = "Deporte en la playa";
	$imagen = "images/karate.jpg";

	$noticia2 = new Noticia(

        $titulo,
        $copete,
        $texto,
        $autor,
        $fecha,
        $imagen,
        $epigrafe
	);
	$titulo = "Viaje a Nigeria";
	$imagen = "images/africa.jpg";

	$noticia3 = new Noticia(

        $titulo,
        $copete,
        $texto,
        $autor,
        $fecha,
        $imagen,
        $epigrafe
	);

	$titulo = "Vida animal";
	$imagen = "images/tigre.jpg";

	$noticia3 = new Noticia(

        $titulo,
        $copete,
        $texto,
        $autor,
        $fecha,
        $imagen,
        $epigrafe
	);

	$titulo = "New York";
	$imagen = "images/city.jpg";

	$noticia4 = new Noticia(

        $titulo,
        $copete,
        $texto,
        $autor,
        $fecha,
        $imagen,
        $epigrafe
	);
 ?>