<?php
    
    /*
    Fichero: funciones_libros.php
    Descripción: librería de funciones para la gestión completa 
                 de una tabla de libros
    Fecha: 22/10/2020
    Autor: Juan Carlos
    */

    # Generar el tabla de datos
    function generar_tabla_libros() {

        $tabla = [ 
    
            [ 
                'id' => 1,
                'titulo'=>'Los Señores del tiempo',
                'autor'=>'García Sénz de Urturi',
                'genero'=> 'Novela',
                'precio'=> 19.5
            ],
            [ 
                'id' => 2,
                'titulo'=>'El Rey recibe',
                'autor'=>'Eduardo Mendoza',
                'genero'=> 'Novela',
                'precio'=> 20.5
            ],
            [ 
                'id' => 3,
                'titulo'=>'Diario de una mujer',
                'autor'=>'Eduardo Mendoza',
                'genero'=> 'Juvenil',
                'precio'=> 12.95
            ],
    
            [ 
                'id' => 4,
                'titulo'=>'El Quijote de la Mancha',
                'autor'=>'Miguel de Cervantes',
                'genero'=> 'Novela',
                'precio'=> 15.95
            ],
            [ 
                'id' => 5,
                'titulo'=>'El Perfume',
                'autor'=>'Patrick Süskind',
                'genero'=> 'Horror',
                'precio'=> 20.95
            ]
    
        ];

        return $tabla;

    }

    # Eliminar elemento del tabla
    function eliminar($tabla, $indice) {

        unset($tabla[$indice]);
        
        # reconstruye los índices primarios de la tabla
        $tabla = array_values($tabla);
        
        return $tabla;

    }

    # Ordenar por uno de los campos de la tabla
    function ordenar($tabla, $campo) {

		foreach ($tabla as $key => $registro) {
            $aux[$key] = $registro[$campo];
        }
		array_multisort($aux, SORT_ASC, $tabla);

		return ($tabla);

    }

    # Actualizar registro
    function actualizar($tabla, $registro, $indice) {

        $tabla[$indice]=$registro;
        return $tabla;
    
      }

    
    # Añadir nuevo elemento a la tabla
    function nuevo($tabla, $registro) {

		$tabla[] = $registro;
		return ($tabla);

    }

    # Filtrar los registros a partir de una expresión de filtrado
    function filtrar($tabla, $expresion) {

        $aux = [];
	
		foreach ($tabla as $registro) {
			if (in_array($expresion, $registro)) {

				$aux[] = $registro;

			}
		}

		return ($aux);

	}

?>