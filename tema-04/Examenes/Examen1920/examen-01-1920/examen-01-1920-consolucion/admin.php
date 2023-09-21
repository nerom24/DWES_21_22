<?php 
    require_once("class/noticia.php");
    require_once("class/arrayObjetosNoticia.php");
	require_once("bd/noticias.php");


    # Creo el array de objetos de tipo noticias
    $noticias = new ArrayObjetosNoticia();

    # Asigno dos objetos de tipo noticia al array
    $noticias->insertar($noticia1);
    $noticias->insertar($noticia2);
    $noticias->insertar($noticia3);
    $noticias->insertar($noticia4);

    require_once("template/adminNoticias.php");

?>

