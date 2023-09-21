<?php

    /*  Fichero: funciones_articulos.php
        Descripción: Funciones para la gestión completa de una tabla de artículos
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */



    # Generamos el array de categorías
    function generar_tabla_categorias(){
    
        #Creo la tabla y la devuelvo
        $categorias = [
            'Portátil',
            'PC sobremesa',
            'Componente',
            'Pantalla',
            'Impresora',
            'Tablet',
            'Móviles'
        ];
        return $categorias;
    }


    # Generamos la tabla a partir de arrays cuyos índices indican el nombre del campo de una tabla
    function generar_tabla(){
        

        $tabla = [
            
            [
                'id' => 1,
                'descripcion'=>'Portátil HP MD12345',
                'modelo'=>'HP 15-1234-20',
                'categoria'=> 'Portátil',
                'unidades'=> 12,
                'precio'=> 550.50
            ],
            [
                'id' => 2,
                'descripcion'=>'Tablet - Samsung Galaxy Tab A (2019)',
                'modelo'=>'Exynos',
                'categoria'=> 'Tablet',
                'unidades'=> 200,
                'precio'=> 300
            ],
            [
                'id' => 3,
                'descripcion'=>'Impresora multifunción - HP',
                'modelo'=>'DeskJet 3762',
                'categoria'=> 'Impresora',
                'unidades'=> 2000,
                'precio'=> 69
            ],
            [
                'id' => 4,
                'descripcion'=>'TV LED 40" - Thomson 40FE5606 - Full HD',
                'modelo'=>'Thomson 40FE5606',
                'categoria'=> 'Pantalla',
                'unidades'=> 300,
                'precio'=> 259
            ],
            [
                'id' => 5,
                'descripcion'=>'PC Sobremesa - Acer Aspire XC-830',
                'modelo'=>'Acer Aspire XC-830',
                'categoria'=> 'PC sobremesa',
                'unidades'=> 20,
                'precio'=> 329
            ],

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
