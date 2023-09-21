<?php

/* 
    LIBRERÍA php

    Archivo: funciones.php
    Descripción: Librería de funciones para CRUD tabla libros
    Autor: Juan Carlos
    Fecha: 20/20/21
    Versión: 1.0
    Funciones:  

        - generarTabla(). Dicha función no recibirá ningún argumento de 
                          entrada y devolverá la tabla libros con la misma 
                          estructura y datos que la creada en la actividad 3.4 anterior.
        - eliminar(). Dicha función recibirá dos argumentos, el primero se corresponderá con la tabla en la que vamos a eliminar un elemento y el segundo se corresponde con el índice del elemento a eliminar. 
                      Devolverá la tabla con el elemento ya eliminado.
        - ordenar(). Dicha función recibirá también dos argumentos, 
                     el primero es la tabla que deseamos ordenar, el segundo argumento es el criterio de ordenación que ha de coincidir con uno de los campos de la tabla. Devolverá la tabla ordenada por dicho criterio.
        - actualizar(). Recibirá tres argumentos: el primero la tabla, el segundo los valores del registro en forma de array y el tercero el índice del elemento que quiero actualizar. Devolverá la tabla ya actualizada.
        - nuevo(). Recibirá dos argumentos: el array con los datos de los libros y un nuevo registro con los datos del libro que deseo añadir. Evidentemente dicho libro se añadirá al final de la tabla. Devolverá de nuevo la tabla actualizada con el nuevo registro.

        - filtrar(). Recibirá dos argumentos: el primero la tabla y el segundo una expresión de búsqueda (string). Devolverá la tabla sólo con los registros que cumplan con esa expresión de búsqueda.
*/

# Generar una tabla con los datos de los libros
# Función que devolverá una array con esos datos

function generarTabla() {

    $tabla = [

        [
            'Id' => 1,
            'Título' => 'Los señores del Tiempo',
            'Autor' => 'Gracía Zend de Urturi',
            'Género' => 'Novela',
            'Precio' => 18.50
        ],

        [
            'Id' => 2,
            'Título' => 'El Rey Recibe',
            'Autor' => 'Eduardo Mendoza',
            'Género' => 'Novela',
            'Precio' => 20.50
        ],

        [
            'Id' => 3,
            'Título' => 'Diario de una Mujer',
            'Autor' => 'Eduardo Mendoza',
            'Género' => 'Juvenil',
            'Precio' => 12.95
        ],
        [
            'Id' => 4,
            'Título' => 'El Quijote de la Mancha',
            'Autor' => 'Miguel de Cervantes',
            'Género' => 'Novela',
            'Precio' => 15.95
        ],
        [
            'Id' => 5,
            'Título' => 'La Playa Infinita',
            'Autor' => 'Antonio Iturbe',
            'Género' => 'Historia',
            'Precio' => 9.70
        ],
        [
            'Id' => 6,
            'Título' => 'Las Voces',
            'Autor' => 'Muriel Spark',
            'Género' => 'Ciencia',
            'Precio' => 19.95
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


?>