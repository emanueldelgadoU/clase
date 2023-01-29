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

    $ruta = "./vistas/$clase.php"; 
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

                //COMPRUBA LOGIN EN BBDD
                if ($_REQUEST['accion'] == "checkLogin") {
                    $email = filtrado($_REQUEST['email']);
                    $password = filtrado($_REQUEST['password']);
                    ControladorLogin::chequearLogin($email, $password);

                }

                // MOSTRAR TEXTAREA
                if ($_REQUEST['accion'] == "mostrarTextArea") {
                    ControladorChat::mostrarTextArea();
                }

                // MOSTRAR RESPUESTA
                if ($_REQUEST['accion'] == "datos") {
                    $mensaje = filtrado($_REQUEST['mensaje']);
                    ControladorChat::mostrarRspuesta($mensaje);
                }

                // GUARDAR RESPUESTA CHAT
                if ($_REQUEST['accion'] == "guardar") {
                    $titulo = $_REQUEST['titulo'];
                    $texto = $_REQUEST['texto'];
                    $imagen = $_REQUEST['foto'];
                    $fecha = date("d-m-Y");
                    
                    ControladorChat::guardar($titulo,$texto,$imagen,$fecha);
                }

                

                //-------------------------------------------------------------------

            }  
        }        
?>