<?php 

/* 
	Descripción: funciones Gestión Vehículos   
	Examen 


*/


//Inicializa 5 artículos
function loadVehiculos() {

	$pVehiculos= [

		[
			'Codigo' => '0001',
			'Fabricante' => 'AUDI',
			'Modelo' => 'A3',
			'Combustible' => 'Gasolina',
			'Motor' => '1300',
			'Precio' => '25.500'
		],
		[
			'Codigo' => '0002',
			'Fabricante' => 'SEAT',
			'Modelo' => 'Ibiza',
			'Combustible' => 'Diesel',
			'Motor' => '1200',
			'Precio' => '15.500'
		],
		[
			'Codigo' => '0003',
			'Fabricante' => 'RENAULT',
			'Modelo' => 'Clio',
			'Combustible' => 'Híbrido',
			'Motor' => '1400',
			'Precio' => '20.500'
		],
		[
			'Codigo' => '0004',
			'Fabricante' => 'AUDI',
			'Modelo' => 'Q3',
			'Combustible' => 'Diesel',
			'Motor' => '1500',
			'Precio' => '30.500'
		]
		


	];
	
	return ($pVehiculos);

}

//Actualiza o añade un nuevo vehiculo
function addVehiculo($pVehiculos, $pCodigo, $pFabricante, $pModelo, $pCombustible, $pMotor, $pPrecio) {

	$pVehiculos[] = [$pCodigo, $pFabricante, $pModelo, $pCombustible, $pMotor, $pPrecio];
	
	return($pVehiculos);
}


function updateVehiculo($pVehiculos, $pCodigo, $pFabricante, $pModelo, $pCombustible, $pMotor, $pPrecio, $key) {

	$pVehiculos[$key] = [$pCodigo, $pFabricante, $pModelo, $pCombustible, $pMotor, $pPrecio];
	
	return($pVehiculos);
}

//Eliminar un registro de la agenda
function deleteVehiculo($pVehiculos, $key) {
	unset($pVehiculos[$key]);

	return ($pVehiculos);

 }

 //Ordenar Array por Campos

 function array_sort_by(&$arrIni, $col, $order = SORT_ASC) 
{
    $arrAux = array();
    foreach ($arrIni as $key=> $row) 
    {
        $arrAux[$key] = is_object($row) ? $arrAux[$key] = $row->$col : $row[$col];
        $arrAux[$key] = strtolower($arrAux[$key]);
    }
    array_multisort($arrAux, $order, $arrIni);
}

?>
