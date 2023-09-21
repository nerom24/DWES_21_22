<?php 

    /*
        
        movimientos/create.model.php
        Añade nuevo movimiento a la cuenta seleccionada

    */
    
    # Obtener id cuenta
    $id_cuenta = $_GET['id'];
    
    # Conectamos con gesbank
    $gesbank = new Gesbank();

    # Obtengo los datos de la cuenta
    $cuenta= $gesbank->getCuenta($id_cuenta);

    # Actualizamos el saldo
    $cantidad = ($_POST['tipo'] == 'R')? - $_POST['cantidad']:$_POST['cantidad'];
    $saldo = $cuenta->saldo + $cantidad;

   //Crear objeto de la clase movimiento
   $movimiento = new Movimiento (
       null,
       $id_cuenta,
       null,
       $_POST['concepto'],
       $_POST['tipo'],
       $_POST['cantidad'],
       $saldo

   );

   //Crear nuevo movimiento
   $gesbank->createMovimiento($movimiento);

   //Actualizar cuenta
   $cuenta->fecha_ul_mov = time();
   $cuenta->num_movtos = $cuenta->num_movtos + 1;
   $cuenta->saldo = $saldo;

   $gesbank->actualizar_cuenta($cuenta);

    
?>