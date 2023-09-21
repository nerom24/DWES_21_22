<?php

    class Movimientos Extends Controller {

        function __construct() {

            parent ::__construct();
        }

        function render() {
           
            
        }

        # Muestra los movimientos de una cuenta
        # $param - id de la cuenta
        function cuenta($param) {

            //Actualizo el titulo de la página
            $this->view->title = "Movimientos - Gesbank";

            //Estraigo el id de la cuenta que voy a mostrar
            $this->view->id = htmlspecialchars($param[0]);
            
            //Obtener los datos de movimientos que se representan en la tabla principal
            $this->view->movimientos = $this->model->read($this->view->id);

            // Obtener datos de la cuenta
            $this->view->cuentas = $this->model->get($this->view->id);

            $this->view->contador = 0;
            
            //Mostrar la vista
            $this->view->render('movimientos/cuenta/index');

        }

        function nuevo($param){
            //Actualizo el titulo de la página
            $this->view->title = "Añadir - movimiento - Gesbank";

            //Estraigo el id de la cuenta que voy a crear el movimiento nuevo
            $this->view->id = htmlspecialchars($param[0]);

            $this->view->cuentas = $this->model->get($this->view->id);

            //Cargo la vista
            $this->view->render('movimientos/nuevo/index');
        }

        function create($param){
            //Estraigo el id de la cuenta que voy a crear el movimiento nuevo
            $this->view->id = htmlspecialchars($param[0]);
           
            $cuenta = $this->model->get($this->view->id);

            $movimiento = new Movimientos();

            $movimiento->id_cuenta = $cuenta->id;
            $movimiento->concepto = htmlspecialchars($_POST['concepto']);
            $movimiento->cantidad = htmlspecialchars($_POST['cantidad']);
            $movimiento->tipo = $_POST['tipo'];
            $movimiento->saldo = $cuenta->saldo + (float) ($_POST['tipo'] == 'I' ? $movimiento->cantidad : -$movimiento->cantidad);
            
            $this->model->create($movimiento);

            // Actualizmos los datos de la cuenta
            $cuenta->fecha_ul_mov = date('Y-m-d H:i:s');
            $cuenta->num_movtos++;
            $cuenta->saldo = $movimiento->saldo;

            // Aplicar cambios en la cuenta
            $this->model->actualizarCuenta($cuenta);

            header('Location: ' . URL . 'movimientos/cuenta/' . $this->view->id);
        }

        function ordenar($param){

            //Título de la página
            $this->view->title = 'Ordenar Movimientos - Gesbank';

            // Obtener cuenta
            $this->view->cuentas = $this->model->get((int) $param[0]);

            // Criterio de ordenación
            $this->view->criterio = (int) $param[1];

            // Mostramos 
            $this->view->movimientos = $this->model->order($this->view->cuentas->id, $this->view->criterio);

            $this->view->contador = 0;

            // Mostrar vista
            $this->view->render('movimientos/main/index');

        }

        function buscar(){

        // Título de la página
        $this->view->title = 'Buscar movimientos - Gesbank';

        // Obtener cuenta
        $this->view->cuentas = $this->model->get((int) $_GET['cuenta']);

        // Expresión de búsqueda
        $this->view->busqueda = htmlspecialchars($_GET['busqueda']);

        // se representan en la tabla principal
        $this->view->movimientos = $this->model->filter($this->view->cuentas->id, $this->view->busqueda);

        $this->view->contador = 0;

        // Mostrar vista
        $this->view->render('movimientos/main/index');

        }

        
    }

?>