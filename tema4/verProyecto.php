<?php
include("cabecera.php");
?>

<?php


// foreach($_SESSION['proyectitos'] as $valor){
//     if($_SESSION['id']==$valor['id']){
//         $nombre = $valor["nombre"];
//         $fechaI = $valor["fechaini"];
//         $fechaF = $valor["fechafin"];
//         $dias = $valor["dias"];
//         $porcentaje = $valor["porcentaje"];
//         $importancia = $valor["importancia"];
//         $id = $valor["id"];
//     }
// }

foreach($_SESSION['proyectitos'] as $valor){
        if($_GET['iDD']==$valor['id']){
            $nombre = $valor["nombre"];
            $fechaI = $valor["fechaini"];
            $fechaF = $valor["fechafin"];
            $dias = $valor["dias"];
            $porcentaje = $valor["porcentaje"];
            $importancia = $valor["importancia"];
            $id = $valor["id"];
        }
   }
?>
                    <!-- Content Row -->
                    <div class="row">

                       <!-- NOMBRE PROYECTO -->
                       <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                NOMBRE DEL PROYECTO</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo strtoupper($nombre)?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FECHA INICIO -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                FEHCA INICIO</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo strtoupper($fechaI)?></div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FECHA FIN -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                FECHA FIN</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo strtoupper($fechaF)?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar- fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PORCENTAJE -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">PORCENTAJE
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $porcentaje?>%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: <?php echo $porcentaje?>%" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DIAS -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                DIAS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo strtoupper($dias)?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           <!-- IMPORTANCIA -->
                           <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                IMPORTANCIA</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo strtoupper($importancia)?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- ID -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                ID</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo strtoupper($id)?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <canvas id="donut"></canvas>
                </div>
            </div>
        </div>
    </div>


<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>
   
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
let completado = <?php echo $porcentaje; ?>;
var ctx = document.getElementById("donut");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Finalizado","Restante"],
    datasets: [{
      data: [completado,100-completado],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>

 <!-- Page level custom scripts -->
<script src="js/demo/chart-pie-demo.js"></script>


<?php
include("pie.php");
?>