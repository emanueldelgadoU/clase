<?php

    class ArticuloBD {

        //AÑADIR ARTICULO
        public static function addArticulo($articulo) {
                $conexion = ConexionBD::conectar();
    
                //Hacer el autoincrement
                //Ordeno por id, y me quedo con el mayor
                $articuloMayor = $conexion->articulos->findOne(
                    [],
                    [
                        'sort' => ['idArticulo' => -1],
                    ]);
                if (isset($articuloMayor))
                    $idValue = $articuloMayor['idArticulo'];
                else
                    $idValue = 0;
    
    
                //Collección 'articulos'
                $insertOneResult = $conexion->articulos->insertOne([
                    'idArticulo' => intVal($idValue + 1),
                    'titulo' => $articulo->getTitulo(),
                    'texto' => $articulo->getTexto(),
                    'imagen' => $articulo->getImagen(),
                    'fecha' => $articulo->getFecha()
                   
                ]);
    
                ConexionBD::cerrar();
            }

        //OBTENER ARTICULOS
        public static function getArticulos() {

                $conexion = ConexionBD::conectar();
                
                $coleccion = $conexion->articulos;
    
                $articulos1 = $coleccion->find();
    
                //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
                $arrArticulos = array();
                foreach($articulos1 as $articulo) {
                   $articulo_OBJ = new Regalo($articulo['idArticulo'],
                    $articulo['titulo'],
                    $articulo['texto'],
                    $articulo['imagen'],
                    $articulo['fecha']);
                   array_push($arrArticulos, $articulo_OBJ);
                }
    
                ConexionBD::cerrar();
                return $arrArticulos;
            }   


}
?>