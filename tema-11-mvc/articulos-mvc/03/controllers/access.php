<?php

    class Access Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            # Iniciar o continuar sesión segura
            sec_session_start();

            # Control de los mensajes
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            # Inicializo los valores del formulario
            $this->view->email = null;
            $this->view->password = null;

            # Control de errores
            if (isset($_SESSION['error'])) {

                $this->view->error = $_SESSION['error'];
                unset($_SESSION['error']);

                # Autocompleto los valores del formulario
                $this->view->email = $_SESSION['email'];
                $this->view->password = $_SESSION['password'];
                unset($_SESSION['email']);
                unset($_SESSION['password']);

                # Tipo de error
                $this->view->errores = $_SESSION['errores'];
                unset($_SESSION['errores']);

            }

            $this->view->render('users/access/index');
        }
    }

?>