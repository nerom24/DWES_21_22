<?php

    class Consulta Extends Controller {

        function __construct() {

            parent ::__construct();
            $this->view->datos = null;
            
        }

        function render() {

            $clientes = $this->model->get();
            $this->view->datos = $clientes;
            $this->view->render('consulta/index');
        }

        function show($param = null) {
            # El primer parámetro se ha de corresponder con la id del cliente
            $id = $param[0];
            $cliente = $this->model->getById($id);

            $this->view->cliente = $cliente;
            $this->view->render('consulta/detalle');
        }

        function edit($param = null) {
            # El primer parámetro se ha de corresponder con la id del cliente
            $id = $param[0];
            $cliente = $this->model->getById($id);

            $this->view->cliente = $cliente;
            $this->view->id = $id;
            $this->view->render('consulta/editar');

        }

        function delete($param = null) {

            $id = $param[0];
            
            $mensaje = $this->model->delete($id);
            $this->view->mensaje = $mensaje;
            $this->render();

        }

        function updateCliente($param) {

            $idCliente = $param[0];
            $cliente = new Cliente();
            
            $cliente->apellidos = $_POST['apellidos'];
            $cliente->nombre = $_POST['nombre'];
            $cliente->telefono = $_POST['telefono'];
            $cliente->ciudad = $_POST['ciudad'];
            $cliente->dni = $_POST['dni'];
            $cliente->email = $_POST['email'];

             # La función insert devuelve el mensaje resultante de añadir el registro
             $mensaje=$this->model->update($cliente, $idCliente);
            
             $this->view->mensaje = $mensaje;
             $this->render();
        }



    }

?>