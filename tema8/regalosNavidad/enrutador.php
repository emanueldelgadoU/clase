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

    $ruta = "./vistas/regalos/$clase.php"; 
    if (file_exists($ruta)){ 
        include_once $ruta; 
    }

    $ruta = "./vistas/enlaces/$clase.php"; 
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
                    ControladorLogin::mostrarFormularioLogin();
                }

                //INICIO - LOGIN FAIL
                if ($_REQUEST['accion'] == "error") {
                    ControladorLogin::mostrarFormularioLoginError();
                }

                // MOSTRAR REGALOS
                if ($_REQUEST['accion'] == "mostrarRegalos") {
                    $idSesionUsuario = unserialize($_SESSION['usuario'])->getIdUsuario();
                    ControladorRegalo::mostrarRegalo($idSesionUsuario);
                }

                //COMPRUBA LOGIN EN BBDD
                if ($_REQUEST['accion'] == "checkLogin") {
                    $email = filtrado($_REQUEST['email']);
                    $password = filtrado($_REQUEST['password']);
                    ControladorLogin::chequearLogin($email, $password);

                }
                //-------------------------------------------------------------------



                //  BORRAR REGALO
                if ($_REQUEST['accion'] == "eliminarRegalo") {

                $idRegalo = filtrado($_REQUEST['idRegalo']);
                ControladorRegalo::borrarRegalo($idRegalo);

                }

                //  BORRAR ENLACE
                if ($_REQUEST['accion'] == "eliminarEnlace") {

                $idEnlace = filtrado($_REQUEST['idEnlace']);
                ControladorEnlace::borrarEnlace($idEnlace);

                }




                //-------------------------------------------------------------------
                //INSERTAR REGALO
                if ($_REQUEST['accion'] == "insertar") {

                    $regalo["nombre"] = filtrado($_REQUEST['nombre']);
                    $regalo["destinatario"] = filtrado($_REQUEST['destinatario']);
                    $regalo["precio"] = filtrado($_REQUEST['precio']);
                    $regalo["estado"] = filtrado($_REQUEST['estado']);
                    $regalo["anio"] = filtrado($_REQUEST['anio']);
                    $regalo["idUsuario"] = filtrado($_REQUEST['idUsuario']);

                ControladorRegalo::insertarRegalo($regalo);

                }

                //INSERTAR ENLACE
                if ($_REQUEST['accion'] == "insertarEnlace") {

                    $enlace["nombre"] = filtrado($_REQUEST['nombre']);
                    $enlace["enlace"] = filtrado($_REQUEST['enlace']);
                    $enlace["precio"] = filtrado($_REQUEST['precio']);
                    $enlace["imagen"] = filtrado($_REQUEST['imagen']);
                    $enlace["prioridad"] = filtrado($_REQUEST['prioridad']);
                    $enlace["idRegalo"] = filtrado($_REQUEST['idRegalo']);

                ControladorEnlace::insertarNuevoEnlace($enlace);

                }
                //-------------------------------------------------------------------

                //MODIFICAR REGALO
                if ($_REQUEST['accion'] == "modificarRegalo") {

                    $regalo["nombre"] = filtrado($_REQUEST['nombre']);
                    $regalo["destinatario"] = filtrado($_REQUEST['destinatario']);
                    $regalo["precio"] = filtrado($_REQUEST['precio']);
                    $regalo["estado"] = filtrado($_REQUEST['estado']);
                    $regalo["anio"] = filtrado($_REQUEST['anio']);
                    $regalo["idRegalo"] = filtrado($_REQUEST['idRegalo']);

                ControladorRegalo::modificarRegalo($regalo);

                }

                //BUSCAR POR AÑO
                if ($_REQUEST['accion'] == "buscarPorAnio") {

                // $idSesion = unserialize($_SESSION['usuario'])->getIdUsuario();
                $anio = filtrado($_REQUEST['anio']);
                ControladorRegalo::buscarRegalo($anio);

                }

                
                //VER ENLACES REGALOS
                if ($_REQUEST['accion'] == "verEnlaceRegalo") {

                $idRegalo = filtrado($_REQUEST['idRegalo']);
                ControladorEnlace::mostrarEnlaces($idRegalo);

                }

                //ORDENAR ENLACE POR PRECIO
                if ($_REQUEST['accion'] == "ordenarPorPrecio") {

                $idRegalo = filtrado($_REQUEST['idRegalo']);
                $mayorOmenor = filtrado($_REQUEST['mayorOmenor']);

                ControladorEnlace::ordenarEnalce($idRegalo,$mayorOmenor);

                }
            }  
        }        
    
    

?>