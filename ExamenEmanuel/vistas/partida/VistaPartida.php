<?php

    class VistaPartida {

        public static function render($partidas) {
       
          include("./header.php");


          echo "<table class='table table-dark table-bordered text-center' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
          //Cabecera
          echo "<tr>";
          echo "<th> FECHA </th>";
          echo "<th> HORA </th>";
          echo "<th> CIUDAD </th>";
          echo "<th> LUGAR </th>";
          echo "<th> CUBIERTA </th>";
          echo "<th> ESTADO </th>";
          echo "<th> INFO </th>";
          echo "<th> ELIMINAR </th>";
          echo "</tr>";
      
      
          //Contenido
          foreach ($partidas as $partida) {
              echo "<tr>";  
              echo '<td>' . $partida->getFecha(). '</td>';
              echo '<td>' . $partida->getHora() . '</td>';
              echo '<td>' . $partida->getCiudad(). '</td>';
              echo '<td>' . $partida->getLugar() . '</td>';
              echo '<td>' . $partida->getCubierta(). '</td>';
              echo '<td>' . $partida->getEstado() . '</td>';
              //INFO
              echo '<td><a href="enrutador.php?accion=verPartida&idPartida='. $partida->getIdPartida() . '" class="btn btn-primary">INFO</a> </td>';
              //BORRAR
              echo '<td><a href="enrutador.php?accion=eliminarPartida&idPartida='. $partida->getIdPartida() . '" class="btn btn-danger">BORRAR</a> </td>';
              echo "</tr>";
          }

          echo "</table>";

      
        include("./footer.php");
    }
  }
?>