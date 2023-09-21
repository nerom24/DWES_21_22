<?php
    
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
 
