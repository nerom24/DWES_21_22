<?php

    # modelClientes.php

    include_once("class/cliente.php");
    include_once("class/arrayClientes.php");

    $clientes = new arrayClientes();
    $clientes->generarTabla();

?>