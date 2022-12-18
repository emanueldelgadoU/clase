<?php

class ControladorEnlace {

    public static function mostrarEnlaces($idRegalo) {
        //LLamar al modelo para obtener todas los ENLACES en un array de ENLACES
        $enlaces = EnlaceBD::getEnalcesPorID($idRegalo);
  
        //Pinta el ENLACES
        VistaEnlaces::render($enlaces);
    }


    public static function insertarNuevoEnlace($enlace) {

        
        EnlaceBD::addEnlace($enlace);
    
    }

    public static function borrarEnlace($regalo) {
        
        $idEnlace = $regalo['idEnlace'];
        $idRegalo = $regalo['idRegalo'];

        EnlaceBD::deleteEnlace($idEnlace);
        echo "<script>window.location='enrutador.php?accion=verEnlaceRegalo&idRegalo=".$idRegalo."'</script>";
       
       
    }

    public static function ordenarEnalceASC($idRegalo) {

        $enlacesOrdnenados=EnlaceBD::ordenarEnlacePrecioASC($idRegalo);
        VistaEnlaces::render($enlacesOrdnenados);
        
    }

    public static function ordenarEnalceDESC($idRegalo) {

        $enlacesOrdnenados=EnlaceBD::ordenarEnlacePrecioDESC($idRegalo);
        VistaEnlaces::render($enlacesOrdnenados);
    }
    


   
}






?>