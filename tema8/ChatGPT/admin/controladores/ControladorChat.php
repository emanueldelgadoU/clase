<?php
    class ControladorChat {

        public static function mostrarTextArea() {
            VistaMostrarTextArea::mostrarTextArea();

        }

        public static function mostrarRspuesta($mensaje) {
            VistaMostrarRespuesta::render($mensaje);

        }

        public static function guardar($titulo,$texto,$imagen,$fecha){
           $articuloChat = new Articulo(0,$titulo,$texto,$imagen,$fecha);
           ArticuloBD::addArticulo($articuloChat);
           echo "<script>window.location='enrutador.php?accion=mostrarTextArea';</script>";
        }




  


        }


    





?>