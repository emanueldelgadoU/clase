<?php

    class RegaloBD {

        //OBTENER REGALOS
        public static function getRegalos($idUsuarioSesion) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM regalos WHERE idUsuario=?");
            $stmt->bindValue(1, $idUsuarioSesion);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Regalo");

            ConexionBD::cerrar();

            return $regalos;
        }


        //OBTENER REGALOS POR ANIO
        public static function getRegalosPorAnio($anio) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM regalos WHERE anio=? ");
            $stmt->bindValue(1, $anio);
            // $stmt->bindValue(1, $idSesion);

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Regalo");

            ConexionBD::cerrar();

            return $regalos;
        }

        //BORRAR REGALOS POR ID
        public static function deleteRegalo($idRegalo) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("DELETE FROM regalos WHERE idRegalo=?");
            $stmt->bindValue(1, $idRegalo);

            $stmt->execute();
            ConexionBD::cerrar();
        }


        public static function addRegalo($regalo) {
            $conexion = ConexionBD::conectar();
    
            try {
                //Insertar
                $stmt = $conexion->prepare("INSERT INTO regalos (idUsuario, nombre, destinatario, precio, estado, anio) VALUES (?, ?, ?, ?, ?, ?)");
                
                // SIN PASAR OBJETO //
                $stmt->bindValue(1, $regalo['idUsuario']);
                $stmt->bindValue(2, $regalo['nombre']);
                $stmt->bindValue(3, $regalo['destinatario']);
                $stmt->bindValue(4, $regalo['precio']);
                $stmt->bindValue(5, $regalo['estado']);
                $stmt->bindValue(6, $regalo['anio']);

                //si pasamos un objeto //
                // $stmt->bindValue(1, $regalo->getIdUsuario());
                // $stmt->bindValue(2, $regalo->getNombre());
                // $stmt->bindValue(3, $regalo->getDestinatario());
                // $stmt->bindValue(4, $regalo->getPrecio());
                // $stmt->bindValue(5, $regalo->getEstado());
                // $stmt->bindValue(6, $regalo->getYear());
         
       
                // Ejecuta la consulta
                $stmt->execute();
            } catch (PDOException $e){
                echo $e->getMessage();
            }
    
            ConexionBD::cerrar();
        }

        public static function updateRegalo($regalo) {
            $conexion = ConexionBD::conectar();

            try {
                //MODIFICAR
                $stmt = $conexion->prepare("UPDATE regalos SET nombre=?, destinatario=?, precio=?, estado=?, anio=? WHERE idRegalo=?");
                
                //BLIND
                $stmt->bindValue(1, $regalo["nombre"]);
                $stmt->bindValue(2, $regalo["destinatario"]);
                $stmt->bindValue(3, $regalo["precio"]);
                $stmt->bindValue(4, $regalo["estado"]);
                $stmt->bindValue(5, $regalo["anio"]);
                $stmt->bindValue(6, $regalo["idRegalo"]);

                // Ejecuta la consulta
                $stmt->execute();
            } catch (PDOException $e){
                echo $e->getMessage();
            }

            ConexionBD::cerrar();
        }



    }



?>