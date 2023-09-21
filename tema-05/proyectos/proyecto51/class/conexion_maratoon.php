<?php  

        class conexion_maratoon extends Conexion {

                # Obtener corredores para index
                
                public function getCorredores() {

                        try {
                                $consultaSQL = "                             
                                SELECT 
                                        c.id,
                                        c.nombre,
                                        c.apellidos,
                                        c.ciudad,
                                        c.email,
                                        c.fechaNacimiento,
                                        c.edad,
                                        c.id_categoria,
                                        c.id_club,
                                        ca.nombrecorto AS categoria,
                                        cl.nombreCorto AS club
                                
                                FROM corredores AS c
                                         JOIN categorias AS ca ON c.id_categoria = ca.id
                                         JOIN clubs AS cl ON c.id_club = cl.id 
                                ORDER BY c.id
                                ";

                                $result= $this->pdo->prepare($consultaSQL);

                                $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'corredor');

                                $result -> execute();

                                return $result;

                        }
                        catch(PDOException $e) {
                                include_once('template/partials/error_conexion.php');
                                exit(0);
                        }
                }


                # Obtener array de clubs

                public function getClubs() {

                        try {
                                $consultaSQL = "
                                SELECT
                                        id,
                                        nombreCorto AS club
                                FROM
                                        clubs
                                ";

                                $result= $this->pdo->prepare($consultaSQL);

                                #Cada corredor lo devolverá como objeto de la clase corredor
                                $result->setFetchMode(PDO::FETCH_OBJ);
                                $result -> execute();

                                return $result;

                        }
                        catch(PDOException $e) {
                                include_once('template/partials/error_conexion.php');
                                exit(0);
                        }
                }

                # Obtener array de categorías
                
                public function getCategorias() {

                        try {
                                $consultaSQL = "
                                SELECT
                                        id,
                                        nombreCorto AS categoria
                                FROM
                                        categorias
                                ";

                                $result= $this->pdo->prepare($consultaSQL);

                                #Cada corredor lo devolverá como objeto de la clase corredor
                                $result->setFetchMode(PDO::FETCH_OBJ);
                                $result -> execute();

                                return $result;

                        }
                        catch(PDOException $e) {
                                include_once('template/partials/error_conexion.php');
                                exit(0);
                        }
                }

                # Añadir nuevo corredor
                
                public function create(Corredor $corredor) {

                        try {

                                $insertSQL = 

                                "INSERT INTO corredores VALUES (
                                        null,
                                        :nombre,
                                        :apellidos,
                                        :ciudad,
                                        :fechaNacimiento,
                                        :sexo,
                                        :email,
                                        :dni,
                                        :edad,
                                        :id_categoria,
                                        :id_club 
                                )";

                                $result= $this->pdo->prepare($insertSQL);

                                $result->bindParam(':nombre', $corredor->nombre, PDO::PARAM_STR, 20);
                                $result->bindParam(':apellidos', $corredor->apellidos, PDO::PARAM_STR, 45);
                                $result->bindParam(':ciudad', $corredor->ciudad, PDO::PARAM_STR, 30);
                                $result->bindParam(':fechaNacimiento', $corredor->fechaNacimiento);
                                $result->bindParam(':sexo', $corredor->sexo);
                                $result->bindParam(':email', $corredor->email, PDO::PARAM_STR, 45);
                                $result->bindParam(':dni', $corredor->dni, PDO::PARAM_STR, 9);
                                $result->bindParam(':edad', $corredor->getEdad(), PDO::PARAM_INT);
                                $result->bindParam(':id_categoria', $corredor->id_categoria, PDO::PARAM_INT);
                                $result->bindParam(':id_club', $corredor->id_club, PDO::PARAM_INT);

                                $result -> execute();

                        }
                        catch(PDOException $e) {
                                include_once('template/partials/error_conexion.php');
                                exit(0);
                        }
                }

                # Obtiene corredor a partir de id
                
                public function read($id) {

                        try {
                                $consultaSQL = "select * from corredores where id = :id limit 1";
                                
                                $result= $this->pdo->prepare($consultaSQL);
                                $result->bindParam(':id', $id, PDO::PARAM_INT);


                                #Cada corredor lo devolverá como objeto de la clase corredor
                                $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'corredor');

                                $result -> execute();

                                return $result->fetch();//con el fetch devuelvo el objeto directamente

                        }
                        catch(PDOException $e) {
                                include_once('template/partials/error_conexion.php');
                                exit(0);
                        }
                }

                # Actualiar corredor
                
                public function update(Corredor $corredor, $id) {

                        try {
                                $updateSQL = "UPDATE corredores
                                SET
                                        nombre = :nombre,
                                        apellidos = :apellidos,
                                        ciudad = :ciudad,
                                        fechaNacimiento = :fechaNacimiento,
                                        sexo = :sexo,
                                        email = :email,
                                        dni = :dni,
                                        edad = :edad,
                                        id_categoria = :id_categoria,
                                        id_club = :id_club
                                WHERE
                                        id = :id
                                LIMIT 1
                                        ";
                                
                                $result= $this->pdo->prepare($updateSQL);

                                $result->bindParam(':id', $id, PDO::PARAM_INT);
                                $result->bindParam(':nombre', $corredor->nombre, PDO::PARAM_STR, 20);
                                $result->bindParam(':apellidos', $corredor->apellidos, PDO::PARAM_STR, 45);
                                $result->bindParam(':ciudad', $corredor->ciudad, PDO::PARAM_STR, 30);
                                $result->bindParam(':fechaNacimiento', $corredor->fechaNacimiento);
                                $result->bindParam(':sexo', $corredor->sexo);
                                $result->bindParam(':email', $corredor->email, PDO::PARAM_STR, 45);
                                $result->bindParam(':dni', $corredor->dni, PDO::PARAM_STR, 9);
                                $result->bindParam(':edad', $corredor->getEdad(), PDO::PARAM_INT);
                                $result->bindParam(':id_categoria', $corredor->id_categoria, PDO::PARAM_INT);
                                $result->bindParam(':id_club', $corredor->id_club, PDO::PARAM_INT);

                                $result -> execute();

                        }
                        catch(PDOException $e) {
                                include_once('template/partials/error_conexion.php');
                                exit(0);
                        }
                }

                # Eliminar corredor
                
                public function delete($id) {

                        try {
                
                            $consultaSQL = "
                                DELETE 
                        
                                from
                                    corredores
                                where 
                                    id = :id limit 1
                            ";
                            $result = $this->pdo->prepare($consultaSQL);
                            $result->bindParam(':id', $id, PDO::PARAM_INT);
                
                            $result->execute();
                
                        }
                
                        catch (PDOException $e){
                            include_once('template/partials/error_conexion.php');
                            exit(0);
                
                        }
                }

                # Ordena corredores por varios criterios
                
                public function ordenar($criterio) {

                        try {
                                $consultaSQL = "                             
                                SELECT 
                                        c.id,
                                        c.nombre,
                                        c.apellidos,
                                        c.ciudad,
                                        c.email,
                                        c.fechaNacimiento,
                                        c.edad,
                                        c.id_categoria,
                                        c.id_club,
                                        ca.nombrecorto AS categoria,
                                        cl.nombreCorto AS club
                                
                                FROM corredores AS c
                                         JOIN categorias AS ca ON c.id_categoria = ca.id
                                         JOIN clubs AS cl ON c.id_club = cl.id 
                                ORDER BY $criterio
                                ";

                                $result= $this->pdo->prepare($consultaSQL); 
                                // $result->bindParam(':criterio', $criterio, PDO::PARAM_STR, 30);

                                $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'corredor');
                                $result -> execute();
                               
                                return $result;

                        }
                        catch(PDOException $e) {
                                include_once('template/partials/error_conexion.php');
                                exit(0);
                        }
                }

                # Filtrar tabla de corredores
                public function filtrar($expresion) {
                        try {
                            $consultaSQL = "
                            
                            SELECT 
                                        c.id,
                                        c.nombre,
                                        c.apellidos,
                                        c.ciudad,
                                        c.email,
                                        c.fechaNacimiento,
                                        c.edad,
                                        c.id_categoria,
                                        c.id_club,
                                        ca.nombrecorto AS categoria,
                                        cl.nombreCorto AS club
                                FROM corredores AS c
                                         JOIN categorias AS ca ON c.id_categoria = ca.id
                                         JOIN clubs AS cl ON c.id_club = cl.id 
                                WHERE
                                        C.id LIKE '%".$expresion."%' OR
                                        C.nombre LIKE '%".$expresion."%' OR
                                        C.apellidos LIKE '%".$expresion."%' OR
                                        c.ciudad LIKE '%".$expresion."%' OR
                                        C.email LIKE '%".$expresion."%' OR
                                        C.edad LIKE '%".$expresion."%' OR
                                        ca.nombre LIKE '%".$expresion."%' OR
                                        ca.nombreCorto LIKE '%".$expresion."%' OR
                                        cl.nombre LIKE '%".$expresion."%' OR
                                        cl.nombreCorto LIKE '%".$expresion."%'
                                ORDER BY id";
                
                                $result= $this->pdo->prepare($consultaSQL); 
                                $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'corredor');
                                $result -> execute();
                            
                                return $result;
                
                        }  catch (PDOException $e) {
                                include_once('template/partials/error_conexion.php');
                                exit(0);
                        }
                    }

}
?>