<?php
    # Multidimensional de índices escalares
    $matrizNumerica=[
        [2,4,6,8],
        [5,10,15,20],
        [10,20,30,40]
    ];
    echo $matrizNumerica[0][1]; // valor 4

    # Multidimensional de índices asociativos
    $ciudades=[
        'España'  => ['Valencia','Madrid','Barcelona'],
        'Francia' => ['Paris',  'Marsella', 'Lion'],
        'Italia' => ['Roma',  'Nápoles', 'Venecia']
    ];
    echo $ciudades['España'][1]; // Madrid

    # Multidimensional de índices escalares 
    # y subíndices asociativos
   
    $alumnos=[
        ['Nombre'=>'Luis','Edad'=>45,'Sexo'=>'Hombre'],
        ['Nombre'=>'Carmen','Edad'=>40,'Sexo'=>'Mujer'],
        ['Nombre'=>'Pedro','Edad'=>25,'Sexo'=>'Hombre']
    ];
    echo $alumnos[2]['Edad']; // 25

    # Multidimensional de índices y subíndices asociativos
    $paises=[
        'España'  => ['capital'=>'Madrid','idioma'=>'Español','poblacion'=>46400000],
        'Francia' => ['capital'=>'Paris','idioma'=>'Frances','poblacion'=>66415161],
        'Italia' => ['capital'=>'Roma','idioma'=>'Italiano','poblacion'=>59801000]];
    echo $paises['España']['idioma']; // español
    
    echo "<ul>";
    foreach ($paises as $key => $pais) {
        echo "<li>";
        echo  $key;
        echo ":";
        echo "<ul>";
        foreach ($pais as $key =>$campo) {
            echo "<li>";
            echo $key.": ".$campo;
            echo "</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
?>