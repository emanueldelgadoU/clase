<?php

    class VistaDatos {

        public static function render($partida,$jugador1,$jugador2,$jugador3,$jugador4) {
       

          $nombre2="";
          $nombre3="";
          $nombre4="";

          if($jugador2==null){
            $nombre2="Plaza Libre";
          }else{
            $nombre2=$jugador2->getNombre();
          }

          if($jugador3==null){
            $nombre3="Plaza Libre";
          }else{
            $nombre3=$jugador3->getNombre();
          }
     

          if($jugador4==null){
            $nombre4="Plaza Libre";
          }else{
            $nombre4=$jugador4->getNombre();
          }
     
    
          include("./header.php");

        
          echo   '<div class="row">';
          echo'  



            <div class="card mt-2 ml-3" style="width: 18rem;">
              <div class="card-header"> PARTIDA '.$partida->getIdPartida().' </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Fecha: '.$partida->getFecha().'</li>
                <li class="list-group-item">Hora: '.$partida->getHora().'</li>
                <li class="list-group-item">Ciudad: '.$partida->getCiudad().'</li>
                <li class="list-group-item">Cubierta: '.$partida->getCubierta().'</li>
                <li class="list-group-item">Estado: '.$partida->getEstado().'</li>
                <li class="list-group-item">Jugador 1: '.$jugador1->getNombre().'</li>
                <li class="list-group-item">Jugador 1: '.$nombre2.'</li>
                <li class="list-group-item">Jugador 2: '.$nombre3.'</li>
                <li class="list-group-item">Jugador 2: '.$nombre4.'</li>
   
              </ul>
            </div>';
                  
          
              echo'</div>';
              include("./footer.php");
        }
  }

?>











<!-- echo '<a href="enrutador.php?accion=menor&idRegalo='.$_REQUEST['idRegalo'].'" class=" ml-2 btn btn-dark">Ordenar Menor Precio</a>';
echo '<a href="enrutador.php?accion=mayor&idRegalo='.$_REQUEST['idRegalo'].'" class="ml-2 btn btn-dark">Ordenar Mayor Precio</a>'; -->
     
<!-- <div class="col-xl-6 mt-4 mb-4">
                    <div class="card">
                    <img src='.$enlace->getImagen().' class="card-img-top" alt="...">
                      <div class="card-body">
                      <h5 class="card-title">'.$enlace->getNombre().'</h5>
                      <p class="card-text"> Precio: '.$enlace->getPrecio().'</p>
                      <p class="card-text"> Prioridad: '.$enlace->getPrioridad().'</p>
                      <p class="card-text"><a href="'.$enlace->getEnlace().'" class="card-link">Enlace</a></p>
                      <a href="enrutador.php?accion=eliminarEnlace&idEnlace='. $enlace->getIdEnlace() .'&idRegalo='.$_REQUEST['idRegalo'].'" class="btn btn-danger">Borrar</a>
                      </div>
                    </div>
                  </div> -->