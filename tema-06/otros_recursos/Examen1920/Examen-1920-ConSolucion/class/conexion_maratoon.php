<?php
class Conexion_maratoon extends Conexion {

    public function getCorredores() {
        try {
            $sql = "SELECT 
            corredores.id,
            corredores.nombre,
            corredores.apellidos,
            corredores.ciudad,
            corredores.email,
            corredores.edad,
            categorias.nombreCorto as categoria,
            clubs.nombre as club
            FROM Corredores
            INNER JOIN categorias ON corredores.id_categoria = categorias.id
            INNER JOIN clubs ON corredores.id_club = clubs.id
            ORDER BY id ASC";
            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            return $stmt;
        }  catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
                    echo "Mensaje Error ".$e->getMessage();
                    echo "<br>";
                    echo "Código de Error".$e->getCode();
                    echo "<br>";
                    echo "Fichero ".$e->getFile();
                    echo "<br>";
                    echo "Línea ".$e->getLine();
        }
    }

    public function getCorredor($id) {
        try {
        $sql = "SELECT * FROM Corredores WHERE id = :id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Corredor');
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch();
        }  catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
                    echo "Mensaje Error ".$e->getMessage();
                    echo "<br>";
                    echo "Código de Error".$e->getCode();
                    echo "<br>";
                    echo "Fichero ".$e->getFile();
                    echo "<br>";
                    echo "Línea ".$e->getLine();
        }
    }

    public function getCategorias () {
        try {
            $sql = "SELECT id, nombreCorto FROM maratoon.categorias ORDER BY id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();

            return $stmt;
        } catch (PDOException $e){
            echo "DETALLES DEL ERROR: <br>";
                    echo "Mensaje Error ".$e->getMessage();
                    echo "<br>";
                    echo "Código de Error".$e->getCode();
                    echo "<br>";
                    echo "Fichero ".$e->getFile();
                    echo "<br>";
                    echo "Línea ".$e->getLine();
        }
    }

    public function getClubs() {
        try {
            $sql = "SELECT id, nombre FROM maratoon.clubs ORDER BY id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            
            return $stmt;
        } catch (PDOException $e){
            echo "DETALLES DEL ERROR: <br>";
                    echo "Mensaje Error ".$e->getMessage();
                    echo "<br>";
                    echo "Código de Error".$e->getCode();
                    echo "<br>";
                    echo "Fichero ".$e->getFile();
                    echo "<br>";
                    echo "Línea ".$e->getLine();
        }
    }

    public function crear (Corredor $corredor) {
        try {
            $id = $corredor->getId();
            $nombre = $corredor->getNombre();
            $apellidos = $corredor->getApellidos();
            $ciudad = $corredor->getCiudad();
            $fechaNacimiento = $corredor->getFechaNacimiento();
            $sexo =  $corredor->getSexo();
            $email = $corredor->getEmail();
            $dni =  $corredor->getDni();
            $edad =  $corredor->getEdad();
            $id_categoria =  $corredor->getId_categoria();
            $id_club =  $corredor->getId_club();

            $insertarsql = "INSERT INTO Corredores VALUES (
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
                :id_club)";

            $stmt = $this->pdo->prepare($insertarsql);

            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR, 20);
            $stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR, 45);
            $stmt->bindParam(':ciudad', $ciudad, PDO::PARAM_STR, 30);
            $stmt->bindParam(':fechaNacimiento', $fechaNacimiento);
            $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR, 1);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':dni', $dni, PDO::PARAM_STR, 9);
            $stmt->bindParam(':edad', $edad, PDO::PARAM_INT, 2);
            $stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
            $stmt->bindParam(':id_club', $id_club, PDO::PARAM_INT);

            $stmt->execute();

        }  catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
                    echo "Mensaje Error ".$e->getMessage();
                    echo "<br>";
                    echo "Código de Error".$e->getCode();
                    echo "<br>";
                    echo "Fichero ".$e->getFile();
                    echo "<br>";
                    echo "Línea ".$e->getLine();
        }
    }

    public function eliminar($id) {
        $deletesql = "DELETE FROM Corredores WHERE id = :id LIMIT 1";
        $stmt = $this->pdo->prepare($deletesql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
    }

    public function actualizar (Corredor $corredor) {
        try {
            $id = (int) $corredor->getId();
            $nombre = $corredor->getNombre();
            $apellidos = $corredor->getApellidos();
            $ciudad = $corredor->getCiudad();
            $fechaNacimiento = $corredor->getFechaNacimiento();
            $sexo =  $corredor->getSexo();
            $email = $corredor->getEmail();
            $dni =  $corredor->getDni();
            $edad =  $corredor->getEdad();
            $id_categoria =  (int) $corredor->getId_categoria();
            $id_club =  (int) $corredor->getId_club();

            $updatesql = "UPDATE maratoon.Corredores SET 
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
                    LIMIT 1";

            $stmt = $this->pdo->prepare($updatesql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR, 20);
            $stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR, 45);
            $stmt->bindParam(':ciudad', $ciudad, PDO::PARAM_STR, 30);
            $stmt->bindParam(':fechaNacimiento', $fechaNacimiento);
            $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR, 1);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':dni', $dni, PDO::PARAM_STR, 9);
            $stmt->bindParam(':edad', $edad, PDO::PARAM_INT, 2);
            $stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
            $stmt->bindParam(':id_club', $id_club, PDO::PARAM_INT);

            $stmt->execute();

        }  catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
                    echo "Mensaje Error ".$e->getMessage();
                    echo "<br>";
                    echo "Código de Error".$e->getCode();
                    echo "<br>";
                    echo "Fichero ".$e->getFile();
                    echo "<br>";
                    echo "Línea ".$e->getLine();
        }
    }

    public function ordenarCorredores($criterio) {
        try {
            $ordenarsql = "SELECT 
            corredores.id,
            corredores.nombre,
            corredores.apellidos,
            corredores.ciudad,
            corredores.email,
            corredores.edad,
            categorias.nombreCorto as categoria,
            clubs.nombre as club
            FROM Corredores
            INNER JOIN categorias ON corredores.id_categoria = categorias.id
            INNER JOIN clubs ON corredores.id_club = clubs.id
            ORDER BY $criterio ASC";

            $stmt = $this->pdo->prepare($ordenarsql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();

            return $stmt;
        }  catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
                    echo "Mensaje Error ".$e->getMessage();
                    echo "<br>";
                    echo "Código de Error".$e->getCode();
                    echo "<br>";
                    echo "Fichero ".$e->getFile();
                    echo "<br>";
                    echo "Línea ".$e->getLine();
        }
    }

    public function buscarCorredores($expresion) {
        try {
            $buscarsql = "
            SELECT 
                co.id,
                co.nombre,
                co.apellidos,
                co.ciudad,
                co.email,
                co.edad,
                ca.nombreCorto as categoria,
                cl.nombre as club 
            FROM maratoon.Corredores as co
            INNER JOIN maratoon.Categorias as ca ON co.id_categoria = ca.id
            INNER JOIN maratoon.Clubs as cl ON co.id_club = cl.id
            WHERE
                co.id LIKE '%".$expresion."%' OR
                co.nombre LIKE '%".$expresion."%' OR
                co.apellidos LIKE '%".$expresion."%' OR
                co.email LIKE '%".$expresion."%' OR
                co.edad LIKE '%".$expresion."%' OR
                ca.nombre LIKE '%".$expresion."%' OR
                ca.nombreCorto LIKE '%".$expresion."%' OR
                cl.nombre LIKE '%".$expresion."%' OR
                cl.nombreCorto LIKE '%".$expresion."%'";

            $stmt = $this->pdo->prepare($buscarsql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();

            return $stmt;

        }  catch (PDOException $e) {
            echo "DETALLES DEL ERROR: <br>";
                    echo "Mensaje Error ".$e->getMessage();
                    echo "<br>";
                    echo "Código de Error".$e->getCode();
                    echo "<br>";
                    echo "Fichero ".$e->getFile();
                    echo "<br>";
                    echo "Línea ".$e->getLine();
        }
    }

}