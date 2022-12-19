<?php

class ControladorPartida {

    //MOSTRAR PARTIDA
    public static function mostrarPartidas() {
      
        $partidas = PartidaBD::getPartidas();

        //Pinta la Partida
        VistaPartida::render($partidas);
    }

    //BORRAR PARTIDA
    public static function borrarPartida($idPartida) {

        PartidaBD::borrarPartida($idPartida);
        echo "<script>window.location='enrutador.php?accion=mostrarPartidas'</script>";
    }

    //NUEVA PARTIDA
    public static function insertar($partida) {
        PartidaBD::add($partida);
        echo "<script>window.location='enrutador.php?accion=mostrarPartidas'</script>";
     
    }

    //MOSTRAR INFO PARTIDA
    public static function mostrarDatos($idPartida) {

        $partida = PartidaBD::getPartidaID($idPartida);
        $jugador1 = JugadorBD::getJugador($partida->getIdJugador1());
        $jugador2 = JugadorBD::getJugador($partida->getIdJugador2());
        $jugador3 = JugadorBD::getJugador($partida->getIdJugador3());
        $jugador4 = JugadorBD::getJugador($partida->getIdJugador4());
      
        VistaDatos::render($partida,$jugador1,$jugador2,$jugador3,$jugador4);
        
    }


    //BUSCAR CIUDAD
    public static function burcarCiudad($ciudad) {
        $partidas = PartidaBD::getCiudad($ciudad);
        VistaPartida::render($partidas);
       
    }

    //BUSCAR FECHA
    public static function buscarFecha($fecha) {
        $partidas = PartidaBD::getFecha($fecha);
        VistaPartida::render($partidas);
    }

    

}




?>