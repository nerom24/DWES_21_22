<?php 

    /*
        
        movimientos/nuevo.model.php
        Muestra formulario que permita añadir un nuevo movimiento de una cuenta

    */
    
    # Obtener id cuenta
    $id_cuenta = $_GET['id'];

    $gesbank = new Gesbank();
    $cuenta= $gesbank->getCuenta($id_cuenta);

    
?>