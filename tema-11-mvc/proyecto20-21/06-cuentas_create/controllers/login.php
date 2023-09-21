<?php

    class Login Extends Controller {

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
            $this->view->render('users/login/index');
        }

        #
        # Valida la autentificación de usuarios
        #
        function validate() {

            # iniciamos sesión
            sec_session_start();

            # Saneamos el formulario
            $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	        $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);

            # Validaciones

            $errores = array();

            #obtengo el usuario a partir del email
	        $user = $this->model->getUserEmail($email);

        
            if ($user === false) {

                $errores['email'] = "Email no ha sido registrado";
                $_SESSION['errores'] = $errores;
                
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                
                $_SESSION['error'] = "Fallo en la Autentificación";

                header("location:".URL."login");
                
            } elseif (!password_verify($password,$user->password)) {

                $_SESSION['error'] = "Fallo en la Autentificación";

                $errores['password'] = "Password no es correcto";
                $_SESSION['errores'] = $errores;

                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;

                header("location:".URL. "login");

            } else {

                # La autentificación es correcta

                # Creo las variables de sesión: 
                # id - id usuario autentificado
                # name_user - nombre del usuario
                # id_rol - id rol o perfil del usuario
                # name_rol - nombre del rol del usuario

                $_SESSION['id'] = $user->id;
                $_SESSION['name_user'] = $user->name;
                $_SESSION['id_rol'] = $this->model->getUserIdPerfil($user->id);
                $_SESSION['name_rol'] = $this->model->getUserPerfil($_SESSION['id_rol']);

                $_SESSION['mensaje'] = "Usuario ". $user->name. " ha iniciado sesión" ;
                header("location:".URL."cuentas");

            }
                   

        }

    }

?>