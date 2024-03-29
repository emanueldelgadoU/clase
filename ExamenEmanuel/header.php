<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LIBRERIA</title>

    <!-- Custom fonts for this template-->
    <link href="./p/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./p/css/sb-admin-2.css" rel="stylesheet">
    
    <script>
        import "@fortawesome/fontawesome-free/js/all";
    </script>

    <!-- Custom fonts for this template-->
    <link href="./p/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./p/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="./p/vendor/jquery/jquery.min.js"></script>
    <script src="./p/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <style>
        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            color: var(--bs-btn-active-color);
            background-color: #212529;
            border-color: var(--bs-btn-active-border-color);
        }
    </style>

</head>



<body>



    <!-- Page Wrapper -->
    <div id="wrapper">
         <!-- Page Wrapper -->

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php" style="width: 152px;">
                <div class="sidebar-brand-icon bg-password-image img-thumbnail rotate-n-15 text-dark  w-100">
                    <i class="fas fa-laugh-wink" style="visibility:hidden"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-center">REGALOS EMI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Gestionar Prestamos</span>
                </a> 
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#insertar">Añadir Prestamo</a>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#buscarDNI">Burcar por DNI</a>
                    </div>
                </div>
            </li>  -->

            <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#insertar">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Añadir Partida</span></a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#buscarPorAnio">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Buscar por Ciudad</span></a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#buscarFecha">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Buscar por Fecha</span></a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="enrutador.php?accion=mostrarPartidas">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Partidas</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top bg-dark shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-500 small">
                                <?php echo unserialize($_SESSION['jugador'])->getEmail()?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="p/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="enrutador.php?accion=destroy">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>
                    </ul>

            

                    
                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                <ul class="navbar-nav ml-auto">

<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
</li>

<div class="topbar-divider d-none d-sm-block"></div>


