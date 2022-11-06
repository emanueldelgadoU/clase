<?php
session_start();
//session_destroy();
include("lib.php");
?>
<?php

$letra=$_GET["letra"];

//SI LA LETRA INTRODUCIDA NO ESTA EN EL ARRAY DE LETRAS USADAS LA METEMOS
if(!in_array($letra, $_SESSION['letras'])){
  array_push($_SESSION['letras'],$letra);
}

//SI LA LETRA ESTA EN LA PALABRA, PINTAMOS LA LETRA
if(in_array($letra, $_SESSION['palabra'])){

    for($i=0; $i < count($_SESSION['palabra']); $i++) {
      if ($_SESSION['palabra'][$i] == $letra) {
          $_SESSION['palabraActual'][$i] = $letra;
      }
    }

//SI AL LETRA NO ESTA EN LA PALABRA SUMAMOS CONTADOR DE FALLOS
}else{ 
  if($_SESSION['contador']<=5)
  $_SESSION['contador']++;
}

//JUGAR DE NUEVO
if(isset($_GET['accion'])){
  if($_GET['accion']=="nuevoJuego"){
    session_destroy();
    echo '<script>window.location="'."index.php".'"</script>';
  }
}
echo '<script>window.location="'."index.php".'"</script>';
?>
