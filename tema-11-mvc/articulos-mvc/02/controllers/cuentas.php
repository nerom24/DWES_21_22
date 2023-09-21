<?php

    class Cuentas Extends Controller {

        function __construct() {

            parent ::__construct();
                
        }

        function render() {

            $cuentas = $this->model->get();
            $this->view->cuentas = $cuentas; 
            $this->view->render('cuentas/index');
        }
    }

?>