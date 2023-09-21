<?php 
    include_once('lib/funciones_libros.php');
    
    $libros = generar_tabla_libros();
    
    include_once('template/libros.php');

?>

