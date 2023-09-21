<?php 

require_once("class/noticia.php");
require_once("class/arrayObjetosNoticia.php");
require_once("bd/noticias.php");

# Creo los arry de secciones y etiquetas
$secciones = noticia::secciones(); 
$etiquetas = noticia::etiquetas();

# Creo el array de objetos de tipo noticias
$noticias = new ArrayObjetosNoticia();

# Asigno dos objetos de tipo noticia al array
$noticias->insertar($noticia1);
$noticias->insertar($noticia2);
$noticias->insertar($noticia3);
$noticias->insertar($noticia4);



$idNoticia = $noticias->siguienteIdNoticia();
$etiquetas_seleccion = array();
foreach ($_POST['etiqueta'] as $valor) {
    $etiquetas_seleccion[] = $etiquetas[$valor];
}


$nuevo_noticia = new noticia(
    $idNoticia,
    $_POST["titulo"],
    $_POST["extracto"],
    $_POST["contenido"],
    $_POST["autor"],
    $_POST["fecha"],
    $_POST["imagen"],
    $secciones[$_POST["seccion"]],
    $etiquetas_seleccion

);

$noticias->insertar($nuevo_noticia);
require("template/adminNoticias.php");

?>