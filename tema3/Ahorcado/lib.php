<?php


function pasarACaracter(){
  $nuevoArr=array();
  for($i=0; $i<count(($_SESSION['palabra'])); $i++){
      array_push($nuevoArr,"___ ");
  }
  return $nuevoArr;
}


function pintarArray($array){
  foreach($array as $valor){
      echo "<a class='btn btn-warning m-1'>".$valor."<a>";
  }
}


function pintarLetras($array){
  foreach($array as $valor){
      echo "<a 'class='h1 text-danger'>".$valor."<a>";
  }
}


function palabra(){
    $arrayPalabra=["HOLA","PELOTA","PLAYA","CAMION","AVION", "PUENTE","BALONCESTO"];
    $palabra=$arrayPalabra[rand(0,6)];
    return $palabra;
}


function pintarArr($num){
  $arrayFotos = ['fotosA/10.png','fotosA/001.png','fotosA/002.png',
  'fotosA/003.png','fotosA/004.png','fotosA/005.png','fotosA/006.png'];
  echo '<img src="'.$arrayFotos[$num].'" alt="">';
}

function gano(){
  echo "<img class='img-fluid' src='fotosA/giphy2.gif'>" ;
  echo "<br>";
  echo '<a href="controlador.php?accion=nuevoJuego"" class="btn btn-dark m-3"> VOLVER A JUGAR</a>';
}

function pierde(){
  echo "<img class='img-fluid' src='fotosA/giphy.gif'>" ;
  echo "<br>";
  echo '<a href="controlador.php?accion=nuevoJuego"" class="btn btn-dark m-3"> VOLVER A JUGAR</a>';
}



function pintarTeclado(){
  echo'
  <center>
  <div class="row">
      <div class="col-12 mt-3 mb-3">
         </button>
          <a class="btn btn-dark m-1"href="controlador.php?letra=A">A</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=B">B</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=C">C</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=D">D</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=E">E</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=F">F</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=G">G</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=H">H</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=I">I</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=J">J</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=K">K</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=L">L</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=M">M</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=N">N</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=Ñ">Ñ</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=O">O</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=P">P</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=Q">Q</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=R">R</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=S">S</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=T">T</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=U">U</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=V">V</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=W">W</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=X">X</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=Y">Y</a>
          <a class="btn btn-dark m-1"href="controlador.php?letra=Z">Z</a>
      <div>
  <div>
  </center>';
}


?>
