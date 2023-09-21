<?php

    class Corredores Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            # Extrae los corredores
            $corredores = $this->model->get();

            # Crea la propiedad corredores (objeto de la clase PDOstatement) en la vista
            $this->view->corredores = $corredores;

            # Cargo la vista
            $this->view->render('corredores/main/index');
        }
    }

?>