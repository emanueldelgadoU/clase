<?php

    class VistaPrestamosTodos {

        public static function render($prestamos) {
       
          include("./p/header.php");
          echo "<a href='enrutador.php?accion=formularioPrestamo' class='btn btn-dark float-right'>Nuevo Prestamo</a>";
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
              echo '<td>' . $prestamo->getFechaInicio() . '</td>';?>
            <form action=""></form>
            <?php
              echo '<form class="user" action="enrutador.php" method="post">';
              echo "<td>" . "<input type='date' name='fechaInicio' value=".$prestamo->getFechaFin()." class='form-control form-control-user'>". "</td>";
              echo "<td>
              <select class='form-select' name='estado'= aria-label='Default select example'>
                  <option selected>".$prestamo->getEstado()."</option>
                  <option name='estado' value='ACTIVO'>ACTIVO</option>
                  <option name='estado' value='DEVUELTO'>DEVUELTO</option>
                  <option name='estado' value='sobrepasado1Mes'>sobrepasado1Mes</option>
                  <option name='estado' value='sobrepasado1Año'>sobrepasado1Año</option>

              </select></td>";
              echo '<form>';

      
          }
      
          echo "</table>";
        include("./p/footer.php");

    }

  }
?>