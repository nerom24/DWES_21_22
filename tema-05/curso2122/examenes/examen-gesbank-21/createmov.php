<?php 

    # Parámetros acceso a la base de datos
    include('config/bd.php');

    # Clases
    include('class/movimiento.class.php');
    include('class/cuenta.class.php');
    include('class/conexion.class.php');
    include('class/gesbank.class.php');
    
    # Modelo
    include('models/movimientos/create.model.php');

    # Redirecciona
    header("location: movimientos.php?id=$id_cuenta");
?>