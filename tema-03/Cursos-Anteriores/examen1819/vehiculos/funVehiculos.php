<?php 
	
	/** Fichero: funVehiculos
	*   Descripción: colección de funciones para la gestión de la matriz vehículos
	*   Curso 18:19
	*   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/

	# Genera la matriz de vehículos con los datos de inicio.

	function generaMatriz() {

	$tabla = 

		[
				
				[ 
					"id" => 1,
					"Fabricante" => "Seat",
					"Modelo" => "Ibiza",
					"Combustible" => "Diesel",
					"Motor" => "1.400 ccc",
					"Precio" => 12000
				],
				[ 
					"id" => 2,
					"Fabricante" => "Audi",
					"Modelo" => "Q3",
					"Combustible" => "Diesel",
					"Motor" => "1.890 ccc",
					"Precio" => 30000
				],
				[ 
					"id" => 3,
					"Fabricante" => "Reanult",
					"Modelo" => "Fuga",
					"Combustible" => "Gasolina",
					"Motor" => "1.400 ccc",
					"Precio" => 21000
				],
		];

		return($tabla);

	}

	# Función que genera la matriz de tipos de combustibles.

	function generaTiposCombustibles() {

		$tipos = ["Gasolina", "Diesel", "Híbrido", "Eléctrico", "Gas"];

		return ($tipos);
	}

	# Función que devuelve los registros de una tabla

	function cuenta($tabla) {

		return (count($tabla));

	}


	
	/**
	 * Fucnión: eliminarElemento()
	 * Parámetros: tabla, indice
	 * Valor Devuelto: matriz con el indice eliminado
	 * Descripción: Se desea eliminar de la matriz el indice correspondiente
	 * Fecha: 17/10/2018
	 * Autor: Juan Carlos
	 */

	function eliminarElemento($tabla, $key) {

		unset($tabla[$key]);
		$tabla = array_values($tabla);
		return ($tabla);

	}

	/**
	 * @función: ordenarTabla()
	 * @descripcion: Ordena la tabla a partir del criterio indicado
	 * @param: tabla
	 * @param: campo
	 * @return: tabla ordenada por el campo indicado
	 * @fecha: 17/10/2018
	 * @author Juan Carlos 
	 */

	function ordenarTabla($tabla, $campo) {

		foreach ($tabla as $key => $registro) {
		$aux[$key] = $registro[$campo];
		}

		array_multisort($aux, SORT_ASC, $tabla);

		return ($tabla);

	}

	/**
	 * @función: actualizarTabla()
	 * @descripcion: Actuliza los valores de un registro de la tabla
	 * @param: tabla
	 * @param: key
	 * @param: registro
	 * @return: tabla con los valores actualizados
	 * @fecha: 17/10/2018
	 * @author Juan Carlos 
	 */

	function actualizarTabla($tabla, $key, $registro) {

		$tabla[$key] = $registro;
		return ($tabla);

	}

	/**
	 * @función: nuevoRegistroTabla()
	 * @descripcion: Añade nuevo registro a la tabla
	 * @param: tabla
	 * @param: registro
	 * @return: tabla con los valores actualizados
	 * @fecha: 17/10/2018
	 * @author Juan Carlos 
	 */

	function nuevoRegistroTabla($tabla, $registro) {

		$tabla[] = $registro;
		return ($tabla);

	}

	/**
	 * @función: filtrarTabla()
	 * @descripcion: filtra elementos de la tabla a partir de una expresión
	 * @param: tabla
	 * @param: expresion
	 * @return: tabla filtrada
	 * @fecha: 17/10/2018
	 * @author Juan Carlos 
	 */

	function filtrarTabla($tabla, $expresion) {

		$aux = array();
	
		foreach ($tabla as $key => $registro) {
			if (in_array($expresion, $registro)) {

				$aux[] = $registro;

			}
		}

		return ($aux);

	}

 ?>

 