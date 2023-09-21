<?php

    class Cuentas Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {
            //Actualizo el titulo de la página
            $this->view->title = "Cuentas - Gesbank";
            
            //Obtener los datos de cuentas que se representan en la tabla principal
            $this->view->cuentas = $this->model->get();

            $this->view->clientes = $this->model->getClientes();
            
            //Mostrar la vista
            $this->view->render('cuentas/main/index');
        }

        function nuevo(){
            //Actualizo el titulo de la página
            $this->view->title = "Añadir - cuenta - Gesbank";

            //Cargo el array de cuentas para traerme el
            $this->view->cuentas = $this->model->get();

            $this->view->clientes = $this->model->getClientes();

            //Cargo la vista
            $this->view->render('cuentas/nuevo/index');
        }

        function create(){

            $cuenta = new cuenta();

            $cuenta->num_cuenta = htmlspecialchars($_POST['num_cuenta']);
            $cuenta->id_cliente = htmlspecialchars($_POST['id_cliente']);

            $this->model->create($cuenta);

            header('Location: ' . URL . 'cuentas');
        }

        //Este metodo se activará a partir de la url cuentas/editar/$param
        //Mostrará el formulario que permitirá añadir nuevo cuenta en la tabla
        function editar($param){

            // Estraigo el id del cuenta que voy a editar
            $this->view->id = htmlspecialchars($param[0]);

            // Actualizo el título de la página
            $this->view->title = "Editar cuenta - Maratoon";

            // Obtengo objeto de la clase cuenta
            $this->view->cuentas = $this->model->read($this->view->id);

            //Cargo el array de clientes para traerme el nombre y apellidos
            $this->view->clientes = $this->model->getClientes();


            //Cargo la vista
            $this->view->render('cuentas/editar/index');


        }

        // Este método se activara a partir de la url cuentas/update/1
        // Actualizará los datos del cuenta a partir de los valores
        function update($param){

            $id = htmlspecialchars($param[0]);

            $cuenta = new cuenta();

            $cuenta->id = htmlspecialchars($_POST['id']);
            $cuenta->num_cuenta = htmlspecialchars($_POST['num_cuenta']);
            $cuenta->id_cliente = htmlspecialchars($_POST['id_cliente']);

            //Obtengo objeto de la clase cuenta
            $this->model->update($cuenta, $id);

            header('Location: ' . URL . 'cuentas');

        }

        function mostrar($param){

            // Estraigo el id del cuenta que voy a mostrar
            $this->view->id = htmlspecialchars($param[0]);

            // Actualizo el título de la página
            $this->view->title = "Mostrar cuenta - Gesbank";

            // Obtengo objeto de la clase cuenta
            $this->view->cuentas = $this->model->read($this->view->id);

            //Cargo el array de clientes para traerme el nombre y apellidos
            $this->view->clientes = $this->model->getClientes();


            //Cargo la vista
            $this->view->render('cuentas/mostrar/index');
 

        }

        function eliminar($param){

            // Estraigo el id del cuenta que voy a eliminar
            $this->view->id = htmlspecialchars($param[0]);

            // Eliminamos al cuenta
            $this->view->eliminar = $this->model->delete($this->view->id);

            header('Location: ' . URL . 'cuentas');

        }

        function ordenar($param){

            // Estraigo el parametro del cuenta por el que voy a ordenar
            $this->view->criterio = (int) $param[0];

            // Llamo a la funcion ordercuentas pasandole el parametro por que quiero que me ordene
            $this->view->cuentas = $this->model->ordercuentas($this->view->criterio);

            // Actualizo el título de la página
            $this->view->title = "Ordenar cuenta - Gesbank";

            //Cargo la vista
            $this->view->render('cuentas/main/index');

        }

        function buscar(){

            $this->view->cuentas = $this->model->filter($_GET['busqueda']);

            // Actualizo el título de la página
            $this->view->title = "Busqueda cuenta - Gesbank";

            //Cargo la vista
            $this->view->render('cuentas/main/index');

        }

        
    }

?>