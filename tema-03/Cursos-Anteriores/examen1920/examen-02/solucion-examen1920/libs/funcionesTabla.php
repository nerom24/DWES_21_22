<?php
    
  /** Fichero: funcionesTabla.php
	*   Descripción: colección de funciones para la gestión de una tabla
  *   Proyecto: Proyecto 3.1
	*   Autor: Juan Carlos
	*   Fecha: 22/10/2019
	**/
  
  /*
    generarTabla()
    Genera una matriz de películas indice primario escalar 
    índice secundario asociativo
    Argumentos de Entrada: null
    Salida: Tabla de artículos
  */

  function generarTabla() {
    $tabla = 

    [
        
        [ 
          "id" => 1,
          "Nombre" => "Joker",
          "Email" => "joker@gmai.es",
          "Password" => "123456",
          "Fecha" => "2019/12/12",
          "Perfiles" => ["Administrador", "Registrado"],
          
        ],

        [ 
          "id" => 2,
          "Nombre" => "Marin",
          "Email" => "marin@gmail.es",
          "Password" => "123456",
          "Fecha" => "2019/11/12",
          "Perfiles" => ["Registrado"],
          
        ],

        [ 
          "id" => 3,
          "Nombre" => "Moreno",
          "Email" => "moreno@gmail.es",
          "Password" => "123456",
          "Fecha" => "2019/11/12",
          "Perfiles" => ["Programador", "Registrado"],
          
        ],

        [ 
          "id" => 4,
          "Nombre" => "Rodríguez",
          "Email" => "rodriguez@gmail.es",
          "Password" => "123456",
          "Fecha" => "2019/11/12",
          "Perfiles" => ["Registrado"],
          
        ],
  
    ];

    return $tabla;

  }

  function generarPerfiles() {

    $perfiles = [

      "Administrador",
      "Editor",
      "Programador",
      "Registrado"
    ];

    return $perfiles;

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

 
