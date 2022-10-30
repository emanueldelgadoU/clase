<?php
session_start();
include("lib.php");
// session_destroy();
header("Content-Type: text/html; charset=UTF-8");
?>
<?php

$mayusculas=false;
$mensaje="La contraseña debe tener al menos una mayuscula y mas de 8 caracteres";

//ISSET ES SI HAY ALGO DENTRO DEL POST

if(isset($_POST['accion'])=="entrar"){
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $_SESSION['usuario'] = $_POST["email"];
        $_SESSION['pass']=str_split($_POST["password"]);

        //COMPROBAMOS SI HAY MAYUSCULAS Y ES MAYOR DE 8 CARACTERES
        $numLetras=count($_SESSION['pass']);
        foreach($_SESSION['pass'] as $valor){
            if(ctype_upper($valor)==true){
                $mayusculas=true;
                break;
            }
        }
        if($numLetras>=8 && $mayusculas==true){
            header("Location: proyectos.php");
         
        }else {
            //header("Location: login.php?fallo=$mensaje");
            echo '<script>window.location="'."login.php?fallo=$mensaje".'"</script>';
        }

    } else {
     header("Location: login.php");
    }

}


    //Sacamos los valores del nuevo producto
if(isset($_POST['accion'])=="nuevoProyecto"){
    if (isset($_POST['nuevoProyecto'])) {
        $nombre = filtrado($_POST['nombre']);
        $fechaIni = filtrado($_POST['fechaini']);
        $fechaFin = filtrado($_POST['fechafin']);
        $dias = filtrado($_POST['dias']);
        $porcentaje = filtrado($_POST['porcentaje']);
        $importancia = filtrado($_POST['importancia']);

        //Calculamos el id mayor y si el array de la sesion esta vacia
        //por haber borrado todos los proyectos id es 1;
        if(empty($_SESSION['proyectitos'])){
            $id=0;
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
        $nuevo=array();
        foreach($_SESSION['proyectitos'] as $linea){
            if($linea['id']!=$_GET['id']){
                array_push($nuevo,$linea);
                
            }
            $_SESSION['proyectitos']=$nuevo;
            echo '<script>window.location="'."proyectos.php".'"</script>';
        }
    }

    // //BORRAMOS PROYECTOS POR ID
    // if ($_GET['accion'] == "borrarid") {
    //     foreach($_SESSION['proyectitos'] as &$value){
    //         if($value['id']==$_GET['id']){
    //             //unset($value);
    //             unset($_SESSION['proyectitos'][$value['id']]);
    //             echo '<script>window.location="'."proyectos.php".'"</script>';
    //         }
    //     }
    // }

    //VER PROYECTO POR ID
    if ($_GET['accion'] == "informacion") {
        foreach($_SESSION['proyectitos'] as &$value ){
            if($value['id']==$_GET['id']){
                $_SESSION['id']=$_GET['id'];
          echo '<script>window.location="'."verProyecto.php?iDD=".$_SESSION['id'].'"</script>';
       
        }
    }
}

    if($_GET['destruir']=="destroy"){
        echo '<script>window.location="'."login.php".'"</script>';
        session_destroy();
}


?>