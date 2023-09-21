<?php

    /*
        Procesar la información de un formulario

        - Método GET
        - Método POST
        - REQUEST
    */

    print_r($_POST);

    if (isset($_POST['recordar']))
        echo $_POST['recordar'];
    
?>