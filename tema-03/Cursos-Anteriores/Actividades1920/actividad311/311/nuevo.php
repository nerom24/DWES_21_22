<?php 
    // Carga funciones
    require_once("lib/funciones.php");
    
    $deportes = deportes();

    $dep_seleccionados = $_POST['deportes'];

    //echo implode($dep);

    $nombre = $_POST['nombre'];

    require_once("template/form_nuevo.php");
?>