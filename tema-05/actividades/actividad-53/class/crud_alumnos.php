<?php 

class Conexion_fp extends Conexion {

    
    # Método: getAlumnos()
    # Description: Asigna a la propiedad $alumno el objeto de la clase PDOStatement resultante de realizar 
    #              un select a la tabla alumnos
    # Param: 
    # Return: devuelve un PODStatament pero ya con la sentencia SQL ejecutada.
    
    public function getAlumnos() {

		try {
			
            $consultaSQL = "
                select *, 
                       nombreCorto as curso 
                from 
                       alumnos join cursos 
                on 
                       alumnos.id_curso = cursos.id
            ";

            $result = $this->pdo->prepare($consultaSQL);
            
            # Cada alumno lo devolverá como objeto de la case alumno
			$result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'alumno');
            
            $result->execute();

            return $result;

			} 

		catch (PDOException $e){
	            include_once('template/partials/error_conexion.php');
                exit(0);
			}
	
    }

    # Método: getAlumno()
    # Description: Devuelve un alumno de la tabla en forma de objeto de la clase alumno
    #              
    # Param: id del alumno
    # Return: objeto de la clase alumno
    
    public function getAlumno($id) {

		try {
			
            $consultaSQL = "select * from alumnos where id = :id limit 1";

            $result = $this->pdo->prepare($consultaSQL);
            
            # Cada alumno lo devolverá como objeto de la case alumno
			$result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'alumno');
            $result->execute();
            
            return $result->fetch();

			} 

		catch (PDOException $e){
	    
	    		exit($e->getMessage());
			}
	
    }
    
    # Método: crear()
    # Description: Inserta un registro en la tabla alumnos
    # Param: Objeto de la clase Alumno
    # Return: null

    public function crear(Alumno $alumno) {

		try 
		{
		
			$insertSQL = 

			"INSERT INTO alumnos VALUES (
                :id,
                :nombre,
                :apellidos,
                :email,
                :telefono,
                :direccion,
                :poblacion, 
                :provincia,
                :nacionalidad,
                :dni,
                :fechaNac,
                :id_curso
            )";

            $result = $this->pdo->prepare($insertSQL);
            
            $result->bindParam(':id', null);
            $result->bindParam(':nombre', $alumno->getNombre(), PDO::PARAM_STR, 20);
            $result->bindParam(':apellidos', $alumno->getApellidos(), PDO::PARAM_STR, 40);
            $result->bindParam(':email', $alumno->getEmail(), PDO::PARAM_STR, 50);
            $result->bindParam(':telefono', $alumno->getTelefono(), PDO::PARAM_STR, 12);
            $result->bindParam(':direccion', $alumno->getDireccion(), PDO::PARAM_STR, 60);
            $result->bindParam(':poblacion', $alumno->getPoblacion(), PDO::PARAM_STR, 20);
            $result->bindParam(':provincia', $alumno->getProvincia(), PDO::PARAM_STR, 20);
            $result->bindParam(':nacionalidad', $alumno->getNacionalidad(), PDO::PARAM_STR, 20);
            $result->bindParam(':dni', $alumno->getDni(), PDO::PARAM_STR, 9);
            $result->bindParam(':fechaNac', $alumno->getFechaNac());
            $result->bindParam(':id_curso', $alumno->getId_curso, PDO::PARAM_INT);
            
            $result->execute();			
				
		} 

		catch (PDOException $e) 
		{
		
			exit($e->getMessage());
		}
	}

	# Método: eliminar()
    # Description: Elimina un alumno de la tabla
    # Param: id del alumno
    # Return: null

    public function eliminar($id) {

		try 
		{
			$deleteSQL = "DELETE FROM alumnos WHERE id = :id limit 1";
			$result = $this->pdo->prepare($deleteSQL);			          
            $result->binParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
		} 

		catch (PDOException $e) 
		
		{
			exit($e->getMessage());
		}

    }
    
    # Método: actualizar()
    # Description: Actualiza los datos de un registro de alumno
    # Param: $alumno - objeto de la clase alumno
    #        
    # Return: null

    public function actualizar(Alumno $alumno) {

		try 
		{
			$updateSQL = "
                            UPDATE alumnos 
                            SET 
                                nombre = :nombre,
                                apellidos = :apellidos,
                                email= :email,
                                telefono = :telefono,
                                direccion = :direccion,
                                poblacion = :poblacion, 
                                provincia = :provincia,
                                nacionalidad = :nacionalidad,
                                dni = :dni,
                                fechaNac = :fechaNac,
                                id_curso = :id_curso
                            WHERE
                                id = :id
                            LIMIT 1
                             ";
            
            $result = $this->pdo->prepare($updateSQL);			          
            
            $result->bindParam(':nombre', $alumno->getNombre(), PDO::PARAM_STR, 20);
            $result->bindParam(':apellidos', $alumno->getApellidos(), PDO::PARAM_STR, 40);
            $result->bindParam(':email', $alumno->getEmail(), PDO::PARAM_STR, 50);
            $result->bindParam(':telefono', $alumno->getTelefono(), PDO::PARAM_STR, 12);
            $result->bindParam(':direccion', $alumno->getDireccion(), PDO::PARAM_STR, 60);
            $result->bindParam(':poblacion', $alumno->getPoblacion(), PDO::PARAM_STR, 20);
            $result->bindParam(':provincia', $alumno->getProvincia(), PDO::PARAM_STR, 20);
            $result->bindParam(':nacionalidad', $alumno->getNacionalidad(), PDO::PARAM_STR, 20);
            $result->bindParam(':dni', $alumno->getDni(), PDO::PARAM_STR, 9);
            $result->bindParam(':fechaNac', $alumno->getFechaNac());
            $result->bindParam(':id_curso', $alumno->getId_curso, PDO::PARAM_INT);
            
            $result->execute();
		} 

		catch (PDOException $e) 
		
		{
			exit($e->getMessage());
		}

	}
}

?>