<?php

    class EnlaceBD {


        //OBTENER REGALOS
        public static function getEnalcesPorID($idRegalo) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * 
            FROM enlaces
            WHERE idRegalo = ?");

            $stmt->bindValue(1, $idRegalo);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Enlace");

            ConexionBD::cerrar();

            return $regalos;
        }


        public static function addEnlace($enlace) {
            $conexion = ConexionBD::conectar();
    
            try {
                //Insertar
                $stmt = $conexion->prepare("INSERT INTO enlaces (idRegalo, nombre, enlace, precio, imagen, prioridad) VALUES (?, ?, ?, ?, ?, ?)");
                
                // SIN PASAR OBJETO //
                $stmt->bindValue(1, $enlace['idRegalo']);
                $stmt->bindValue(2, $enlace['nombre']);
                $stmt->bindValue(3, $enlace['enlace']);
                $stmt->bindValue(4, $enlace['precio']);
                $stmt->bindValue(5, $enlace['imagen']);
                $stmt->bindValue(6, $enlace['prioridad']);
                
                // Ejecuta la consulta
                $stmt->execute();
            } catch (PDOException $e){
                echo $e->getMessage();
            }
    
            ConexionBD::cerrar();
        }

        //BORRAR REGALOS POR ID
        public static function deleteEnlace($idEnlace) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("DELETE FROM enlaces WHERE idEnlace=?");
            $stmt->bindValue(1, $idEnlace);

            $stmt->execute();
            ConexionBD::cerrar();
        }

        //ORDENAR POR PRECIO ASC
        public static function ordenarEnlacePrecioASC($idRegalo) {

       
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM enlaces WHERE idRegalo = ? ORDER BY precio ASC");

            $stmt->bindValue(1, $idRegalo);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Enlace");

            ConexionBD::cerrar();

            return $regalos;
        }

                //ORDENAR POR PRECIO ASC
                public static function ordenarEnlacePrecioDESC($idRegalo) {

       
                    $conexion = ConexionBD::conectar();
        
                    //Consulta BBDD
                    $stmt = $conexion->prepare("SELECT * FROM enlaces WHERE idRegalo = ? ORDER BY precio DESC");
        
                    $stmt->bindValue(1, $idRegalo);
                    $stmt->execute();
        
                    //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
                    $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Enlace");
        
                    ConexionBD::cerrar();
        
                    return $regalos;
                }

        

    }
?>