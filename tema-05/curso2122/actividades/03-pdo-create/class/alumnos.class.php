<?php  
	Class Alumnos extends Conexion{

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
                // $pdoSt->setFetchMode(PDO::FETCH_CLASS, 'Alumno');
                // $pdoSt->setFetchMode(PDO::FETCH_OBJ);
                $pdoSt->setFetchMode(PDO::FETCH_ASSOC);
                $pdoSt->execute();
                return $pdoSt;

        } catch (Exception $e) {

                include('views/partials/errordb.php');
                exit();

        }


        }

        public function getCursos() {

                try {
        
                        $sql = "select 
                                        id,
                                        nombreCorto curso
                                
                                from cursos";
                        
                        $pdoSt = $this->conexion->prepare($sql);
                        $pdoSt->setFetchMode(PDO::FETCH_OBJ);
                        $pdoSt->execute();
                        return $pdoSt->fetchAll();
        
                } catch (Exception $e) {
        
                        include('views/partials/errordb.php');
                        exit();
        
                }
        
        
                }
        
                public function create(Alumno $alumno) {

                        try {
                
                                $sql = "insert into alumnos (
                                                nombre,
                                                apellidos,
                                                email,
                                                poblacion,
                                                dni,
                                                fechaNac,
                                                id_curso
                                        )

                                        values (
                                                :nombre,
                                                :apellidos,
                                                :email,
                                                :poblacion,
                                                :dni,
                                                :fechaNac,
                                                :id_curso
                                        )
                                ";
                                
                                $pdoSt = $this->conexion->prepare($sql);

                                $pdoSt->bindParam(':nombre', $alumno->nombre, PDO::PARAM_STR, 20);
                                $pdoSt->bindParam(':apellidos', $alumno->apellidos, PDO::PARAM_STR, 40);
                                $pdoSt->bindParam(':email', $alumno->email, PDO::PARAM_STR, 50);
                                $pdoSt->bindParam(':poblacion', $alumno->poblacion, PDO::PARAM_STR, 20);
                                $pdoSt->bindParam(':dni', $alumno->dni, PDO::PARAM_STR, 9);
                                $pdoSt->bindParam(':fechaNac', $alumno->fechaNac);
                                $pdoSt->bindParam(':id_curso', $alumno->id_curso, PDO::PARAM_INT);
                                
                                $pdoSt->execute();
                                return $pdoSt->fetchAll();
                
                        } catch (Exception $e) {
                
                                include('views/partials/errordb.php');
                                exit();
                
                        }
                
                
        }

        
       
}
?>