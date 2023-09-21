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
                
                $pdoSt = $this->conexion->prepare($sql);
                $pdoSt->setFetchMode(PDO::FETCH_CLASS, 'Alumno');
                $pdoSt->execute();
                return $pdoSt->fetchAll();

        } catch (Exception $e) {

                include('views/partials/errordb.php');
                exit();

        }


        }
       
}
?>