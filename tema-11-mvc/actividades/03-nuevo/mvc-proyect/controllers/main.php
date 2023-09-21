<?php

    class Main Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            $this->view->title = "Home - Maratoon";
            $this->view->render('main/index');
        }
    }

?>