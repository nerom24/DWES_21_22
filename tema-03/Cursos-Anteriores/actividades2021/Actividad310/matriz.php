<?php
    # Alumno: Juani Cañamaque
    # Multidimensional de índice principal escalar e índice secundario asociativo
    //Índice primario indexado(numérico o escalar) y el índice secundario asociativo (personalizado)

    $libros=[ //Cada elemento puede llevar los índices y valores que yo quiera
        //El campo - id- NO HAY QUE CREARLO porque lo hace automáticamente y no le vamos a asignar valores a mano (cogerá los valores desde el 0 en adelante)

        [ //ELEMENTO 0
            //'id' => 1,
            'titulo'=>'Los Señores del tiempo',
            'autor'=>'García Sénz de Urturi',
            'genero'=> 'Novela',
            'precio'=> 19.5
        ],
        [ //ELEMENTO 1
            //'id' => 2,
            'titulo'=>'El Rey recibe',
            'autor'=>'Eduardo Mendoza',
            'genero'=> 'Novela',
            'precio'=> 20.5
        ],
        [ //ELEMENTO 2
            //'id' => 3,
            'titulo'=>'Diario de una mujer',
            'autor'=>'Eduardo Mendoza',
            'genero'=> 'Juvenil',
            'precio'=> 12.95
        ],

        [ //ELEMENTO 3
            //'id' => 4,
            'titulo'=>'El Quijote de la Mancha',
            'autor'=>'Miguel de Cervantes',
            'genero'=> 'Novela',
            'precio'=> 15.95
        ]


    ];


?>
