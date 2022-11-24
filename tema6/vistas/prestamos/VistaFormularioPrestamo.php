<?php

    class VistaFormularioPrestamo {

        public static function render() {

          include("./p/header.php");
          ?>
     
          <div class="card-body">
          <div class="p-5">
              <div class="text-center">

              </div>
              <form class="user" action="enrutador.php" method="post">
              <div class='mb-3'>
                          <label for='Id Libro' class='form-label'>Id Libro</label>
                          <input type='number' name='idLibro' class='form-control form-control-user'>
                      </div>

                      <div class='mb-3'>
                          <label for='Id Usuario' class='form-label'>Id Usuario</label>
                          <input type="number" class='form-control form-control-user' name="idUsuario" id="">
                      </div>

                      <div class='mb-3'>
                          <label for='Fecha Inicio' class='form-label'>Fecha Inicio</label>
                          <input type='date' name='fechaInicio' class='form-control form-control-user'>
                      </div>

                      <div class='mb-3'>
                          <label for='Fecha Final' class='form-label'>Fecha Final</label> <br>
                          <input type='date' name='fechaFin' class='form-control form-control-user'>
                      </div>
                    
                      <div class='mb-3'>
                          <label for='Estado' class='form-label'>Estado</label>
                          <input type='text' name='estado' class='form-control form-control-user'>
                      </div>
                      <input type='hidden' name='accion' value='crearPrestamo'>
                        <button class='btn btn-dark btn-user btn-block' type='submit'>Crear</button>
              </form>
              <hr>
          </div>
      </div>
     
      <?php
      
      include("./p/footer.php");

    }

  }
?>