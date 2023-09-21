<?php 

    # Parámetros acceso a la base de datos
    include('config/bd.php');

    # Clases
    include('class/cuenta.class.php');
    include('class/movimiento.class.php');
    include('class/conexion.class.php');
    include('class/gesbank.class.php');
    
    # Modelo
    include('models/movimientos/nuevo.model.php');

    # Vista
    include('views/movimientos/nuevo.view.php');


?>
