<?php
    
    class Articulos Extends Controller {

        function __construct() {

            parent ::__construct();
            
            
        }

        function render() {

            $articulos = $this->model->get();
            $this->view->datos = $articulos;
            $this->view->render('articulos/index');
        }

        function nuevo($param = null) {
            
            # Lista desplegable caregorías de artículos del formulario
            $categorias = $this->model->getCategorias();
            $this->view->categorias = $categorias;

            # Controlamos autorelleno formulario ante una no validación
            if (!isset($this->view->articulo)) $this->view->articulo = null;
            
            $this->view->render('articulos/nuevo');
        }

        function registrar($param = null) {
            
            # Sanear datos $_POST del formulario

            $articulo = 
            [
                'descripcion'     => filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING),
                'precio_costo'    => filter_var($_POST['precio_costo'], FILTER_SANITIZE_NUMBER_FLOAT),
                'precio_venta'    => filter_var($_POST['precio_venta'], FILTER_SANITIZE_NUMBER_FLOAT),
                'stock'           => filter_var($_POST['stock'], FILTER_SANITIZE_NUMBER_INT),
                'categoria_id'    => filter_var($_POST['categoria_id'], FILTER_SANITIZE_NUMBER_INT),
                'imagen'          => $_FILES['imagen']
                
            ];


            # Validar datos del formulario

            $errores = array();

            # Valiar descripción
            if (empty($articulo['descripcion'])) {
                $errores['descripcion'] = "Campo obligatorio";
            }

            # Validar precio_costo
            if (empty($articulo['precio_costo'])) {
                $errores['precio_costo'] = "Campo obligatorio";
            } else if (!filter_var($articulo['precio_costo'], FILTER_VALIDATE_FLOAT)) {
                $errores['precio_costo'] = "Valor no permitido";

            }

            # Validar precio_venta
            if (empty($articulo['precio_venta'])) {
                $errores['precio_venta'] = "Campo obligatorio";
            } else if (!filter_var($articulo['precio_venta'], FILTER_VALIDATE_FLOAT)) {
                $errores['precio_venta'] = "Valor no permitido";

            }

            # Validar stock con rango
            $options = array(
                'options' => array(
                    'min_range' => 0,
                    'max_range' => 1000,
                )
            );
            
            if (!filter_var($articulo['stock'], FILTER_VALIDATE_INT, $options)) {
                $errores['stock'] = "Valor fuera de rango";

            }

            # Validar categoria_id con rango
            $options = array(
                'options' => array(
                    'min_range' => 1,
                    'max_range' => 10,
                )
            );
            
            if (!filter_var($articulo['categoria_id'], FILTER_VALIDATE_INT, $options)) {
                $errores['categoria_id'] = "Valor fuera de rango";
            }

            # Validar imagen jpg, gif, png


            # Comprobamos antes si ha ocurrido algún error en la subida de archivo

            $FileUploadErrors = array(
                0 => 'No hay error, fichero subido con éxito.',
                1 => 'El fichero subido excede la directiva upload_max_filesize de php.ini.',
                2 => 'El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.',
                3 => 'El fichero fue sólo parcialmente subido.',
                4 => 'No se subió ningún fichero.',
                6 => 'Falta la carpeta temporal.',
                7 => 'No se pudo escribir el fichero en el disco.',
                8 => 'Una extensión de PHP detuvo la subida de ficheros.',
            );
            
            if (($articulo['imagen']['error'] !== UPLOAD_ERR_OK )) {
                
                $errores['imagen'] = $FileUploadErrors[$articulo['imagen']['error']];
                
            }  else 
            
            if (is_uploaded_file($articulo['imagen']['tmp_name'])) {

                $info = new SplFileInfo($articulo['imagen']['tmp_name']);
                
                # Validamos tamaño máximo 2MB personalizado
                # MAX_FILE_SIZE hace la misma validación con HTML
                $max_tamano = 2 * 1024 * 1024;
                
                if ($info->getSize() > $max_tamano ) {
                    $errores['imagen'] = "Tamaño de archivo no permitido. Máximo 2MB";
                }

                # Validamos el tipo
                $info = new SplFileInfo($articulo['imagen']['name']);
                $tipos_permitidos =['jpeg', 'JPEG','jpg', 'JPG', 'gif', 'GIF',  'png', 'PNG'];
                
                if (!in_array ($info->getExtension(), $tipos_permitidos )) {
                    $errores['imagen'] = "Tipo no permitido. Sólo JPG, PNG y GIF";
                }
                
            }

            if (!empty($errores)) {
                
                # Datos no validados
                $this->view->errores = $errores;
                $this->view->mensaje = "Errores en el formulario.";
                $this->view->articulo = $articulo;
                $this->nuevo();

                
            } else {
   
                # Datos validados: insertamos registros y movemos imagen 
                move_uploaded_file($articulo['imagen']['tmp_name'],"imagenes/".$articulo['imagen']['name']);
                
                # Actualizo el campo imagen con name
                $articulo['imagen'] = $articulo['imagen']['name'];
        
                # La función insert devuelve el mensaje resultante de añadir el registro
                $mensaje=$this->model->insert($articulo);
                
                $this->view->mensaje = $mensaje;
                $this->render();
                
            } 

            
            
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