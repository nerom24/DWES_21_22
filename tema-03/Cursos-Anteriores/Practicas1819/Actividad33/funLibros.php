<?php 
	
	/** Fichero: funLibros.php
	*   Descripción: colección de funciones para la gestión de los libros
	*   Curso 18:19
	*   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/

	# Genera la matriz de libros con los datos de inicio.

	function generaMatriz() {

	$tabla = 

		[
				
				[ 
					"idLibro" => 1,
					"Titulo" => "Los Señores del tiempo",
					"Autor" => "García Sénz de Urturi",
					"Genero" => "Novela",
					"Editorial" => "Planeta",
					"Paginas" => 448,
					"Precio" => 19.50
				],
				[ 
					"idLibro" => 2,
					"Titulo" => "El Rey recibe",
					"Autor" => "Eduardo Mendoza",
					"Genero" => "Novela",
					"Editorial" => "Seix Barral",
					"Paginas" => 368,
					"Precio" => 20.50
				],
				[ 
					"idLibro" => 3,
					"Titulo" => "Diario de una mujer",
					"Autor" => "Eduardo Mendoza",
					"Genero" => "Juvenil",
					"Editorial" => "Destino",
					"Paginas" => 144,
					"Precio" => 12.95
				],
		];

		return($tabla);

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

 