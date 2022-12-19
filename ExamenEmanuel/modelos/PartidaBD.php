<?php

    class PartidaBD {

        //OBTENER PARTIDAS
        public static function getPartidas() {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas ");
            $stmt->execute();
            // ORDER BY fecha
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Partida");

            ConexionBD::cerrar();

            return $partidas;
        }

        //BORRAR PARTIDA POR ID
        public static function borrarPartida($idPartida) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("DELETE FROM partidas WHERE idPartida=?");
            $stmt->bindValue(1, $idPartida);

            $stmt->execute();
            ConexionBD::cerrar();
        }
        
        public static function add($partida) {
            $conexion = ConexionBD::conectar();
    
            try {
                //INSERTAR
                $stmt = $conexion->prepare("INSERT INTO partidas (idJugador1, fecha, hora, ciudad, cubierta, estado, lugar) VALUES (?, ?, ?, ?, ?, ?, ?)");
                
                //SIN PASAR OBJETO
                $stmt->bindValue(1, $partida['idJugador1']);
                $stmt->bindValue(2, $partida['fecha']);
                $stmt->bindValue(3, $partida['hora']);
                $stmt->bindValue(4, $partida['ciudad']);
                $stmt->bindValue(5, $partida['cubierta']);
                $stmt->bindValue(6, $partida['estado']);
                $stmt->bindValue(7, $partida['lugar']);
                
                //Ejecuta la consulta
                $stmt->execute();
            } catch (PDOException $e){
                echo $e->getMessage();
            }
    
            ConexionBD::cerrar();
        }

        //OBTENER DATOS PARTIDA
        public static function getPartidaID($idPartida) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * 
            FROM partidas
            WHERE idPartida = ?");

            $stmt->bindValue(1, $idPartida);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
            $partida = $stmt->fetch();

            ConexionBD::cerrar();

            return $partida;
        }


        //OBTENER PARTIDA POR CIUDAD
        public static function getCiudad($ciudad) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas WHERE ciudad=?");
            $stmt->bindValue(1, $ciudad);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $Partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Partida");

            ConexionBD::cerrar();

            return $Partidas;
        }

        
        //OBTENER PARTIDA POR FECHA
        public static function getFecha($fecha) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas WHERE fecha=?");
            $stmt->bindValue(1, $fecha);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $Partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Partida");

            ConexionBD::cerrar();

            return $Partidas;
        }

    }
?>