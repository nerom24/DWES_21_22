<?php

    class Main Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            $this->view->title = "Home - Corredores";
            $this->view->render('main/index');
        }
    }

?>