<?php	

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

    $ruta = "./vistas/prestamos/$clase.php"; 
    if (file_exists($ruta)){ 
        include_once $ruta; 
    }

    $ruta = "./vistas/libros/$clase.php"; 
    if (file_exists($ruta)){ 
        include_once $ruta; 
    }

    $ruta = "./vistas/usuarios/$clase.php"; 
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


        //INICIO
        if ($_REQUEST['accion'] == "inicio") {
            ControladorPrestamos::mostrarPrestamos();
        }

        if ($_REQUEST['accion'] == "formularioPrestamo") {
            ControladorPrestamos::formularioPrestamo();
        }

        //NUEVO PRESTAMO
        if ($_REQUEST['accion'] == "crearPrestamo") {

            $prestamo["idLibro"] = filtrado($_REQUEST['idLibro']);
            $prestamo["idUsuario"] = filtrado($_REQUEST['idUsuario']);
            $prestamo["fechaInicio"] = filtrado($_REQUEST['fechaInicio']);
            $prestamo["fechaFin"] = filtrado($_REQUEST['fechaFin']);
            $prestamo["estado"] = filtrado($_REQUEST['estado']);

            ControladorPrestamos::crearPrestamo($prestamo);
        }


    }
}






















?>