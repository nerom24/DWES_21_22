<?php

    class Logout Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            # iniciamos sesión
            sec_session_start();
            sec_session_destroy();

            header("location: index");
        }
    }

?>