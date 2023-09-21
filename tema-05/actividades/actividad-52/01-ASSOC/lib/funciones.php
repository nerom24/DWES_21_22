<?php

    function getEdad($fechaNacimiento) {
                    
        $fechaNacimiento = new DateTime($fechaNacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($fechaNacimiento);
        return $edad->y;
    }

?>