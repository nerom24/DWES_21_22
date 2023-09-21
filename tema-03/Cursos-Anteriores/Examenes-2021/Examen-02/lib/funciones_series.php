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
            "Romántico",
            "Aventura",
            "Comedia",
            "Musical",
            "Terror",
            "Bélico",
            "Dramático",
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
              "titulo" => "Juego de Tronos",
              "director" => "David Benioff y D. B. Weiss ",
              "nacionalidad" => "Inglaterra",
              "estreno" => "2020-10-23",
              "plataforma" => "HBO",
              "temporadas" => 8,
              "generos" => ["Dramático", "Suspense", "Bélico"]
              
            ],
            [ 
                "id" => 2,
                "titulo" => "Gambito de Damas",
                "director" => "Scott Frank",
                "nacionalidad" => "Inglaterra",
                "estreno" => "2011-04-17",
                "plataforma" => "Netflix",
                "temporadas" => 1,
                "generos" => ["Romántico", "Dramático"]
                
              ],
              [ 
                "id" => 3,
                "titulo" => "Peaky Blinders",
                "director" => "Caryn Mandabach Productions",
                "nacionalidad" => "Inglaterra",
                "estreno" => "2013-09-13",
                "plataforma" => "Netflix",
                "temporadas" => 6,
                "generos" => ["Bélico", "Dramático"]
                
              ],
              [ 
                "id" => 4,
                "titulo" => "Ozark",
                "director" => "Jason Bateman",
                "nacionalidad" => "Estados Unidos",
                "estreno" => "2017-07-27",
                "plataforma" => "Netflix",
                "temporadas" => 4,
                "generos" => ["Bélico", "Dramático"]
                
              ]
        ];
        
        return $tabla; 

    }


    # Elimina un elemento del array a partir del índice
    # Reconstruye los índices
    function eliminar($tabla, $indice){

        unset ($tabla[$indice]); 
        $tabla = array_values($tabla); 
        return $tabla; 
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
    function actualizar($tabla, $registro, $indice){ 
        $tabla[$indice] = $registro;
        return $tabla;
    }

    # Añade un elemento al array
    function nuevo($tabla, $registro){
        $tabla[] = $registro;   
        return $tabla;
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
    function ultimo_id($tabla){
        $ultimo_id = count($tabla) + 1;
        
        return $ultimo_id;
    }


?>
