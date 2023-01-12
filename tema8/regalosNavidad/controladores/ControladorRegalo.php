<?php

class ControladorRegalo {

    public static function mostrarRegalo($idSesionUsuario) {
        //LLamar al modelo para obtener todas los REGALOS en un array de REGALOS
        $regalos = RegaloBD::getRegalos($idSesionUsuario);

        //Pinta el Regalo
        VistaRegalos::render($regalos);
    }


    public static function borrarRegalo($idRegalo) {

        RegaloBD::deleteRegalo($idRegalo);
        echo "<script>window.location='enrutador.php?accion=mostrarRegalos'</script>";
    }

    public static function insertarRegalo($regalo) {

        //CON OBJETO
        //$regalo1 = new Regalo($regalo['idUsuario'],$regalo[''])

        //SIN OBJETO
        RegaloBD::addRegalo($regalo);
        echo "<script>window.location='enrutador.php?accion=mostrarRegalos'</script>";
    }


    
    public static function modificarRegalo($regalo) {

        //SIN OBJETO
        RegaloBD::updateRegalo($regalo);
        echo "<script>window.location='enrutador.php?accion=mostrarRegalos'</script>";
        
        //CON OBJETO
        //$regalo1 = new Regalo($regalo['idUsuario'],$regalo[''])

    }

    public static function buscarRegalo($anio) {

        $regalos = RegaloBD::getRegalosPorAnio($anio);
        VistaRegalos::render($regalos);
      
    }



 
 



}




?>