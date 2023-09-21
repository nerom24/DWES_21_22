<?php 

    /*
        movimientos.model.php
        Proyecto - Muestra los movimientos de una cuenta seleccionada

    */
    
    # Obtener id cuenta
    $id_cuenta = $_GET['id'];

    $gesbank = new Gesbank();
    $arrayMovimientos= $gesbank->getMovimientos($id_cuenta);

    
?>