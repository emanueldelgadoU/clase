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

      


}
?>