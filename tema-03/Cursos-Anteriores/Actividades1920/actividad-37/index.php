<?php 
  # Incluimos la librería de funciones para tabla
  require_once("lib/funcionesTabla.php");

  # Generamos la tabla libros con los valores
  $tabla = generarTabla();
 
  # Generamos el array con los campos de la tabla
  $cabecera = array_keys($tabla[0]);

  # Cargamos plantilla de libros
  require_once('template/libros.php');

?>
