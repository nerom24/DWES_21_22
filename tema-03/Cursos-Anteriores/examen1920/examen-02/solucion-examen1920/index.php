<?php 
  # Incluimos la librería de funciones para tabla
  require_once("libs/funcionesTabla.php");

  # Generamos la tabla libros con los valores
  $tabla = generarTabla();
 
  # Generamos el array con los campos de la tabla
  $cabecera = array_keys($tabla[0]);

  # Cargamos plantilla 
  require_once('template/usuarios.php');

?>
