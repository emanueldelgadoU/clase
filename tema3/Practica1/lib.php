<?php

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}


function ver(){
    if ($_GET['accion'] == "informacion") {
        foreach($_SESSION['proyectitos'] as &$value ){
            if($value['id']==$_GET['id']){
                $_SESSION['id']=$_GET['id'];
          echo '<script>window.location="'."verProyecto.php?iDD=".$_SESSION['id'].'"</script>';
       
        }
    }
}
}

?>