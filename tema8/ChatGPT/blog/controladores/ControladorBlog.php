<?php
    class ControladorBlog {

        public static function mostrarTodosArtilos() {
            $articulos = ArticuloBD::getArticulos();
            VistaArticulos::render($articulos);

        }

 




  


    }


    





?>