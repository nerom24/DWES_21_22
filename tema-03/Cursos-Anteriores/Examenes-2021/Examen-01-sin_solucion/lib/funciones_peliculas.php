<?php

    /*  Fichero: funciones_articulos.php
        Descripción: Funciones para la gestión completa de una tabla de películas
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */



    # Generamos el array de categorías
    function generar_tabla_generos(){
    
        $generos = [

            "Acción",
            "Aventura",
            "Comedia",
            "Musical",
            "Terror",
            "Bélica",
            "Dramático",
            "Suspense",
            "Histórico",
            "Fantasía"
          ];
      
          return $generos;
    }


    # Generamos la tabla a partir de arrays cuyos índices indican el nombre del campo de una tabla
    function generar_tabla(){
        
        $tabla = 

        [
            
            [ 
              "id" => 1,
              "titulo" => "Joker",
              "director" => "Todd Phillips",
              "nacionalidad" => "Estados Unidos",
              "generos" => ["Dramático", "Suspense"],
              "año" => 2019
              
            ],
      [ 
              "id" => 2,
              "titulo" => "Mientras dure la guerra",
              "director" => "Alejandro Amenábar",
              "nacionalidad" => "España",
              "generos" => ["Dramático", "Histórico"],
              "año" => 2019
        ],
            [ 
              "id" => 3,
              "titulo" => "Terminator.Destino oscuro",
              "director" => "Tim Miller",
              "nacionalidad" => "Estados Unidos",
              "generos" => ["Acción", "Fantasía"],
              "año" => 2019
             
            ],
            [ 
              "id" => 4,
              "titulo" => "La vida es bella",
              "director" => "Roberto Benini",
              "nacionalidad" => "Italia",
              "generos" => ["Bélica", "Dramático", "Comedia"],
              "año" => 1997
              
            ],
            [ 
                "id" => 5,
                "titulo" => "Interstellar",
                "director" => "Christopher Nolan",
                "nacionalidad" => "Estados Unidos",
                "generos" => ["Aventura", "Dramático", "Suspense"],
                "año" => 2014
                
              ]
        ];
        return $tabla; 

    }


    # Elimina un elemento del array a partir del índice
    # Reconstruye los índices
    function eliminar(){

        
    }


    # Ordena los dato del array asociativo o tabla a partir de alguno de los campos
    function ordenar($tabla, $campo){

        foreach ($tabla as $key => $registro){
            $aux[$key] = $registro[$campo];
        }
        array_multisort($aux, SORT_ASC, $tabla); 

        return $tabla;
    }

    
    # Actualiza los datos de un registro 
    function actualizar(){ 
       
    }

    # Añade un elemento al array
    function nuevo(){
       
    }

    # Filtra el array a partir de una expresión
    function filtrar($tabla, $expresion){
       
        $aux = []; 

        foreach($tabla as $registro){ 
            if(in_array($expresion, $registro)){
                
                $aux[] = $registro; 
            }
        }

        return $aux;
    }

    # Devuelve el próximo id 
    function nuevo_id(){
        
    }


?>
