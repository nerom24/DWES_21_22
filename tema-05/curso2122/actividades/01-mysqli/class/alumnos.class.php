<?php  
	class Alumnos extends Conexion{

        public function getAlumnos() {

        try {

                $sql = "select 
                                alumnos.id, 
                                alumnos.nombre,
                                alumnos.apellidos,
                                alumnos.email,
                                alumnos.poblacion,
                                TIMESTAMPDIFF(YEAR, alumnos.fechaNac, now()) edad,
                                cursos.nombreCorto curso
                        
                        from alumnos inner join cursos 
                        
                                on alumnos.id_curso = cursos.id";
                
                $resultSet = $this->conexion->query($sql);

                if ($resultSet) 
                     return $resultSet->fetch_all(MYSQLI_ASSOC);
                else 
                     throw new Exception('Error comando SQL');

        } catch (Exception $error) {

                echo "Entra en la estructura catch";
                echo "<BR>";
                echo 'Mensaje:      '. $error->getMessage(). '<BR>';
                echo 'Error Código: '. $error->getCode(). '<BR>';
                echo 'Fichero:      '. $error->getFile(). '<BR>';
                echo 'Línea:        '. $error->getLine(). '<BR>';
                echo 'Trace:        '. $error->getTraceAsString(). '<BR>';
                exit();

        }


        }
       
}
?>