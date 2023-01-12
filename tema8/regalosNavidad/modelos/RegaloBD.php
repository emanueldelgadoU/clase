<?php

    class RegaloBD {

        //OBTENER REGALOS
        public static function getRegalos($idUsuarioSesion) {

            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->regalos;

            $regalos = $coleccion->find(["idUsuario"=>$idUsuarioSesion]);

            //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
            $arrRegalo = array();
            foreach($regalos as $regalo) {
               $regalo_OBJ = new Regalo($regalo['idRegalo'],$regalo['idUsuario'], $regalo['nombre'],$regalo['destinatario'],$regalo['precio'],$regalo['estado'],$regalo['anio']);
               array_push($arrRegalo, $regalo_OBJ);
            }

            ConexionBD::cerrar();
            return $arrRegalo;
        }


        //OBTENER REGALOS POR ANIO
        public static function getRegalosPorAnio($anio) {

            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->regalos;

            $regalos =  $coleccion->find(["idUsuario"=>$anio["idRegalo"],"anio"=>$anio["anio"]]);

            //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
            $arrRegalo = array();
            foreach($regalos as $regalo) {
               $regalo_OBJ = new Regalo($regalo['idRegalo'],$regalo['nombre'],$regalo['destinatario'],$regalo['precio'],$regalo['estado'],$regalo['anio']);
               array_push($arrRegalo, $regalo_OBJ);
            }

            ConexionBD::cerrar();
            return $arrRegalo;
        }



        //BORRAR REGALOS POR ID
        public static function deleteRegalo($idRegalo) {

            $conexion = ConexionBD::conectar();

            $deleteResult = $conexion->regalos->deleteOne(['idRegalo' => intVal($idRegalo)]); 

            ConexionBD::cerrar();
        }

   
        public static function addRegalo($regalo) {
            $conexion = ConexionBD::conectar();

            //Hacer el autoincrement
            //Ordeno por id, y me quedo con el mayor
            $regaloMayor = $conexion->regalos->findOne(
                [],
                [
                    'sort' => ['idRegalo' => -1],
                ]);
            if (isset($regaloMayor))
                $idValue = $regaloMayor['idRegalo'];
            else
                $idValue = 0;


            //Collección 'usuarios'
            $insertOneResult = $conexion->regalos->insertOne([
                'idRegalo' => intVal($idValue + 1),
                'idUsuario' => $regalo['idUsuario'],
                'nombre' => $regalo['nombre'],
                'destinatario' => $regalo['destinatario'],
                'precio' => $regalo['precio'],
                'estado' => $regalo['estado'],
                'anio' => $regalo['anio']
            ]);

            ConexionBD::cerrar();
        }

        public static function updateRegalo($regalo) {
            $conexion = ConexionBD::conectar();

            $updateResult = $conexion->regalos->updateOne(
                ["idRegalo"=>intVal($regalo["idRegalo"])],
                ['$set'=>["nombre"=>$regalo["nombre"],
                          "destinatario"=>$regalo["destinatario"],
                          "precio"=>$regalo["precio"],
                          "estado"=>$regalo["estado"],
                          "anio"=>$regalo["anio"]]]);
        }

    }



?>