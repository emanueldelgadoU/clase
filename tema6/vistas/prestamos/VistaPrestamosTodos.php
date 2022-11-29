<?php

    class VistaPrestamosTodos {

        public static function render($prestamos) {
       
          include("./p/header.php");

          
 
          echo '<div class="float-left">';
          echo '<form class="user" action="enrutador.php" method="post">';
          echo '<input type="text" class="form-control" placeholder="DNI" name="dni" >';
          echo '<input type="hidden" name="accion" value="buscarPorDNI">';
          echo '<button class="btn btn-warning mt-2 mb-2 " type="submit">BUSCAR</button>';
          echo '</form>';
          echo '</div>';

          echo '<div class="float-left ml-2">';
          echo '<form class="user" action="enrutador.php" method="post">';
          echo '<select class="form-select" name="estado">
                  <option selected> ESTADO </option>
                  <option value="Activo">Activo</option>
                  <option value="Devuelto">Devuelto</option>
                  <option value="SobrePasado1Mes">SobrePasado1Mes</option>
                  <option value="SobrePasado1Año">SobrePasado1Año</option>
                  </select>';
          echo '<input type="hidden" name="accion" value="buscarPorEstado">';
          echo '<button class="btn btn-warning mt-2 mb-2" type="submit">BUSCAR</button>';
          echo '</form>';
          echo '</div>';


          echo "<a href='enrutador.php?accion=formularioPrestamo' class='btn btn-dark float-right m-b3'>Nuevo Prestamo</a>";
          echo "<table class='table table-dark table-bordered text-center' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
      
          //Cabecera
          echo "<tr>";
          echo "<th> TITULO </th>";
          echo "<th> DNI </th>";
          echo "<th> FECHA INICIO </th>";
          echo "<th> FECHA FIN </th>";
          echo "<th> ESTADO </th>";
          echo "<th> ACCIONES </th>";
          echo "</tr>";
      
      
          //Contenido
          foreach ($prestamos as $prestamo) {
              echo "<tr>";
              echo '<td>' . $prestamo->titulo . '</td>';
              echo '<td>' . $prestamo->dni . '</td>';
              echo '<td>' . $prestamo->getFechaInicio() . '</td>';
            
              echo '<form class="user" action="enrutador.php" method="post">';
              echo '<td><input type="date" name="fechaFin" value="'.$prestamo->getFechaFin().'"class="form-control"></td>';
              
              echo'<td><select class="form-select" name="estado">
                  <option selected>'.$prestamo->getEstado().'</option>
                  <option value="Activo">Activo</option>
                  <option value="Devuelto">Devuelto</option>
                  <option value="SobrePasado1Mes">SobrePasado1Mes</option>
                  <option value="SobrePasado1Año">SobrePasado1Año</option>
                  </select></td>';

              echo '<input type="hidden" name="idPrestamo" value="'.$prestamo->getIdPrestamo().'">';
              echo '<td> <input type="hidden" name="accion" value="modificarPrestamo">
              <button class="btn btn-warning btn-user btn-block" type="submit">Modificar</button><td>';

              echo '</form>';
              echo "</tr>";
          }
      
          echo "</table>";
        include("./p/footer.php");

    }

  }
?>