<?php

    /*

    Declaramos la clase Alumno a partir de las columnas de la tabla 
    Alumnos de la bd fp

    Se declaran públicas las propiedades sin mantener propiedad 
    encapsulamiento PDO

    */

    class Alumno {

        public $id;
        public $nombre;
        public $apellidos;
        public $email;
        public $telefono;
        public $direccion;
        public $poblacion;
        public $provincia;
        public $nacionalidad;
        public $dni;
        public $fechaNac;
        public $id_curso;


    }

?>