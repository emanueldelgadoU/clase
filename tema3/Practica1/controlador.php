<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");
?>
<?php

if(isset($_POST['accion'])=="entrar"){
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $_SESSION['usuario'] = $_POST["email"];
        if ($_POST["email"] == "emanueldelgado.u@gmail.com" && $_POST["password"] == "22") {
            header("Location: proyectos.php");
        } else {
            header("Location: login.php");
        }
    } else {
        header("Location: login.php");
    }
}

// //Función para limpiar los input de los formularios
// function filtrado($datos){
//     $datos = trim($datos); // Elimina espacios antes y después de los datos
//     $datos = stripslashes($datos); // Elimina backslashes \
//     $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
//     return $datos;
//   }

    //Sacamos los valores del nuevo producto
if(isset($_POST['accion'])=="nuevoProyecto"){
    if (isset($_POST['nuevoProyecto'])) {
        $nombre = $_POST['nombre'];
        $fechaIni = ($_POST['fechaini']);
        $fechaFin = ($_POST['fechafin']);
        $dias = ($_POST['dias']);
        $porcentaje = ($_POST['porcentaje']);
        $importancia = ($_POST['importancia']);
    
        //Calculamos el id mayor y si el array de la sesion esta vacia
        //por haber borrado todos los proyectos id es 1;
        if(empty($_SESSION['proyectitos'])){
            $id=1;
        }else{
            $ids = array_column($_SESSION['proyectitos'], 'id');
            $id = max($ids) + 1;
        }
        
        //Metemos en nuevi proyecto en el array
        array_push($_SESSION['proyectitos'], ['id' => $id,
        'nombre' => $nombre,
        'fechaini' => $fechaIni,
        'fechafin' => $fechaFin,
        'dias' => $dias,
        'porcentaje' => $porcentaje,
        'importancia' => $importancia]);
        
        header("Location: proyectos.php");
    }
}
    //BORRAMOS TODOS LOS PORYECTOS
if ($_GET['accion'] == "borrartodo") {
    $limpioArray = array();
    $_SESSION['proyectitos']=$limpioArray;
    echo '<script>window.location="'."proyectos.php".'"</script>';
}
     
    //BORRAMOS PROYECTOS POR ID
    if ($_GET['accion'] == "borrarid") {
        foreach($_SESSION['proyectitos'] as $value ){
            if($value['id']==$_GET['id']){ 
                unset($_SESSION['proyectitos'][$value['id']]);
                echo '<script>window.location="'."proyectos.php".'"</script>'; 
            }
         }
    }
        
    
    

?>