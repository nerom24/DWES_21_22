<?php

    class Corredores Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            session_start();

            # Comprobamos si existe algún mensaje
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            # Obtener los datos de corredores que se representan en la
            # tabla principal
            $this->view->title = "Corredores - Maratoon";
            $this->view->corredores = $this->model->get();
            $this->view->render('corredores/main/index');
        }

        function nuevo() {

            session_start();

            # Creo corredor en blanco inicializando los campos del formulario
            $this->view->corredor = new Corredor();

            # Si existe algún error
            if (isset($_SESSION['error'])) {

                # Mensaje de error
                $this->view->error = $_SESSION['error'];
                unset($_SESSION['error']);

                # Variables de autorrelleno formulario
                $this->view->corredor = unserialize($_SESSION['corredor']);
                unset($_SESSION['corredor']);

                # Tipo de error
                $this->view->erroresVal = $_SESSION['erroresVal'];
                unset($_SESSION['erroresVal']);

            }

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

            # Iniciamos o continuamos con la sesión
            session_start();

            # Saneamiento de los datos del formulario
            $nombre = filter_var($_POST['nombre'] ??= '', FILTER_SANITIZE_STRING);
            $apellidos = filter_var($_POST['apellidos'] ??= '', FILTER_SANITIZE_STRING);
            $ciudad = filter_var($_POST['ciudad'] ??= '', FILTER_SANITIZE_STRING);
            $fechaNacimiento = filter_var($_POST['fechaNacimiento'] ??= '', FILTER_SANITIZE_STRING);
            $sexo = filter_var($_POST['sexo'] ??= '', FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'] ??= '', FILTER_SANITIZE_EMAIL);
            $dni = filter_var($_POST['dni'] ??= '', FILTER_SANITIZE_STRING);
            $id_categoria = (int) filter_var($_POST['id_categoria'] ??= '', FILTER_SANITIZE_NUMBER_INT);
            $id_club = (int) filter_var($_POST['id_club'] ??= '', FILTER_SANITIZE_NUMBER_INT);

            # Validación
            $erroresVal = [];

            // Aplicaremos las reglas de validación

            // Validar nombre
            if (empty($nombre)) {
                $erroresVal['nombre'] = "Nombre no puede estar vacío";
            } else if (strlen($nombre) > 20) {
                $erroresVal['nombre'] = "No puede superar más de 20 caracteres";
            } 

            // Validar Apellidos
            if (empty($apellidos)) {
                $erroresVal['apellidos'] = "Apellidos no puede estar vacío";
            }

            // Validar Ciudad
            if (empty($ciudad)) {
                $erroresVal['ciudad'] = "Ciudad no puede estar vacío";
            }

            // Validar fechaNacimiento
            $fecha = explode('-', $fechaNacimiento);
            if (empty($fechaNacimiento)) {
                $erresVal['fechaNacimiento'] = "La fecha nacimiento no puede estar vacía";
            } else if (!(count($fecha) == 3 && checkdate($fecha[1], $fecha[2], $fecha[0]))) {
                $erresVal['fechaNacimiento'] = "Fecha Nacimiento no válida";
            }

            # Validar Sexo
            if (!in_array($sexo, ['H', 'M', ''] )) {
                $erroresVal['sexo'] = "Seleccionar un sexo válido";
            }

            # Validar Email
            if (empty($email)) {
                $erroresVal['email'] = "Email no puede estar vacío";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erroresVal['email'] = "Email no válido";
            } else if (!$this->model->validarEmail($email)) {
                $erroresVal['email'] = "Email ya ha sido registrado";
            }

            # Validar Dni
            $patronDni = array("options"=>array("regexp"=>"/^(\d{8})([A-Z])$/")); 
            if (empty($dni)) {
                $erroresVal['dni'] = "DNI no puede estar vacío";
            } else if (!filter_var($dni, FILTER_VALIDATE_REGEXP, $patronDni)) {
                $erroresVal['dni'] = "DNI no válido";
            } else if (!$this->model->validarDni($dni)) {
                $erroresVal['dni'] = "DNI ya ha sido registrado";
            }

            # Validar id_categoria
            if (empty($id_categoria)) {
                $erroresVal['id_categoria'] = "Hay que seleccionar una categoría";
            } elseif (!filter_var($id_categoria, FILTER_VALIDATE_INT)) {
                $erroresVal['id_categoria'] = "Categoría no válida";
            } elseif (!$this->model->validarId_categoria($id_categoria)) {
                $erroresVal['id_categoria'] = "Categoría No existente";
            }

            # Validar id_club
            if (empty($id_club)) {
                $erroresVal['id_club'] = "Hay que seleccionar una club";
            } elseif (!filter_var($id_club, FILTER_VALIDATE_INT)) {
                $erroresVal['id_club'] = "Club no válido";
            } elseif (!$this->model->validarId_club($id_club)) {
                $erroresVal['id_club'] = "Club No Válido";
            }


            // Fin reglas de validación

            # Creamos objeto corredor
            $corredor = new Corredor(
                null,
                $nombre,
                $apellidos,
                $ciudad,
                $fechaNacimiento,
                $sexo,
                $email,
                $dni,
                null,
                $id_categoria,
                $id_club

            );

            if (!empty($erroresVal)) {

                # Formulario no validado
                $_SESSION['corredor'] = Serialize($corredor);
                $_SESSION['error'] = "Fallo en la validación del formulario";
                $_SESSION['erroresVal'] = $erroresVal;

                # Redireccionamos a nuevo (formulario nuevo corredor)
                header("location:" .URL. "corredores/nuevo");


            } else {

                # Añadir registros en la tabla sin validación
                $this->model->create($corredor);

                # Crear Mensaje
                $_SESSION['mensaje'] = "Corredor añadido correctamente";

                # Redireccionamos al main de corredores
                header('location:'. URL. 'corredores');

            }

           

            
            

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
    }

    

?>