<?php

    class Register Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            # iniciamos o continuar sessión
            sec_session_start();

            # Si existe algún mensaje 
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            # Inicializamos los campos del formulario
            $this->view->name = null;
            $this->view->email = null;
            $this->view->password = null;

            if (isset($_SESSION['error'])) {

                # Mensaje de error
                $this->view->error = $_SESSION['error'];
                unset($_SESSION['error']);

                # Variables de autorrelleno
                $this->view->name = $_SESSION['name'];
                $this->view->email = $_SESSION['email'];
                $this->view->password = $_SESSION['password'];
                unset($_SESSION['name']);
                unset($_SESSION['email']);
                unset($_SESSION['password']);

                # Tipo de error
                $this->view->errores = $_SESSION['errores'];
                unset($_SESSION['errores']);

            }
        
            $this->view->render('users/register/index');
        }
    }

?>