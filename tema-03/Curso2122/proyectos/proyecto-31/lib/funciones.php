<?php

/* 
    LIBRERÍA php

    Archivo: funciones.php
    Descripción: Librería de funciones para CRUD tabla articulos
    Autor: Juan Carlos
    Fecha: 20/20/21
    Versión: 1.0
*/

# Genero la tabla de categorías
function generar_tabla_categorias(){
    
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
function generarTabla(){
        
    $tabla = [
        
        [
            'id' => 1,
            'descripcion'=>'Portátil HP MD12345',
            'modelo'=>'HP 15-1234-20',
            'categoria'=> 0,
            'unidades'=> 12,
            'precio'=> 550.50
        ],
        [
            'id' => 2,
            'descripcion'=>'Tablet - Samsung Galaxy Tab A (2019)',
            'modelo'=>'Exynos',
            'categoria'=> 5,
            'unidades'=> 200,
            'precio'=> 300
        ],
        [
            'id' => 3,
            'descripcion'=>'Impresora multifunción - HP',
            'modelo'=>'DeskJet 3762',
            'categoria'=> 4,
            'unidades'=> 2000,
            'precio'=> 69
        ],
        [
            'id' => 4,
            'descripcion'=>'TV LED 40" - Thomson 40FE5606 - Full HD',
            'modelo'=>'Thomson 40FE5606',
            'categoria'=> 3,
            'unidades'=> 300,
            'precio'=> 259
        ],
        [
            'id' => 5,
            'descripcion'=>'PC Sobremesa - Acer Aspire XC-830',
            'modelo'=>'Acer Aspire XC-830',
            'categoria'=> 1,
            'unidades'=> 20,
            'precio'=> 329
        ]

    ];

    return $tabla; 

}
/*
    Function: eliminar()
    Descripción: Elimina elemento de la tabla
    Entrada:
            - tabla
            - indice
    Salida:
            - tabla actualizada
*/
function eliminar($tabla, $indice) {

    # elimina el elemento de la tabla
    unset($tabla[$indice]);

    # reconstruye los índices primarios de la tabla
    $tabla = array_values($tabla);

    return $tabla;
    
}

/*
    Function: nuevo()
    Descripción: Añade un nuevo elemento a la tabla
    Entrada:
            - tabla (array)
            - nuevo registro de la tabla (array indexado)
    Salida:
            - tabla actualizada
*/
function nuevo($tabla, $registro) {

    $tabla[] = $registro;
    return $tabla;

}

/*
    Function: read()
    Descripción: Obtiene un libro a partir del índice
    Entrada:
            - tabla (array)
            - indice
    Salida:
            - registro
*/
function read($tabla, $indice) {

    $registro = $tabla[$indice];
    return $registro;

}

/*
    Function: update()
    Descripción: Actualiza los datos de un libro
    Entrada:
            - tabla (array)
            - registro
            - indice
    Salida:
            - tabla actualizada
*/
function update($tabla, $registro, $indice) {

    $tabla[$indice] = $registro;
    return $tabla;

}

/*
    Function: ordenar()
    Descripción: Ordena la tabla por alguno de los campos
    Entrada:
            - tabla (array)
            - criterio de ordenación
    Salida:
            - tabla ordenada
*/
function ordenar($tabla, $campo) {

    # Crea un array con los valores del campo 
    # por el que quiero ordenar
    foreach ($tabla as $key => $registro) {
        $aux[$key] = $registro[$campo];
    }
    array_multisort($aux, SORT_ASC, $tabla);

    return ($tabla);

}

/*
    Function: filtrar()
    Descripción: filtra la tabla a partir de una expresión de búsqueda
    Entrada:
            - tabla (array)
            - criterio de búsqueda
    Salida:
            - tabla filtrada
*/
function filtrar($tabla, $expresion) {

    # Recorro la tabla libros
    # Busco la expresión en cada registro mediante la función in_array()
    
    $aux=[];

    foreach ($tabla as $registro) {
        if (in_array($expresion, $registro)) {
            $aux[] = $registro;
        }
    }

    if (empty($aux)){
        $aux = $tabla;
    }
    return ($aux);

}

?>