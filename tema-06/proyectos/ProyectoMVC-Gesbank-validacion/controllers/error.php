<?php

    class Errores extends Controller {

        function __construct() {

            parent ::__construct();
            //Actualizo el titulo de la página
            $this->view->title = "Error - Gesbank";
            $this->view->mensaje = "URL no existente";
            $this->view->render('error/index');
        }

      

    }

?>