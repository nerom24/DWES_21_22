<?php 

    # Parámetros acceso a la base de datos
    include('config/bd.php');

    # Clases
    include('class/alumno.class.php');
    include('class/conexion.class.php');
    include('class/alumnos.class.php');
    
    # Modelo
    include('models/create.model.php');

   # Vista
   include('views/index.view.php');


?>
