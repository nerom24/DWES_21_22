<?php

    class Cuentas Extends Controller {

        function __construct() {

            parent ::__construct();
            
            $this->view->datos = null;
        }

        function render() {

            # iniciamos sesión
            sec_session_start();

            # Capa de comprobación de autentificación
            if (!isset($_SESSION['id'])) {

                header("location:access");
            }

            # Si existe algún mensaje 
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            $cuentas = $this->model->get();
            $this->view->cuentas = $cuentas; 
            $this->view->render('cuentas/main/index'); 
        }
    }

?>