<?php

    class Login Extends Controller {

        function __construct() {

            parent ::__construct();
             
        }

        function render() {

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

                header("location:access");
                
            } elseif (!password_verify($password,$user->password)) {

                $_SESSION['error'] = "Fallo en la Autentificación";

                $errores['password'] = "Password no es correcto";
                $_SESSION['errores'] = $errores;

                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;

                header("location:access");

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
                header("location: cuentas");

            }
                   

        }

    }    
?>