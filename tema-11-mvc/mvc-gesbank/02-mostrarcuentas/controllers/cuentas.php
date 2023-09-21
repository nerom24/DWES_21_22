<?php

    class Cuentas Extends Controller {

        function __construct() {

            parent ::__construct();
            
            $this->view->datos = null;
        }

        function render() {

            $cuentas = $this->model->get();
            $this->view->cuentas = $cuentas; 
            $this->view->render('cuentas/main/index');
        }
    }

?>