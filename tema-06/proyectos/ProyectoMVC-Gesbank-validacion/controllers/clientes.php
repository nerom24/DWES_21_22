<?php

    class Clientes Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {
            //Actualizo el titulo de la página
            $this->view->title = "Clientes - Gesbank";
            
            //Obtener los datos de clientes que se representan en la tabla principal
            $this->view->clientes = $this->model->get();
            
            //Mostrar la vista
            $this->view->render('clientes/main/index');
        }

        function nuevo(){
            //Actualizo el titulo de la página
            $this->view->title = "Añadir - Cliente - Gesbank";

            //Cargo el array de categorias para la vista
            //$this->view->categorias = $this->model->getCategorias();

            //Cargo el array de clubs para la vista
            //$this->view->clubs = $this->model->getClubs();

            //Cargo la vista
            $this->view->render('clientes/nuevo/index');
        }

        function create(){

            $cliente = new Cliente();

            $cliente->nombre = htmlspecialchars($_POST['nombre']);
            $cliente->apellidos = htmlspecialchars($_POST['apellidos']);
            $cliente->telefono = htmlspecialchars($_POST['telefono']);
            $cliente->ciudad = htmlspecialchars($_POST['ciudad']);
            $cliente->dni = htmlspecialchars($_POST['dni']);
            $cliente->email = htmlspecialchars($_POST['email']);
            $this->model->create($cliente);

            header('Location: ' . URL . 'clientes');
        }

        //Este metodo se activará a partir de la url clientes/editar/$param
        //Mostrará el formulario que permitirá añadir nuevo cliente en la tabla
        function editar($param){

            // Estraigo el id del cliente que voy a editar
            $this->view->id = htmlspecialchars($param[0]);

            // Actualizo el título de la página
            $this->view->title = "Editar Cliente - Maratoon";

            // Obtengo objeto de la clase cliente
            $this->view->cliente = $this->model->read($this->view->id);

            // //Cargo el array de clubs para la vista
            // $this->view->clubs = $this->model->getClubs();

            // //Cargo el array de categorias para la vista
            // $this->view->categorias = $this->model->getCategorias();

            //Cargo la vista
            $this->view->render('clientes/editar/index');


        }

        // Este método se activara a partir de la url clientes/update/1
        // Actualizará los datos del cliente a partir de los valores
        function update($param){

            $id = htmlspecialchars($param[0]);

            $cliente = new Cliente();

            $cliente->id = htmlspecialchars($_POST['id']);
            $cliente->apellidos = htmlspecialchars($_POST['apellidos']);
            $cliente->nombre = htmlspecialchars($_POST['nombre']);
            $cliente->telefono = htmlspecialchars($_POST['telefono']);
            $cliente->ciudad = htmlspecialchars($_POST['ciudad']);
            $cliente->dni = htmlspecialchars($_POST['dni']);
            $cliente->email = htmlspecialchars($_POST['email']);

            //Obtengo objeto de la clase cliente
            $this->model->update($cliente, $id);

            header('Location: ' . URL . 'clientes');

        }

        function mostrar($param){

            // Estraigo el id del cliente que voy a mostrar
            $this->view->id = htmlspecialchars($param[0]);

            // Actualizo el título de la página
            $this->view->title = "Mostrar cliente - Gesbank";

            // Obtengo objeto de la clase cliente
            $this->view->cliente = $this->model->read($this->view->id);

            // //Cargo el array de clubs para la vista
            // $this->view->club = $this->model->getClub($this->view->cliente->id_club);

            // //Cargo el array de categorias para la vista
            // $this->view->categoria = $this->model->getCategoria($this->view->cliente->id_categoria);


            //Cargo la vista
            $this->view->render('clientes/mostrar/index');
 

        }

        function eliminar($param){

            // Estraigo el id del cliente que voy a eliminar
            $this->view->id = htmlspecialchars($param[0]);

            // Eliminamos al cliente
            $this->view->eliminar = $this->model->delete($this->view->id);

            header('Location: ' . URL . 'clientes');

        }

        function ordenar($param){

            // Estraigo el parametro del cliente por el que voy a ordenar
            $this->view->criterio = (int) $param[0];

            // Llamo a la funcion orderClientes pasandole el parametro por que quiero que me ordene
            $this->view->clientes = $this->model->orderClientes($this->view->criterio);

            // Actualizo el título de la página
            $this->view->title = "Ordenar cliente - Gesbank";

            //Cargo la vista
            $this->view->render('clientes/main/index');

        }

        function buscar(){

            $this->view->clientes = $this->model->filter($_GET['busqueda']);

            // Actualizo el título de la página
            $this->view->title = "Busqueda cliente - Gesbank";

            //Cargo la vista
            $this->view->render('clientes/main/index');

        }

        
    }

?>