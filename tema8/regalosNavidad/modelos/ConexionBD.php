<?php

    require_once './vendor/autoload.php';
    use MongoDB\Client;

    class ConexionBD {

        private static $conexion;

        public static function conectar($bd="regalosNavidad", $usuario="root", $password="toor", $host="mariadb") {

            try {
                //CONEXIÓN A MONGODB CLOUD ATLAS. Comentar esta línea para conectar en local.
                $host = "mongodb://root:toor@mongo:27017/"; //MongoDB en Docker
                //$host = "mongodb+srv://admin:UNUtLvCSBPJmtP3m@cluster0.vtr8evs.mongodb.net/?retryWrites=true&w=majority";
                self::$conexion = (new Client($host))->{$bd};
            } catch (Exception $e){
                echo $e->getMessage();
            }
            return self::$conexion;

        }

        public static function cerrar() {
            self::$conexion = null;
        }


    }

?>