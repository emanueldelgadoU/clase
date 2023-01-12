<?php

    class EnlaceBD {


        //OBTENER REGALOS
        public static function getEnalcesPorID($idRegalo) {

            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->enlaces;

            $enlaces = $coleccion->find(["idRegalo"=>$idRegalo]);

            //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
            $arrEnlace = array();
            foreach($enlaces as $enlace) {
               $enlace_OBJ = new Enlace($enlace['idEnlace'], $enlace['idRegalo'],$enlace['nombre'],$enlace['enlace'],$enlace['precio'],$enlace['imagen'],$enlace['prioridad']);
               array_push($arrEnlace, $enlace_OBJ);
            }

            ConexionBD::cerrar();
            return $arrEnlace;
        }


        public static function addEnlace($enlace) {
            $conexion = ConexionBD::conectar();

            //Hacer el autoincrement
            //Ordeno por id, y me quedo con el mayor
            $enlaceMayor = $conexion->enlaces->findOne(
                [],
                [
                    'sort' => ['idEnlace' => -1],
                ]);
            if (isset($enlaceMayor))
                $idValue = $enlaceMayor['idEnlace'];
            else
                $idValue = 0;


            $insertOneResult = $conexion->enlaces->insertOne([
                'idEnlace' => intVal($idValue)+1,
                'idRegalo' => $enlace['idRegalo'],
                'nombre' => $enlace['nombre'],
                'enlace' => $enlace['enlace'],
                'precio' => $enlace['precio'],
                'imagen' => $enlace['imagen'],
                'prioridad' => $enlace['prioridad']
            ]);

            ConexionBD::cerrar();
        }

        //BORRAR ENLACE POR ID
        public static function deleteEnlace($idEnlace) {

            $conexion = ConexionBD::conectar();

            $deleteResult = $conexion->enlaces->deleteOne(['idEnlace' => intVal($idEnlace)]); 

            ConexionBD::cerrar();
        }


        //ORDENAR POR PRECIO ASC
        public static function ordenarEnlacePrecioASC($idRegalo) {

            $conexion = ConexionBD::conectar();
                    
            $coleccion = $conexion->enlaces;
        
            $enlaces = $coleccion->find(["idRegalo"=>$idRegalo],["sort"=>["precio"=>-1]]);
        
            //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
            $arrEnlace = array();
            foreach($enlaces as $enlace) {
                    $enlace_OBJ = new Enlace($enlace['idEnlace'], $enlace['idRegalo'],$enlace['nombre'],$enlace['enlace'],$enlace['precio'],$enlace['imagen'],$enlace['prioridad']);
                    array_push($arrEnlace, $enlace_OBJ);
                }
        
                ConexionBD::cerrar();
                 return $arrEnlace;
        
            }


        //ORDENAR POR PRECIO ASC
        public static function ordenarEnlacePrecioDESC($idRegalo) {

            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->enlaces;

            $enlaces = $coleccion->find(["idRegalo"=>$idRegalo],["sort"=>["precio"=>1]]);

            //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
            $arrEnlace = array();
            foreach($enlaces as $enlace) {
               $enlace_OBJ = new Enlace($enlace['idEnlace'], $enlace['idRegalo'],$enlace['nombre'],$enlace['enlace'],$enlace['precio'],$enlace['imagen'],$enlace['prioridad']);
               array_push($arrEnlace, $enlace_OBJ);
            }

            ConexionBD::cerrar();
            return $arrEnlace;

        }

    }
?>