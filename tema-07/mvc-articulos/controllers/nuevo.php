<?php

    class Nuevo Extends Controller {

        function __construct() {

            parent ::__construct();
            $this->view->mensaje = "";
            
        }

        function render() {

            $this->view->render('nuevo/index');
        }

        function registrarCliente() {

            $apellidos = $_POST['apellidos'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $ciudad = $_POST['ciudad'];
            $dni = $_POST['dni'];
            $email = $_POST['email'];

            $cliente = 
            [
                'apellidos' => $apellidos,
                'nombre'    => $nombre,
                'telefono'    => $telefono,
                'ciudad'    => $ciudad,
                'dni'    => $dni,
                'email'    => $email
                
            ];

            # La función insert devuelve el mensaje resultante de añadir el registro
            $mensaje=$this->model->insert($cliente);
            
            $this->view->mensaje = $mensaje;
            $this->render();
        }


    }

?>