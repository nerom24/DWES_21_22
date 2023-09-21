<?php

    class Register Extends Controller {

        public function render() {

            # iniciamos o continuar sessión
            sec_session_start();

            # título página
            $this->view->title = "Registrar Nuevo Usuario - Maratoon";

            # Si existe algún mensaje 
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            # Inicializamos los campos del formulario
            $this->view->user = new user();

            if (isset($_SESSION['error'])) {

                # Mensaje de error
                $this->view->error = $_SESSION['error'];
                unset($_SESSION['error']);

                # Variables de autorrelleno
                $this->view->user = unserialize($_SESSION['user']);
                unset($_SESSION['user']);

                # Tipo de error
                $this->view->erroresVal = $_SESSION['erroresVal'];
                unset($_SESSION['erroresVal']);

            }
        
            $this->view->render('users/register/index');
        }
    

    public function validate() {

        # Iniciamos o continuamos con la sesión
        sec_session_start();

        # Saneamos el formulario
        $name = filter_var($_POST['name'] ??= null,FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'] ??= null,FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'] ??= null,FILTER_SANITIZE_STRING);
        $password_confirm = filter_var($_POST['password_confirm'] ??= null,FILTER_SANITIZE_STRING);

        # Validaciones

        $erroresVal = array();

        # Validar name
        if (empty($name)) { 
            $erroresVal['name'] = "Nombre de usuario es obligatorio";
        } else if ((strlen($name) < 5) || (strlen($name) > 50)) {
            $erroresVal['name'] = "Nombre de usuario ha de tener entre 5 y 50 caracteres";
        } else if (!$this->model->validarName($name)) {
            $erroresVal['name'] = "Nombre de usuario ya ha sido registrado";
        }

        # Validar Email
        if (empty($email)) { 
            $erroresVal['email'] = "Email es un campo obligatorio";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroresVal['email'] = "Email no válido";
        } elseif (!$this->model->validarEmail($email)) {
            $erroresVal['email'] = "Email ya ha sido registrado";
        }

        # Validar password
        if (empty($password)) { 
            $erroresVal['password'] = "Password no introducido";
        } else if (strcmp($password, $password_confirm) !== 0) {
            $erroresVal['password'] = "Password no coincidentes";
        } else if ((strlen($password) < 5) || (strlen($password) > 60)) {
            $erroresVal['password'] = "Password ha de tener entre 5 y 60 caracteres";
        }

        # Crear objeto user

        $user = new User(
            null,
            $name,
            $email,
            $password
        );

        // print_r($erroresVal);
        // exit();

        if (!empty($erroresVal)) {

            $_SESSION['erroresVal'] = $erroresVal;
            $_SESSION['user'] = serialize($user);
            $_SESSION['error'] = "Formulario con errores de validación";
            
            header("location:". URL. "register");
   
        } else {
            
            # Añade nuevo usuario
            $this->model->registrar($user);
    
            $_SESSION['mensaje'] = "Usuario registrado correctamente";
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            
            #Vuelve login
            header("location:". URL. "login");
        }
        


    }

}

?>