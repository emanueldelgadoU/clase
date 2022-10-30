<?php
session_start();
session_destroy();
include("lib.php");
?>





<?php

function generarCartones(){

  for($i=0; $i<$_SESSION['cantidadJugadores']; $i++){

          for($j=0; $j<15; $i++ ){
              //introducimos los numeros en cara array
              array_push($carton,rand(1,99));

              if($i==14){
                  //INTRODUCIMOS LOS CARTONES
                  array_push($_SESSION['jugadores'],$carton);
              }
          }
  } 
  return $_SESSION['jugadores'];
}


 if (!isset($_SESSION['num'])) {

echo'
<form class="form-label" action="controlador.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NUMERO DE JUGADORES</label>
    <input type="number" id="cantidadJugadores" name="cantidadJugadores" min="1" max="5">
  </div>
  <button type="submit" class="btn btn-primary">JUGAR</button>
</form>';

}else{

        foreach($_SESSION['num'] as $num){
            echo $num;
       }

       echo generarCartones();

       

}






?>