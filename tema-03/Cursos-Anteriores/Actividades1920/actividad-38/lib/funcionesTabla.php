<?php
    
  /** Fichero: funcionesTabla.php
	*   Descripción: colección de funciones para la gestión de una tabla
  *   Proyecto: Actividad 3.5
  *   Versión: 0.0
	*   Autor: Juan Carlos
	*   Fecha: 16/10/2019
	**/
  
  /*
    generarTabla()
    Genera una matriz de libros indice primario escalar 
    índice secundario asociativo
    Argumentos de Entrada: null
    Salida: Tabla de libros
  */

  function generarTabla() {
    $tabla = 

    [
        
        [ 
            "id" => 1,
            "Titulo" => "Los Señores del tiempo",
            "Autor" => "García Sénz de Urturi",
            "Editorial" => "Anaya",
            "Genero" => "Novela",
            "Precio" => 19.50
    ],
    [ 
            "id" => 2,
            "Titulo" => "El Rey recibe",
            "Autor" => "Eduardo Mendoza",
            "Editorial" => "Santillana",
            "Genero" => "Novela",
            "Precio" => 20.50
    ],
        [ 
          "id" => 3,
          "Titulo" => "Diario de una mujer",
          "Autor" => "Eduardo Mendoza",
          "Editorial" => "Síntesis",
          "Genero" => "Juvenil",
          "Precio" => 12.95
        ],
        [ 
          "id" => 4,
          "Titulo" => "El Quijote de la Mancha",
          "Autor" => "Miguel de Cervantes",
          "Editorial" => "Neptuno",
          "Genero" => "Novela",
          "Precio" => 15.95
        ],
    ];

    return $tabla;

  }

  /*
    Eliminar()
    Permite eliminar un elemento de la tabla
    Entrada: 
      * tabla() - la tabla con los datos
      * key - índice del elemento de la tabla que se desea elimnar
    Devuelve:
      * tabla con el elemento eliminado
  */
  function eliminar($tabla, $key) {

    unset($tabla[$key]);
    # reconstruye los índices primarios de la tabla
    $tabla = array_values($tabla);
    return $tabla;

  }

  function actualizar($tabla, $registro, $key) {

    $tabla[$key]=$registro;
    return $tabla;

  }



  function nuevo($tabla, $registro) {

		$tabla[] = $registro;
		return ($tabla);

  }
  
  function ordenar($tabla, $campo) {

		foreach ($tabla as $key => $registro) {
      $aux[$key] = $registro[$campo];
    }
		array_multisort($aux, SORT_ASC, $tabla);

		return ($tabla);

  }
  
  function filtrar($tabla, $expresion) {

		$aux = array();
	
		foreach ($tabla as $key => $registro) {
			if (in_array($expresion, $registro)) {

				$aux[] = $registro;

			}
		}

		return ($aux);

  }
  
  # Devuelve el último id de la tabla libros

  function ultimoId($tabla) {
    $ultimo = end($tabla);
    return $ultimo["id"];
  }

 
