<?php
    class ControladorJugador {

        public static function mostrarFormularioLogin() {
            VistaLogin::mostrarFormularioLogin("");
        }

        public static function mostrarFormularioLoginError() {
            VistaLogin::mostrarFormularioLogin("Error de login, prueba otra vez");
        }


        public static function chequearLogin($email, $password) {
            $jugador = null;
            $valido = JugadorBD::chequearLogin($email, $password, $jugador);

            //Error login
            if ($valido == 0) {
                echo "<script>window.location='enrutador.php?accion=error';</script>";
            }
            //le asamos unsuario nulo pero cuando le volvemos de check login ya vale algo
            //Login correcto
            if ($valido == 1) {
                $_SESSION['jugador'] = serialize($jugador);
                echo "<script>window.location='enrutador.php?accion=mostrarPartidas';</script>";
            }








        }


    }





?>