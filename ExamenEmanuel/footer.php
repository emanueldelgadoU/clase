

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-dark">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span class="text-light font-weight-bold">Copyright &copy; BLIBLIOTECA EMI</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>




    <!-- Core plugin JavaScript-->
    <script src="./p/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./p/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./p/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="./p/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="./p/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./p/js/demo/chart-area-demo.js"></script>

    <script>

        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

    </script>
    <script src="./p/js/demo/chart-bar-demo.js"></script>


<!--     
    $partida["fecha"] = filtrado($_REQUEST['fecha']);
                    $partida["hora"] = filtrado($_REQUEST['hora']);
                    $partida["ciudad"] = filtrado($_REQUEST['ciudad']);
                    $partida["cubierta"] = filtrado($_REQUEST['cubierta']);
                    $partida["estado"] = filtrado($_REQUEST['estado']);
                    $partida["lugar"] = filtrado($_REQUEST['lugar']); -->

    <!-- MODAL INSERTAR REGALO -->
    <div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Partida</h5>
                </div>
                <div class="modal-body">
                    <form id='formInsertarRegalo'>

                        <div class='mb-3'>
                            <label for='nombre' class='form-label'>FECHA</label>
                            <input type='date' name='fecha' class='form-control' aria-describedby='emailHelp'>
                        </div>

                        <div class='mb-3'>
                            <label for='hora' class='form-label'>HORA</label>
                            <input type='text' name='hora' class='form-control'>
                        </div>

                        <div class='mb-3'>
                            <label for='ciudad' class='form-label'>CIUDAD</label> <br>
                            <input type='text' name='ciudad' class='form-control' >
                        </div>

                        <div class='mb-3'>
                        <p class="form-Lael">CUBIERTA</p>
                            <select name="cubierta" class="form-select" aria-label="Default select example">
                                <option selected>Eligue una opcion</option>
                                <option  value="Si">SI</option>
                                <option  value="No">NO</option>
                            </select>
                        </div>

                        <div class='mb-3'>
                            <p class="form-Lael">Estado</p>
                            <input type="radio" class="btn-check" name="estado" value='abierta' id="option1"
                                autocomplete="off">
                            <label class="btn btn-secondary" for="option1">ABIERTO</label>
                        </div>

                        <div class='mb-3'>
                            <label for='lugar' class='form-label'>LUGAR</label> <br>
                            <input type='text' name='lugar' class='form-control' >
                        </div>

                        <input type="hidden" name="idJugador1" value="<?php echo unserialize($_SESSION['jugador'])->getIdJugador()?>">
                        <input type="hidden" name="accion" value="insertar">

                    </form>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary hidden-xs" data-bs-dismiss="modal">Close</button>-->
                    <button type='submit' class='btn btn-primary' form="formInsertarRegalo"
                        formaction="enrutador.php" formmethod="get">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    

        <!-- MODAL BUSCAR CIUDAD -->
        <div class="modal fade" id="buscarPorAnio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">BUSCAR PARTIDO POR CIUDAD</h5>
                </div>
                <div class="modal-body">
                    <form id='formBuscarDNI'>

                    <div class='mb-3'>
                        <label for='titlulo' class='form-label'>Introduce la ciudad</label>
                        <input type='text' name='ciudad' class='form-control'>
                    </div>

                    <input type="hidden" name="accion" value="buscarCiudad">
          
                    </form>
                </div>
                <div class="modal-footer">
                    <button type='submit'  class='btn btn-primary' form="formBuscarDNI"
                        formaction="enrutador.php" formmethod="GET">Enviar</button>
                </div>
            </div>
        </div>
    </div>

            <!-- MODAL BUSCAR FECHA -->
            <div class="modal fade" id="buscarFecha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">BUSCAR PARTIDO POR FECHA</h5>
                </div>
                <div class="modal-body">
                    <form id='formBuscarFecha'>

                    <div class='mb-3'>
                        <label for='fecha' class='form-label'>Introduce la fecha</label>
                        <input type='date' name='fecha' class='form-control'>
                    </div>

                    <input type="hidden" name="accion" value="buscarFecha">
          
                    </form>
                </div>
                <div class="modal-footer">
                    <button type='submit'  class='btn btn-primary' form="formBuscarFecha"
                        formaction="enrutador.php" formmethod="GET">Enviar</button>
                </div>
            </div>
        </div>
    </div>

            <!-- MODAL AÑADIR JUGADOR -->
            <div class="modal fade" id="addJugador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">AÑADIR JUGADOR</h5>
                </div>
                <div class="modal-body">
                <form class='user' action='enrutador.php' method='POST' enctype="multipart/form-data">

                    <div class='mb-3'>
                            <label for='nombre' class='form-label'>Nombre</label>
                            <input type='text' name='nombre' class='form-control' aria-describedby='emailHelp'>
                        </div>

                        <div class='mb-3'>
                            <label for='enlace' class='form-label'>enlace</label>
                            <input type='text' name='enlace' class='form-control'>
                        </div>

                        <div class='mb-3'>
                            <label for='precio' class='form-label'>Precio</label> <br>
                            <input type='number' name='precio' class='form-control' >
                        </div>

                        <div class='mb-3'>
                            <label for='imagen' class='form-label'>Imagen</label> <br>
                            <input type='file' name='imagen' class='form-control' >
                        </div>

                        <div class='mb-3'>
                        <p class="form-Lael">Prioridad</p>
                            <select name="prioridad" class="form-select" aria-label="Default select example">
                                <option selected>Eligue una opcion</option>
                                <option  value="1">UNO</option>
                                <option  value="2">DOS</option>
                                <option  value="3">TRES</option>
                            </select>
                        </div>
                                
                        <input type="hidden" name="idRegalo" value="<?php echo $_GET['idRegalo']?>">
                        <input type="hidden" name="accion" value="insertarEnlace">
                        
                        <button type='submit' class='btn btn-primary'>
                            Enviar
                        </button>
                    </form>
                </div>
         
            </div>
        </div>
    </div>

</body>

</html>