<?php
require_once (__DIR__."/../modelo/DAO/DataSource.php");
session_start();
if(!empty($_POST)){
    $alert= '';
    if(!empty($_POST['nombre']) || !empty($_POST['apellido']) || !empty($_POST['fecha_nacimiento']) || !empty($_POST['idGenero']) || !empty($_POST['correo']) || !empty($_POST['telefono']) || !empty($_POST['direccion']) || !empty($_POST['foto']) || !empty($_POST['administrador'])){
        $idUsuario = $_POST['idUsuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $idGenero = $_POST['idGenero'];
        $correo = $_POST['correo'];
        $password = md5($_POST['password']);
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $foto = $_POST['foto'];
        $administrador= $_POST['administrador'];

        $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE (correo = '$correo' AND idUsuario != $idUsuario) OR (telefono = '$telefono' AND idUsuario != $idUsuario)");
        $result = mysqli_fetch_array($query);
        
        if($result > 0){
            header("Location: perfilUsuario.php?id=$idUsuario");
        }else{
            if(empty($_POST['password'])){
                $sql_update = mysqli_query($conexion, "UPDATE usuario 
                                                       SET nombre = '$nombre', apellido = '$apellido', fecha_nacimiento = '$fecha_nacimiento', correo = '$correo', telefono = '$telefono', direccion = '$direccion', foto = '$foto'
                                                       WHERE idUsuario = $idUsuario ");
            }else{
                $sql_update = mysqli_query($conexion, "UPDATE usuario 
                                                       SET nombre = '$nombre', apellido = '$apellido', fecha_nacimiento = '$fecha_nacimiento', correo = '$correo', password = '$password', telefono = '$telefono', direccion = '$direccion', foto = '$foto'
                                                       WHERE idUsuario = $idUsuario ");
            }
            
            if($sql_update){
                header("Location: perfilUsuario.php?id=$idUsuario");
            }else{
                header("Location: perfilUsuario.php?id=$idUsuario");
            }
        }
    }
}

//Mostrar datos
if(empty($_REQUEST['id']))
{
    header("Location: perfilUsuario.php?id=$idUsuario");
    //mysqli_close($conexion);
}
$iduser = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT idUsuario, nombre, apellido, fecha_nacimiento, correo, password, telefono, direccion, foto
                                FROM usuario
                                WHERE idUsuario = $iduser");
//mysqli_close($conexion);
$result_sql = mysqli_num_rows($sql);

if($result_sql == 0){
    header("Location: perfilUsuario.php?id=$idUsuario");
}else{
    while($data = mysqli_fetch_array($sql)){
        $iduser = $data['idUsuario']; 
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $fecha_nacimiento = $data['fecha_nacimiento'];
        $correo = $data['correo'];
        $telefono = $data['telefono'];
        $direccion = $data['direccion'];
        $foto = $data['foto'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
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

    <form action="" method="post">
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <?php if (isset($_SESSION['ID_USUARIO'])) {
                    echo "<img class='fotoUsuario' src='./fotoUsuario/".$_SESSION['FOTO_USUARIO']."' alt='foto' width='200px'>";
                    }
                ?>
                <label for="foto" action="vista/foto.php" method="post" enctype="multipart/form-data"></label><br>
                <input name="foto" type="file" id="foto" class="form-control" placeholder="Foto" value="">
                </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Perfil</h4>
                </div>
                <div class="row mt-2">
                    <input type="hidden" name="idUsuario" value="<?php echo $iduser; ?>">   
                    <div class="col-md-6"><label for="nombre" class="labels">Nombre</label>
                    <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre;?>"></div>
                    <div class="col-md-6"><label class="labels">Apellido</label>
                    <input name="apellido" type="text" id="apellido" class="form-control" placeholder="Apellido" value="<?php echo $apellido;?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Telefono</label>
                    <input name="telefono" type="text" id="telefono" class="form-control" placeholder="Telefono" value="<?php echo $telefono;?>"></div>
                    <div class="col-md-12"><label class="labels">Correo</label>
                    <input name="correo" type="email" id="correo" class="form-control" placeholder="Correo" value="<?php echo $correo;?>"></div>
                    <div class="col-md-12"><label class="labels">Contraseña</label>
                    <input name="password" type="text" id="password" class="form-control" placeholder="Contraseña" value=""></div>
                    <div class><label for="fecha_nacimiento" class="labels">Fecha de Nacimiento</label></div>
                    <div id="asd">
                    <input name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento (AAAA-MM-DD)" value="<?php echo $fecha_nacimiento;?>">
                    </div>
                    <div class="col-md-12"><label class="labels">Dirección</label>
                    <input name="direccion" type="text" id="direccion" class="form-control" placeholder="Dirección" value="<?php echo $direccion;?>"></div>
                    
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Guardar Perfil</button></div>
            </div>
            </form>
            <form class="form-eliminar" method="post" action="../controlador/accion/act_eliminarUsuario.php">
            <div class="mt-5 text-center"><button class="btn btn-primary profile-button " type="submit">Eliminar Cuenta</button></div>
        </div>
    </div>
</div>
</div>
</div>
    </form>
    
    <script src="js/librerias/jquery-3.3.1.min.js"></script>
    <script src="js/librerias/gijgo.min.js" ></script>    
    <script src="js/logica/registrar.js"></script>
    <script src="js/librerias/sweetAlert.js"></script>
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
