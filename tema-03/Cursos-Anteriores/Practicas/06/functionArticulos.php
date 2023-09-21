<?php 

/* 
	funciones Gestión Artículos   

*/

//Inicializa 5 artículos
function loadArticulos() {

	$pArticulos= [

		[
			'Codigo' => '0001',
			'Descripcion' => 'Disco Duro SSD 1 TB',
			'Modelo' => 'Samsung 850',
			'Categoria' => 'Almacenamiento',
			'Unidades' => '20',
			'Precio' => '95.50'
		],

		[
			'Codigo' => '0002',
			'Descripcion' => 'SD card 64GB',
			'Modelo' => 'KingStoe 64',
			'Categoria' => 'Almacenamiento',
			'Unidades' => '50',
			'Precio' => '35.50'
		],

		[
			'Codigo' => '0003',
			'Descripcion' => 'Consola Nintendo',
			'Modelo' => 'Nintendo Switch',
			'Categoria' => 'Consolas',
			'Unidades' => '1',
			'Precio' => '399.99'
		],

		[
			'Codigo' => '0004',
			'Descripcion' => 'Juego Legend of Zelda',
			'Modelo' => 'Legend of Zelda: BotW',
			'Categoria' => 'Videojuegos',
			'Unidades' => '20',
			'Precio' => '59.95'
		],

		[
			'Codigo' => '0005',
			'Descripcion' => 'Television 4k 52"',
			'Modelo' => 'LG4UGT52',
			'Categoria' => 'TVs',
			'Unidades' => '5',
			'Precio' => '699.98'
		],


	];
	
	return ($pArticulos);

}


//Actualiza o añade un nuevo valor en la agenda
function addArticulo($pArticulo, $cod, $desc, $model, $cat, $unit, $precio) {

	$pArticulo[] = [$cod, $desc, $model, $cat, $unit, $precio];
	
	return($pArticulo);
}
function actualizarArticulo($pArticulo, $cod, $desc, $model, $cat, $unit, $precio, $key) {

	$pArticulo[$key] = [$cod, $desc, $model, $cat, $unit, $precio];

	
	return($pArticulo);
}

//Eliminar un registro de la agenda
function deleteArticulo($pArticulo, $key) {
	unset($pArticulo[$key]);

	return ($pArticulo);

 }

 //Ordenar Array
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
