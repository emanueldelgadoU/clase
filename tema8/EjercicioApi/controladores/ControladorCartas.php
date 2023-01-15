<?php
    class ControladorCartas {

        public static function mostrarCartas($pagina) {            
            VistaCartas::mostrarCartasAPI($pagina);
        }

        public static function mostrarCartasDetalle($idCarta) {            
            VistaCartas::mostrarCartasDetalle($idCarta);
        }

        
    }




?>