<?php

    class VistaEnlaces {

        public static function render($enlaces) {
       
          include("./header.php");

          echo '<div class="col-12 col-md-6 ml-2">';
          //BOTON NUEVO ENLACE
          echo '<a class="btn btn-warning mt-2 mb-2" href="#" data-toggle="modal" data-target="#addEnlace">
                <span>AÑADIR ENLACE</span></a>';

          //BOTON ORDENAR
       
          echo '<a href="enrutador.php?accion=menor&idRegalo='.$_REQUEST['idRegalo'].'" class=" ml-2 btn btn-dark">Ordenar Menor Precio</a>';
          echo '<a href="enrutador.php?accion=mayor&idRegalo='.$_REQUEST['idRegalo'].'" class="ml-2 btn btn-dark">Ordenar Mayor Precio</a>';
     
          echo   '<div class="row">';
          foreach ($enlaces as $enlace) {
              echo'  

                  <div class="col-xl-6 mt-4 mb-4">
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
                  </div>';
                  
          }
              echo   '</div>';

              include("./footer.php");
        }
  }

?>