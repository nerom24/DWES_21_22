<?php

    class Cuentas Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            $this->view->render('cuentas/index');
        }
    }

?>