<?php

    class Main Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            //Actualizo el titulo de la página
            $this->view->title = "Home - Proyecto - Gesbank";

            $this->view->render('main/index');
        }
    }

?>