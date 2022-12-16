<?php

    class VistaEnlaces {

        public static function render($enlaces) {
       
          include("./header.php");

          echo '<div class="col-12 col-md-6 ml-2">';
          //BOTON NUEVO ENLACE
          echo '<a class="btn btn-warning mt-2 mb-2" href="#" data-toggle="modal" data-target="#addEnlace">
                <span>AÑADIR ENLACE</span></a>';

          //BOTON ORDENAR
          echo '<form class="user" action="enrutador.php" method="post">';
          
          echo '<select class="form-select" name="mayorOmenor" id="mayorOmenor">
                  <option selected> ORDENAR POR PRECIO </option>
                  <option value="mayor">MAYOR</option>
                  <option value="menor">MENOR</option>
                  </select>';
                  
          echo '<input type="hidden" name="idRegalo" value="'.$_REQUEST['idRegalo'].'">';
          echo '<input type="hidden" name="accion" value="ordenarPorPrecio">';
          echo '<button class="btn btn-warning mt-2 mb-2" type="submit">BUSCAR</button>';
          echo '</form>';
          echo '</div>';

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
                      <a href="enrutador.php?accion=eliminarEnlace&idEnlace='. $enlace->getIdEnlace() . '" class="btn btn-danger">Borrar</a>
                      </div>
                    </div>
                  </div>';
                  
          }
              echo   '</div>';

              include("./footer.php");
        }
  }

?>