<?php

    class Editperfil Extends Controller {


        function render() {

            sec_session_start();

            # título página
            $this->view->title = "Modificar perfil cuenta - Maratoon";

            # Capa autentificación
            if (!isset($_SESSION['id'])) {

                header("location:".URL. "login");
            }

            # Comprobamos si existe algún mensaje
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            # Obtenemos objeto con los detalles del usuario
            $this->view->user = $this->model->getUserId($_SESSION['id']);

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

            $this->view->render('users/editperfil/index');



        }

        public function validate() {

            # Iniciamos o continuamos con la sesión
            sec_session_start();

            # Capa autentificación
            if (!isset($_SESSION['id'])) {

                header("location:".URL. "login");
            }
    
            # Saneamos el formulario
            $name = filter_var($_POST['name'] ??= null,FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'] ??= null,FILTER_SANITIZE_EMAIL);

             # Obtenemos objeto con los detalles del usuario
            $user = $this->model->getUserId($_SESSION['id']);
    
            # Validaciones
    
            $erroresVal = array();
    
            # Validar name sólo si se ha modificado
            if (strcmp($user->name, $name) !== 0) {
                if (empty($name)) { 
                    $erroresVal['name'] = "Nombre de usuario es obligatorio";
                } else if ((strlen($name) < 5) || (strlen($name) > 50)) {
                    $erroresVal['name'] = "Nombre de usuario ha de tener entre 5 y 50 caracteres";
                } else if (!$this->model->validarName($name)) {
                    $erroresVal['name'] = "Nombre de usuario ya ha sido registrado";
                }
            }
    
            # Validar Email sólo si se ha modificado
            if (strcmp($user->email, $email) !== 0) {
                if (empty($email)) { 
                    $erroresVal['email'] = "Email es un campo obligatorio";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $erroresVal['email'] = "Email no válido";
                } elseif (!$this->model->validarEmail($email)) {
                    $erroresVal['email'] = "Email ya ha sido registrado";
                }
            }
    
            # Crear objeto user
    
            $user = new User(
                $user->id,
                $name,
                $email,
                null
            );

           
            if (!empty($erroresVal)) {
    
                $_SESSION['erroresVal'] = $erroresVal;
                $_SESSION['user'] = serialize($user);
                $_SESSION['error'] = "Formulario con errores de validación";
                
                header("location:". URL. "editperfil");
       
            } else {
                
                # Actualiza perfil
                $this->model->update($user);

                # Actualizo name
                $_SESSION['name_user'] = $user->name;
        
                $_SESSION['mensaje'] = "Usuario modificado correctamente";
                
                #Vuelve corredores
                header("location:". URL. "corredores");
            }
            
    
    
        }

    }    
?>