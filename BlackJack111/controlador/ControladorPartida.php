
<?php

class ControladorPartida {


    public static function iniciarPartida() {


        $partida = new Partida();

        // Añadir dos cartas al Crupier

        $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());
        $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());

        // Añadir dos cartas al Crupier

        $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());
        $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());
        // Imprimir partida

        $_SESION['partida'] = serialize($partida);



        $manoCrupier = unserialize($_SESION['partida']);
        $valorManorCrupier= $manoCrupier->getCrupier()->valorMano();

        

     
    
    

        

    }






}






?>