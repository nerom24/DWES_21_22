<?php

    class Corredores Extends Controller {

        public function __construct() {

            parent ::__construct();
            
            
        }

        # Método principal del controlador
        public function render() {

            # Extrae los corredores
            $corredores = $this->model->get();

            # Crea la propiedad corredores (objeto de la clase PDOstatement) en la vista
            $this->view->corredores = $corredores;
            $this->view->title = "Corredores - Maratoon";

            # Cargo la vista
            $this->view->render('corredores/main/index');
        }

        # Este método se activará a partir de la url corredores/nuevo 
        # Mostrará el formulario que permitirá añadir nuevo corredor en la tabla
        public function nuevo() {

            # Actualizo el título de la página
            $this->view->title = "Añadir - Maratoon";

            # Cargo el array de clubs para la vista
            $this->view->clubs = $this->model->getClubs();

            # Cargo el array de categorias para la vista
            $this->view->categorias = $this->model->getCategorias();
            
            # Cargo la vista
            $this->view->render('corredores/nuevo/index');

        }

        # url -> corredores/create
        # Añadir nuevo corredor a la tabla a partir de los datos del formulario
        public function create() {

            # Cargamos datos del formulario
            $corredor = new Corredor(
                null,
                $_POST['nombre'],
                $_POST['apellidos'],
                $_POST['ciudad'],
                $_POST['fechaNacimiento'],
                $_POST['sexo'],
                $_POST['email'],
                $_POST['dni'],
                null,
                $_POST['id_categoria'],
                $_POST['id_club']

            );

            # Añadir registros en la tabla sin validación
            $this->model->create($corredor);

            # Redireccionamos al main de corredores
            header('location:'. URL. 'corredores');

        }
    }

?>