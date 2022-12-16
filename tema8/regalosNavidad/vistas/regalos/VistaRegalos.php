<?php

    class VistaRegalos {

        public static function render($regalos) {
       
          include("./header.php");

          echo "<table class='table table-dark table-bordered text-center' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
          //Cabecera
          echo "<tr>";
          echo "<th> NOMBRE </th>";
          echo "<th> DESTINATARIO </th>";
          echo "<th> PRECIO </th>";
          echo "<th> ESTADO </th>";
          echo "<th> AÑO </th>";
          echo "<th> MODIFICAR </th>";
          echo "<th> ENLACES </th>";
          echo "<th> ELIMINAR </th>";
          echo "</tr>";
      
      
          //Contenido
          foreach ($regalos as $regalo) {
              echo "<tr>";
              echo '<form class="user" action="enrutador.php" method="post">';

              echo '<td><input type="text" name="nombre" value="'.$regalo->getNombre().'"class="form-control"></td>';
              echo '<td><input type="text" name="destinatario" value="'.$regalo->getDestinatario().'"class="form-control"></td>';
              echo '<td><input type="number" min="1" name="precio" value="'.$regalo->getPrecio().'"class="form-control"></td>';

              echo'<td><select class="form-select" name="estado">
                  <option selected>'.$regalo->getEstado().'</option>
                  <option value="Pendiente">Pendiente</option>
                  <option value="Comprado">Comprado</option>
                  <option value="Envuelto">Envuelto</option>
                  <option value="Entregado">Entregado</option>
                  </select></td>';

            

              echo '<td><input type="text" name="anio" value="'.$regalo->getAnio().'"class="form-control"></td>';

             
              
              //IdRegalo Modificar
              echo '<input type="hidden" name="idRegalo" value="'.$regalo->getIdRegalo().'">';
              echo '<td> <input type="hidden" name="accion" value="modificarRegalo">
              <button class="btn btn-warning btn-user btn-block" type="submit">Modificar</button></td>';
              echo '</form>';

              echo '<td><a href="enrutador.php?accion=verEnlaceRegalo&idRegalo='. $regalo->getIdRegalo() . '" class="btn btn-primary">Enlaces</a> </td>';

              //IdRegalo Borrar
              echo '<td><a href="enrutador.php?accion=eliminarRegalo&idRegalo='. $regalo->getIdRegalo() . '" class="btn btn-danger">Borrar</a> </td>';
          

              echo "</tr>";
          }
          echo "</table>";

        include("./footer.php");
    }
  }
?>