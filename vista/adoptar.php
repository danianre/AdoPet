<?php
    session_start();
//     require_once (__DIR__."/../modelo/DAO/DataSource.php");
    
// if(!empty($_POST)){
//     if(!empty($_POST['nombre']) || !empty($_POST['edad_estimada']) || !empty($_POST['foto']) || !empty($_POST['idGenero']) || !empty($_POST['idTipo_animal']) || !empty($_POST['idRefugio']) || !empty($_POST['idUsuario_adopta'])){
//         $idUsuario = $_POST['idUsuario'];
//         $idMascota = $_POST['idMascota'];
//         $nombre = $_POST['nombre'];
//         $edad_estimada = $_POST['edad_estimada'];
//         $foto = $_POST['foto'];
//         $idGenero = $_POST['idGenero'];
//         $idTipo_animal = $_POST['idTipo_animal'];
//         $idRefugio = $_POST['idRefugio'];
//         $idUsuario_adopta = $_POST['idUsuario_adopta'];


//         $sql_update = mysqli_query($conexion, "UPDATE mascota 
//                                                 SET idUsuario_adopta = '$idUsuario'
//                                                 WHERE idMascota = $idMascota");
        
//         if($sql_update){
//             header("Location: adoptar.php?msg=Se ha adoptado");
//         }else{
//             header("Location: adoptar.php?msg=Error");
//         }
//     }
// }  

// //Mostrar datos
// if(empty($_REQUEST['id']))
// {
//     //header("Location: adoptar.php?id=$idUsuario");
//     //mysqli_close($conexion);
// }
// $idmasc = $_REQUEST['id'];
// $sql = mysqli_query($conexion, "SELECT idMascota, nombre, edad_estimada, foto, idGenero, idTipo_animal, idRefugio, idUsuario_adopta
//                                 FROM mascota
//                                 WHERE idMascota = $idmasc");
// //mysqli_close($conexion);
// $result_sql = mysqli_num_rows($sql);

// if($result_sql == 0){
//     //header("Location: adopet.php?id=$idUsuario");
// }else{
//     while($data = mysqli_fetch_array($sql)){
//         $idmasc = $data['idMascota'];
//         $nombre = $data['nombre'];
//         $edad_estimada = $data['edad_estimada'];
//         $foto = $data['foto'];
//         $idGenero = $data['idGenero'];
//         $idTipo_animal = $data['idTipo_animal'];
//         $idRefugio = $data['idRefugio'];
//         $idUsuario_adopta = $data['idUsuario_adopta'];
//     }
// }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/perfilUsuario.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/gijgo.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principalUser.php">
                <div>
                    <img src="imagenes/logo.png" alt="logo" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">ADOPET SM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="principalUser.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>INICIO</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Adoptar -->
            <li class="nav-item">
                <a class="nav-link" href="adoptar.php?id=<?php echo $_SESSION["ID_USUARIO"];?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Adoptar</span></a>
            </li>

            <!-- Nav Item - Reportar -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Donar</span></a>
            </li>

            <!-- Nav Item - Reportar -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reportar</span></a>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a id="nombreUsuario" class="nav-link dropdown-toggle" href="#" id="userDropdown" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php if (isset($_SESSION['ID_USUARIO'])) {
                                    echo "<img class='fotoUsuario' src='./fotoUsuario/".$_SESSION['FOTO_USUARIO']."' alt='foto' width='50px'>";
                                    }
                                ?> </span>
                               
                                <?php if (isset($_SESSION['ID_USUARIO'])) {
                                    echo $_SESSION['NOMBRE_USUARIO'];
                                    }   
                                    ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfilUsuario.php?id=<?php echo $_SESSION["ID_USUARIO"];?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
            </div>
            <!-- End of Main Content -->
            
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

            
            <!-- Section Adoptar-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-ocntent-center">
                    <div class="col mb-5">
                        <div class="card h-100 w-50">
                            <?php
                            require_once (__DIR__."../../modelo/DAO/DataSource.php");
                            $consulta = "SELECT m.idMascota, m.nombre, m.edad_estimada AS edad, m.foto, g.tipo_genero, ta.nombre_tipo, r.nombre AS nRefugio, m.idUsuario_adopta 
                            FROM mascota m INNER JOIN tipo_animal ta ON m.idTipo_animal = ta.idTipo_animal 
                                            INNER JOIN genero g ON m.idGenero = g.idGenero 
                                            INNER JOIN refugio r ON m.idRefugio = r.idRefugio;";
                            $query = mysqli_query($conexion, $consulta);
                            $result = mysqli_num_rows($query);
                            while($data = mysqli_fetch_array($query)){
                            ?>
                            
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white" style="top: 0.5rem; right: 0.5rem"><?php echo 'Refugio: '; echo $data["nRefugio"];?></div>
                            <!-- Pet image-->
                            <?php echo "<img class='card-img-top' src='./fotoUsuario/".$data['foto']."' alt='fotoMascota' height='280px' width='200px'/>"?>
                            <!-- Pet details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Pet name-->
                                    <h5 class="fw-bolder"><?php echo $data["nombre"];?></h5>
                                    <!-- Pet price-->
                                    <?php echo $data["nombre_tipo"];?> - <?php echo $data["tipo_genero"];?>
                                    <br>
                                    <?php echo '<b> Fecha estimada de nacimiento: </b>' ; echo $data["edad"];?> 
                                </div>
                            </div>
                            
                            <!-- Pet actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">      
                            <form class="form-eliminar" method="post" action="" >
                                <!-- <input type="hidden" name="idMascota" value="<?php echo $idmasc; ?>">
                                <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                                <input type="hidden" name="edad_estimada" value="<?php echo $edad_estimada; ?>">
                                <input type="hidden" name="foto" value="<?php echo $foto; ?>">
                                <input type="hidden" name="idGenero" value="<?php echo $idGenero; ?>">
                                <input type="hidden" name="idTipo_animal" value="<?php echo $idTipo_animal; ?>">
                                <input type="hidden" name="idRefugio" value="<?php echo $idRefugio; ?>">
                                <input type="hidden" name="idUsuario_adopta" value="<?php echo $idUsuario_adopta; ?>"> -->
                                <input class="btn  btn-primary btn-block " type="submit" value="Adoptar">
                                </form>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
    <script src="js/librerias/jquery-3.3.1.min.js"></script>
    <script src="js/librerias/gijgo.min.js" ></script>    
    <script src="js/logica/registrar.js"></script>
    <script src="js/librerias/sweetAlert.js" ></script>  
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
