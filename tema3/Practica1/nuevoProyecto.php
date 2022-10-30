<?php
    include("cabecera.php"); 
?>
<div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="p-5">
                                  <div class="text-center">
                                      <h1 class="h4 text-gray-900 mb-4">NUEVO PROYECTO</h1>
                                  </div>
                                  <form class="user" action="controlador.php" method="POST">
                                      <div class="form-group">
                                          <input type="text" class="form-control form-control-user" name="nombre"
                                              id="nombre" aria-describedby="" placeholder="Nombre del proyecto" />
                                      </div>
                                      <div class="form-group">
                                          <input type="date" class="form-control form-control-user" name="fechaini"
                                              id="fechaini" aria-describedby="" placeholder="Fecha de inicio" />
                                      </div>
                                      <div class="form-group">
                                          <input type="date" class="form-control form-control-user" name="fechafin"
                                              id="fechafin" aria-describedby="" placeholder="Fecha de finalizacion" />
                                      </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control form-control-user"
                                              name="dias" id="dias" aria-describedby=""
                                              placeholder="Dias Transcurridos" />
                                      </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control form-control-user"
                                              id="porcentaje" name="porcentaje"
                                              placeholder="Porcentaje completado" />
                                      </div>
                                      <div class="form-group">
                                          <input type="number" min="1" max="5" class="form-control form-control-user" id="importancia"
                                              name="importancia" placeholder="Importancia" />
                                      </div>
                                      <div class="form-group">
                                          <div class="custom-control custom-checkbox small">
                                              <input type="checkbox" class="custom-control-input" id="customCheck" />
                                          </div>
                                      </div>
                                            <!-- HIDDEN -->
                                            <!-- HIDDEN -->
                                            <!-- HIDDEN -->
                                   
                                              <input type="hidden" name="accion" value="nuevoProyecto" />
                                  
                                            <!-- HIDDEN -->
                                            <!-- HIDDEN --> 
                                            <!-- HIDDEN -->
                                            <!-- HIDDEN -->
                                 
                                      <button type="submit" name="nuevoProyecto" class="btn btn-primary btn-user btn-block">CREAR PROYECTO</button>
  
                                  </form>
                                  <hr />
                                  <div class="text-center"></div>
                                  <div class="text-center"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>'

<?php
    include("pie.php"); 
?>
