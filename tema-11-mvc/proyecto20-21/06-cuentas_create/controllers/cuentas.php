<?php

    class Cuentas Extends Controller {

        function __construct() {

            parent ::__construct();
            
            $this->view->datos = null;
        }

        #
        # Muestra los detalles de las cuentas
        #
        function render() {

            # iniciamos sesión
            sec_session_start();

            # Capa de comprobación de autentificación
            if (!isset($_SESSION['id'])) {

                header("location:" .URL. "login");
            }

            # Capa de comprobación de asignación de privilegios
            if (!in_array($_SESSION['id_rol'], $GLOBALS['consultar'])) {

                $_SESSION['error'] = "Operación sin privilegios";

                header("location:" .URL. "login");
            } 

            # Si existe algún mensaje 
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            $cuentas = $this->model->get();
            $this->view->cuentas = $cuentas; 
            $this->view->render('cuentas/main/index'); 
        }

        #
        # Crear nueva cuenta
        #
        function create() {

            # iniciamos sesión
            sec_session_start();

            # Capa de comprobación de autentificación
            if (!isset($_SESSION['id'])) {

                header("location:" .URL. "login");
            }

            # Capa de comprobación de asignación de privilegios
            if (!in_array($_SESSION['id_rol'], $GLOBALS['crear'])) {

                $_SESSION['mensaje'] = "Operación sin privilegios";

                header("location:" .URL. "login");
            } 

            # Si existe algún mensaje 
            if (isset($_SESSION['mensaje'])) {

                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }

            # Inicializamos los valores del formulario
            $this->view->cliente_id = -1;
            $this->view->num_cuenta = null;
            $this->view->saldo = 0;

            # Si existe algún error
            if (isset($_SESSION['error'])) {

                # Mensaje de error
                $this->view->error = $_SESSION['error'];
                unset($_SESSION['error']);

                # Variables de autorrelleno
                $this->view->cliente_id = $_SESSION['cliente_id'];
                $this->view->num_cuenta = $_SESSION['num_cuenta'];
                $this->view->saldo = $_SESSION['saldo'];
                unset($_SESSION['cliente_id']);
                unset($_SESSION['num_cuenta']);
                unset($_SESSION['saldo']);

                # Tipo de error
                $this->view->errores = $_SESSION['errores'];
               
                unset($_SESSION['errores']);

            }

            $this->view->clientes = $this->model->getClientesSelect();

            $this->view->render('cuentas/create/index');

        }

         #
        # Crear nueva cuenta
        #
        function validate() {

            # iniciamos sesión
            sec_session_start();

            # Capa de comprobación de autentificación
            if (!isset($_SESSION['id'])) {

                header("location:" .URL. "login");
            }

            # Capa de comprobación de asignación de privilegios
            if (!in_array($_SESSION['id_rol'], $GLOBALS['crear'])) {

                $_SESSION['mensaje'] = "Operación sin privilegios";

                header("location:" .URL. "login");
            } 

            # Saneamos el formulario
            $cliente_id = filter_var($_POST['cliente_id'],FILTER_SANITIZE_NUMBER_INT);
            $num_cuenta = filter_var($_POST['num_cuenta'],FILTER_SANITIZE_STRING);
	        $saldo = filter_var($_POST['saldo'],FILTER_SANITIZE_NUMBER_FLOAT);

            # Validaciones

            $errores = array();

            # Validar cliente_id
            if (!$this->model->validarClienteId($cliente_id)) {
                $errores['cliente_id'] = "Cliente no válido";
            }

            # Validar num_cuenta
            if (!$this->model->validarNum_cuenta($num_cuenta)) {
                $errores['num_cuenta'] = "Número de Cuenta no Válido";
            }

            # Validar saldo


            if (!empty($errores)) {

                $_SESSION['errores'] = $errores;
                $_SESSION['cliente_id'] = $cliente_id;
                $_SESSION['num_cuenta'] = $num_cuenta;
                $_SESSION['saldo'] = $saldo;
                $_SESSION['error'] = "Fallo en la validación del formulario";
                
                header("location:" .URL. "cuentas/create");
       
            } else {
               
               # Añade nueva cuenta
               $this->model->create($cliente_id, $num_cuenta, $saldo);
       
               $_SESSION['mensaje'] = "Cuenta creada correctamente";
               
               #Vuelve login
               header("location:". URL. "cuentas");
             }

            

        }

        


    }

?>