<?php

    class Corredores Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            # Obtener los datos de corredores que se representan en la
            # tabla principal
            $this->view->title = "Corredores - Maratoon";
            $this->view->corredores = $this->model->get();
            $this->view->render('corredores/main/index');
        }

        function nuevo() {

            # Actualizo el título de la página
            $this->view->title = "Añadir - Corredor - Maratoon";

            # Cargo el array de clubs para la vista
            $this->view->clubs = $this->model->getClubs();

            # Cargo el array de categorias para la vista
            $this->view->categorias = $this->model->getCategorias();

            # Cargo la vista
            $this->view->render('corredores/nuevo/index');

        }

        function create() {


             # Cargamos datos del formulario
             $corredor = new Corredor(
                null,
                htmlspecialchars($_POST['nombre']),
                htmlspecialchars($_POST['apellidos']),
                htmlspecialchars($_POST['ciudad']),
                htmlspecialchars($_POST['fechaNacimiento']),
                htmlspecialchars($_POST['sexo']),
                htmlspecialchars($_POST['email']),
                htmlspecialchars($_POST['dni']),
                null,
                htmlspecialchars($_POST['id_categoria']),
                htmlspecialchars($_POST['id_club'])

            );

            # Añadir registros en la tabla sin validación
            $this->model->create($corredor);

            # Redireccionamos al main de corredores
            header('location:'. URL. 'corredores');
            

        }

        # Este método se activará a partir de la url corredores/editar/1
        # Mostrará el formulario que permitirá añadir nuevo corredor en la tabla
        public function editar($param) {

            # Extraigo el id del corredor que voy a editar
            $this->view->id = htmlspecialchars($param[0]);
            
            # Actualizo el título de la página
            $this->view->title = "Editar Corredor - Maratoon";

            # Obtengo objeto de la clase corredor
            $this->view->corredor = $this->model->read($this->view->id);

            # Cargo el array de clubs para la vista
            $this->view->clubs = $this->model->getClubs();

            # Cargo el array de categorias para la vista
            $this->view->categorias = $this->model->getCategorias();
            
            # Cargo la vista
            $this->view->render('corredores/editar/index');

        }

        # Este método se activará a partir de la url corredores/update/1
        # Actualizará los datos del corredor a partir de los valores del formulario
        public function update($param) {

            # Extraigo el id del corredor que voy a editar
            $id = htmlspecialchars($param[0]);

            //Cargamos datos del formulario
            $corredor = new Corredor(
                htmlspecialchars($_POST['id']),
                htmlspecialchars($_POST['nombre']),
                htmlspecialchars($_POST['apellidos']),
                htmlspecialchars($_POST['ciudad']),
                htmlspecialchars($_POST['fechaNacimiento']),
                htmlspecialchars($_POST['sexo']),
                htmlspecialchars($_POST['email']),
                htmlspecialchars($_POST['dni']),
                null,
                htmlspecialchars($_POST['id_categoria']),
                htmlspecialchars($_POST['id_club'])
            );

            # Obtengo objeto de la clase corredor
            $this->model->update($corredor, $id);
           
            # Redireccionamos al main de corredores
            header('location:'. URL. 'corredores');

        }
    
        # Este método se activará a partir de la url corredores/mostrar/1
        # Mostrará el formulario que permitirá añadir nuevo corredor en la tabla
        public function mostrar($param) {

            # Extraigo el id del corredor que voy a editar
            $this->view->id = htmlspecialchars($param[0]);
            
            # Actualizo el título de la página
            $this->view->title = "Mostrar Corredor - Maratoon";

            # Obtengo objeto de la clase corredor
            $this->view->corredor = $this->model->read($this->view->id);

            # Cargo el array de clubs para la vista
            $this->view->club = $this->model->getClub($this->view->corredor->id_club);

            # Cargo el array de categorias para la vista
            $this->view->categoria = $this->model->getCategoria($this->view->corredor->id_categoria);
            
            # Cargo la vista
            $this->view->render('corredores/mostrar/index');

        }

        # Este método se activará a partir de la url corredores/mostrar/1
        # Mostrará el formulario que permitirá añadir nuevo corredor en la tabla
        public function eliminar($param) {

            # Extraigo el id del corredor que voy a editar
            $this->view->id = htmlspecialchars($param[0]);

            # Eliminar corredor
            $this->model->delete($this->view->id);
            
            # Redireccionamos al main de corredores
            header('location:'. URL. 'corredores');

        }

        function ordenar($param){

            // Estraigo el parametro del corredor por el que voy a ordenar
            $this->view->criterio = (int) htmlspecialchars($param[0]);

            // Llamo a la funcion orderCorredores pasandole el parametro por que quiero que me ordene
            $this->view->corredores = $this->model->order($this->view->criterio);

            // Actualizo el título de la página
            $this->view->title = "Ordenar Corredor - Maratoon";

            //Cargo la vista
            $this->view->render('corredores/main/index');

        }
    }

    

?>