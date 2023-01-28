<?php

    require_once './vendor/autoload.php';
    use MongoDB\Client;

    class ConexionBD {

        private static $conexion;
    
        public static function conectar($bd="chatGPT", $usuario="root", $password="toor", $host="mysql") {
    
            try {
                //CONEXIÓN A MONGODB CLOUD ATLAS. Comentar esta línea para conectar en local.
               //$host = "mongodb+srv://emyfoorlife:6ulwe2BjxAN9LYVB@cluster0.vtr8evs.mongodb.net/chatGPT";
               $host = "mongodb://root:toor@mongo:27017/"; //MongoDB en Docker
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

