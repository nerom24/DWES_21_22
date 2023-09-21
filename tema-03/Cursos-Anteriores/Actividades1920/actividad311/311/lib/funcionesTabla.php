<?php

/*  Fichero: funcionesTabla.php
    Descipción: Colección de funciones para la gestión de una tabla.
    Version: 0.0
    Autor: Pablo Barragan Los Santos
    Fecha: 16/10/2019
*/

    # @Function: generaTabla()
    # @description: genera un array de articulos.
    # @param: 
    #   $tabla:
    #    
    # @return: $tabla - array
    # @author: Pablo Barragan
    function generarTabla()
    {
        $tabla = [
            ["id" => 1,
            "descripcion" => "Asus ZenBook UX430UA-GV257",
            "modelo" => "ZenBook UX430UA-GV257",
            "categoria" => "Portatil",
            "unidades" => "23",
            "precio" => 599],
            ["id" => 2,
            "descripcion" => "Lenovo V130-15IKB Intel Core i5",
            "modelo" => "Lenovo V130-15IKB",
            "categoria" => "Portatil",
            "unidades" => "12",
            "precio" => 442.59],
            ["id" => 3,
            "descripcion" => "Intel Core i7-9700K 3.6Ghz",
            "modelo" => "I7-9700K",
            "categoria" => "Componente",
            "unidades" => "50",
            "precio" => 378.90],
            ["id" => 4,
            "descripcion" => "Logitech Keyboard K120 Teclado USB",
            "modelo" => "K120",
            "categoria" => "Periferico",
            "unidades" => "200",
            "precio" => 10.99],
            ["id" => 5,
            "descripcion" => "Brother HL-L2310D Impresora Láser Monocromo",
            "modelo" => "HL-L2310D",
            "categoria" => "Impresora",
            "unidades" => "39",
            "precio" => 73.99],
            ["id" => 6,
            "descripcion" => "PcCom Basic Elite Pro Intel Core i7-8700/8GB",
            "modelo" => "Basic Elite Pro",
            "categoria" => "PC Sobremesa",
            "unidades" => "52",
            "precio" => 602.50],
            
        ];
        return $tabla;
    }

    # @Function: generaCategorias()
    # @description: genera un array de categorias.
    # @param: 
    #   $tabla:
    #    
    # @return: $tabla - array
    # @author: Pablo Barragan
    # @date: 23/10/2019
    function generarCategorias()
    {
        $tabla = [
            "Portatil",
            "PC Sobremesa",
            "Componente",
            "Pantalla",
            "Impresora",
            "Periferico",
            "Televisión"
        ];
        return $tabla;
    }

    # @Function: eliminar($tabla, $indice)
    # @description: elimina un elemento del array $tabla
    # @param: 
    #   $tabla: array
    #   $indice: entero
    #    
    # @return: $tabla - array
    # @author: Pablo Barragan

    function eliminar($tabla, $indice)
    {
        unset($tabla[$indice]);
        $tabla = array_values($tabla);
        return $tabla;
    }

    # @Function: ordenar($tabla, $campo)
    # @description: retorna la $tabla ordenada de manera ascendente segun el $campo
    # @param: 
    #   $tabla: array
    #   $campo: string
    #    
    # @return: $tabla - array
    # @author: Pablo Barragan
    function ordenar($tabla, $campo)
    {
        foreach($tabla as $key => $registro){
            $aux[$key] = $registro[$campo];
        }
        array_multisort($aux, SORT_ASC, $tabla);

        return $tabla;
    }

    # @Function: actualizar($tabla, $registro, $indice)
    # @description: actualiza un registro del array segun el $indice y $registro introducido. Retorna la $tabla actualizada
    # @param: 
    #   $tabla: array
    #   $registro: array con el nuevo registro
    #   $indice: entero del registro a actualizar
    #    
    # @return: $tabla - array
    # @author: Pablo Barragan

    function actualizar($tabla, $registro, $indice)
    {
        $tabla[$indice] = $registro;
        return $tabla;
    }

    # @Function: nuevo($tabla, $registro)
    # @description: añade un nuevo $registro al final del array $tabla.
    # @param: 
    #   $tabla: array
    #   $registro: array
    #    
    # @return: $tabla - array
    # @author: Pablo Barragan
    function nuevo($tabla, $registro)
    {
        $tabla[] = $registro;
        return $tabla;
    }
    
    # @Function: filtrar($tabla, $expresion)
    # @description: filtra la $tabla segun la $expresion introducida. Busqueda exacta.
    # @param: 
    #   $tabla: array
    #   $expresion: string
    #    
    # @return: $tabla - array
    # @author: Pablo Barragan
    function filtrar($tabla, $expresion)
    {
        $aux = array();

        foreach($tabla as $key => $registro){
            if (in_array($expresion, $registro)){
                $aux[] = $registro;
            }
        }

        return ($aux);
    }

    # @Function: ultimoId($tabla)
    # @description: muestra el ultimo id del array $tabla
    # @param: 
    #   $tabla: array
    #    
    # @return: $tabla - array
    # @author: Pablo Barragan
    function ultimoId($tabla)
    {
        $ultimoLibro = end($tabla);
        $ultimoId = $ultimoLibro["id"];

        return $ultimoId;
    }

    
?>