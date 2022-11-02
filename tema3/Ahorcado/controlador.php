<?php
session_start();
include("lib.php");
?>
<?php
//BOTON JUGAR DE NUEVO
if(isset($_GET['accion'])){
  if($_GET['accion']=="nuevoJuego")
  session_destroy();
  header("Location: index.php");
}

if(isset($_GET['letra'])){
  $letra=$_GET["letra"];
}
//SI LA LETRA INTRODUCIDA NO ESTA EN EL ARRAY DE LETRAS USADAS LA METEMOS
if(isset($_SESSION['letras'])){
  if(!in_array($letra, $_SESSION['letras'])){
    array_push($_SESSION['letras'],$letra);
  }
}
//SI LA LETRA ESTA EN LA PALABRA, PINTAMOS LA LETRA
if(isset($_SESSION['palabra'])){
 
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
}
header("Location: index.php");
?>
