<?php

    class Access Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            # iniciamos sesión
            sec_session_start();

            # Inicializo los campos del formulario login
            $this->view->email =null;
            $this->view->password = null;

            # Si existe algún mensaje 
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
              
                if (isset($_SESSION['email'])) {
                    $this->view->email =$_SESSION['email'];
                    unset($_SESSION['email']);
                }

                if (isset($_SESSION['password'])) {
                    $this->view->password =$_SESSION['password'];
                    unset($_SESSION['password']);
                }
               
            }

            

            # Si existe algún error
            if (isset($_SESSION['error'])) {

                # Mensaje de error
                $this->view->error = $_SESSION['error'];
                unset($_SESSION['error']);

                # Variables de autorrelleno
                $this->view->email = $_SESSION['email'];
                $this->view->password = $_SESSION['password'];
                unset($_SESSION['email']);
                unset($_SESSION['password']);

                # Tipo de error
                $this->view->errores = $_SESSION['errores'];
               
                unset($_SESSION['errores']);

            }
             
            # Cargamos la vista
            $this->view->render('users/access/index');
        }
    }

?>