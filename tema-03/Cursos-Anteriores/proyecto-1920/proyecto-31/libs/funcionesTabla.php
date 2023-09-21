<?php
    
  /** Fichero: funcionesTabla.php
	*   Descripción: colección de funciones para la gestión de una tabla
  *   Proyecto: Proyecto 3.1
	*   Autor: Juan Carlos
	*   Fecha: 22/10/2019
	**/
  
  /*
    generarTabla()
    Genera una matriz de libros indice primario escalar 
    índice secundario asociativo
    Argumentos de Entrada: null
    Salida: Tabla de artículos
  */

  function generarTabla() {
    $tabla = 

    [
        
        [ 
          "id" => 1,
          "Descripcion" => "Portátil - HP 15-DB0074NS",
          "Modelo" => "HP 15-DB0074NS",
          "Categoria" => "Portátil",
          "Unidades" => 120,
          "Precio" => 379
  ],
  [ 
          "id" => 2,
          "Descripcion" => "Portátil AMD A4-9125, 8 GB RAM, 125 GB",
          "Modelo" => "HP 255 G7, 15.6",
          "Categoria" => "Portátil",
          "Unidades" => 200,
          "Precio" => 20.50
    ],
        [ 
          "id" => 3,
          "Descripcion" => "PC sobremesa - Lenovo Intel® Core™ i3-8100",
          "Modelo" => "ideacentre 510S-07ICB",
          "Categoria" => "PC sobremesa",
          "Unidades" => 50,
          "Precio" => 12.95
        ],
        [ 
          "id" => 4,
          "Descripcion" => "PC Sobremesa - HP 290 APU AMD Dual-Core A6",
          "Modelo" => "HP 290-a0002ns",
          "Categoria" => "PC sobremesa",
          "Unidades" => "Novela",
          "Precio" => 15.95
        ],
    ];

    return $tabla;

  }

  function generarCategorias() {

    $categorias = [

      "Portátil",
      "PC sobremesa",
      "Pantalla",
      "Componente",
      "Impresora"
      
    ];

    return $categorias;

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

 
