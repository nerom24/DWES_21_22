<?php 

    # Parámetros acceso a la base de datos
    include('config/bd.php');

    # Clases
    include('class/cuenta.class.php');
    include('class/conexion.class.php');
    include('class/gesbank.class.php');
    
    # Modelo
    include('models/cuentas/cuentas.model.php');

    # Vista
    include('views/cuentas/cuentas.view.php');


?>
