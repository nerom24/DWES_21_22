
<?php

    /*

    Funciones

        - Usar array como argumentos

        - Detalles del alumno:
            id, nombre, poblacion, curso

    */

    require_once('lib/funciones.php');
    
    $alumnos = [

                [
                    'id' => 1,
                    'nombre' => 'Juan',
                    'poblacion' => 'Ubrique',
                    'curso' => '2DAW'
                   
                ],
                [
                    'id' => 2,
                    'nombre' => 'María',
                    'poblacion' => 'Ubrique',
                    'curso' => '2DAW'
                ],
                [
                    'id' => 3,
                    'nombre' => 'Pedro',
                    'poblacion' => 'Ubrique',
                    'curso' => '2DAW'
                ],
            ];

    # Llamada función
    # Muestre los detalles de juan

    foreach ($alumnos as $alumno) {
        detalles($alumno);
    }
   


        

?>


