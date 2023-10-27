<?php
//Se obtiene la sesión existente
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/perfilUsuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/gijgo.css" rel="stylesheet" type="text/css"/>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal.php">
                <div>
                    <img src="imagenes/logo.png" alt="logo" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">ADOPET SM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="principal.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>INICIO</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Perfil -->
            <li class="nav-item">
                <a class="nav-link" href="perfilAdmin.php?id=<?php echo $_SESSION["ID_USUARIO"];?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Perfil</span></a>
            </li>
            
            <!-- Nav Item - Cerrar sesión -->
            <li class="nav-item">
            <a  class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                <span>Cerrar Sesión</span>
            </a>
            </li>

            <!-- Nav Item - Lista de Usuarios -->
            <li class="nav-item active">
                <a class="nav-link" href="ListaUsuarios.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lista de Usuarios</span></a>
            </li>

            <!-- Nav Item - Lista de Refugios -->
            <li class="nav-item active">
                <a class="nav-link" href="ListaRefugios.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lista de Refugios</span></a>
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

                <section id="hero" class="d-flex flex-column justify-content-center align-items-left">
                    <h1><?php if (isset($_SESSION['ID_USUARIO'])) {
                                    echo $_SESSION['NOMBRE_USUARIO']; 
                                    echo " ";
                                    echo $_SESSION['APELLIDO_USUARIO'];
                                    }   
                                    ?></h1>
                    <p>¡Bienvenidos! <span class="typed"></span></p>
                </section><!-- End Hero -->
                    
                </div>
                
                <!-- End of Topbar -->
                
                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="../controlador/accion/act_logout.php">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
            <!-- End of Main Content -->
    
    <script src="js/librerias/jquery-3.3.1.min.js"></script>
    <script src="js/librerias/gijgo.min.js" ></script>    
    <script src="js/logica/registrar.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/librerias/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="js/logica/administradorUsuarios.js"></script>
</body>
</html>
