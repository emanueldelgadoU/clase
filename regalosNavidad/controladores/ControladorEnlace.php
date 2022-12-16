<?php

class ControladorEnlace {

    public static function mostrarEnlaces($idRegalo) {
        //LLamar al modelo para obtener todas los ENLACES en un array de ENLACES
        $enlaces = EnlaceBD::getEnalcesPorID($idRegalo);
  
        //Pinta el ENLACES
        VistaEnlaces::render($enlaces);
    }


    public static function insertarNuevoEnlace($enlace) {

        //SIN OBJETO
        EnlaceBD::addEnlace($enlace);
        echo "<script>window.location='enrutador.php?accion=verEnlaceRegalo&idRegalo=".$enlace['idRegalo']."'</script>";
    }

    public static function borrarEnlace($idEnlace) {

        //SIN 
        EnlaceBD::deleteEnlace($idEnlace);
        echo "<script>window.location='enrutador.php?accion=mostrarRegalos'</script>";
       
    }

    public static function ordenarEnalce($idRegalo, $mayorOmenor) {

        if($mayorOmenor=="mayor"){
            $enlacesOrdnenados=EnlaceBD::ordenarEnlacePrecioASC($idRegalo);
            VistaEnlaces::render($enlacesOrdnenados);
        }else{
            $enlacesOrdnenados=EnlaceBD::ordenarEnlacePrecioDESC($idRegalo);
            VistaEnlaces::render($enlacesOrdnenados);

        }

      
      
    }

    


   
}






?>