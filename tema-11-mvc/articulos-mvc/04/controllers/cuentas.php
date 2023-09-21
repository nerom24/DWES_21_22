<?php

    class Cuentas Extends Controller {

        function __construct() {

            parent ::__construct();
                
        }

        function render() {

            # Inicio o continúo con la sessión
            sec_session_start();

            # Capa de autentificación
            if (!isset($_SESSION['id'])) {

                header("location:access");
            }

            # Si existe algún mensaje 
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            # Extrae los detalles de las cuentas
            $cuentas = $this->model->get();
            $this->view->cuentas = $cuentas; 

            # Lanza la vista
            $this->view->render('cuentas/main/index');
        }
    }

?>