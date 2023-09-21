<?php

    class Logout Extends Controller {


        function render() {

            # iniciamos sesión
            sec_session_start();
            sec_session_destroy();

            header("location:" .URL. "login");

        }
    }    
?>