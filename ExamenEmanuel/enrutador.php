<?php	
session_start();
   //AUTOLOAD
function autocarga($clase){

    $ruta = "./controladores/$clase.php"; 
    if (file_exists($ruta)){ 
      include_once $ruta; 
    }

    $ruta = "./modelos/$clase.php"; 
    if (file_exists($ruta)){ 
        include_once $ruta; 
    }

    $ruta = "./vistas/partida/$clase.php"; 
    if (file_exists($ruta)){ 
        include_once $ruta; 
    }

    $ruta = "./vistas/login/$clase.php"; 
    if (file_exists($ruta)){ 
        include_once $ruta; 
    }
} 
spl_autoload_register("autocarga");


  //Función para filtrar los campos del formulario
  function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if ($_REQUEST) {
    
        if (isset($_REQUEST['accion'])) {

                //  INICIO
                if ($_REQUEST['accion'] == "inicio") {
                    ControladorJugador::mostrarFormularioLogin();
                }

                //INICIO - LOGIN FAIL
                if ($_REQUEST['accion'] == "error") {
                    ControladorJugador::mostrarFormularioLoginError();
                }

                // MOSTRAR REGALOS
                if ($_REQUEST['accion'] == "mostrarPartidas") {
    
                    ControladorPartida::mostrarPartidas();
                }

                //COMPRUBA LOGIN EN BBDD
                if ($_REQUEST['accion'] == "checkLogin") {
                    $email = filtrado($_REQUEST['email']);
                    $password = filtrado($_REQUEST['password']);
                    ControladorJugador::chequearLogin($email, $password);

                }
                //-------------------------------------------------------------------

                //  BORRAR PARTIDA
                if ($_REQUEST['accion'] == "eliminarPartida") {

                $idPartida = filtrado($_REQUEST['idPartida']);
                ControladorPartida::borrarPartida($idPartida);

                }
                     
                //VER DATOS
                if ($_REQUEST['accion'] == "verPartida") {

                $idPartida = filtrado($_REQUEST['idPartida']);
                ControladorPartida::mostrarDatos($idPartida);

                }

                //-------------------------------------------------------------------
                //INSERTAR PARTIDA
                if ($_REQUEST['accion'] == "insertar") {

                    $partida["fecha"] = filtrado($_REQUEST['fecha']);
                    $partida["hora"] = filtrado($_REQUEST['hora']);
                    $partida["ciudad"] = filtrado($_REQUEST['ciudad']);
                    $partida["cubierta"] = filtrado($_REQUEST['cubierta']);
                    $partida["estado"] = filtrado($_REQUEST['estado']);
                    $partida["lugar"] = filtrado($_REQUEST['lugar']);
                    $partida["idJugador1"] = filtrado($_REQUEST['idJugador1']);

                ControladorPartida::insertar($partida);

                }

         
                //-------------------------------------------------------------------


                //BUSCAR POR CIUDAD
                if ($_REQUEST['accion'] == "buscarCiudad") {

                $ciudad = filtrado($_REQUEST['ciudad']);
                ControladorPartida::burcarCiudad($ciudad);

                }
                
                //BUSCAR POR FECHA
                if ($_REQUEST['accion'] == "buscarFecha") {

                $fecha = filtrado($_REQUEST['fecha']);
                ControladorPartida::buscarFecha($fecha);

                }

                if ($_REQUEST['accion'] == "destroy") {
                    session_destroy();
                    echo "<script>window.location='enrutador.php?accion=inicio'</script>";
                }
    



            }  
        }        
    
    

?>