<?php
session_start();

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/gijgo.css" rel="stylesheet" type="text/css" />
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
    <link rel="stylesheet" href="css/adoptar.css">
    <link rel="stylesheet" href="css/select2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-lZl5V5z7aCVvpr7YlG2+BPpLbfL/MbZlAWEFwFf5M2cPKp+AIW5ocF92La6Dh4Jq" crossorigin="anonymous">

</head>

<body
    style="background-image: url('imagenes/fondo-home.jpg'); background-size: cover; background-position: center; position:relative; overflow: hidden;">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #8F796C;" class="slider"
            id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color:#584B42;"
                href="principalUser.php">
                <div>
                    <img src="imagenes/logo.png" alt="logo" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">ADOPET SM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- Nav Item - Dashboard -->
            <li class="nav-item" class="prueba">
                <a class="nav-link" href="principalUser.php" style="border-radius:30px; "
                    onmouseover="this.style.backgroundColor='#CFC6BF'"
                    onmouseout="this.style.backgroundColor='transparent'">
                    <i style="font-size: 28px;color:black;" class="fas fa-home"></i>
                    <span
                        style="font-size: 23px; color:black;
                  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" style="border-radius:30px; "
                    href="perfilUsuario.php?id=<?php echo $_SESSION["ID_USUARIO"]; ?>"
                    onmouseover="this.style.backgroundColor='#CFC6BF'"
                    onmouseout="this.style.backgroundColor='transparent'">
                    <i style="font-size: 28px;color:black;" class="fas fa-user"></i>
                    <span
                        style="font-size: 23px;color:black;
                  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Perfil</span></a>
            </li>
            <!-- Nav Item - Adoptar -->
            <li class="nav-item">
                <a class="nav-link" style="border-radius:30px; "
                    href="adoptar.php?id=<?php echo $_SESSION['ID_USUARIO']; ?>"
                    onmouseover="this.style.backgroundColor='#CFC6BF'"
                    onmouseout="this.style.backgroundColor='transparent'">
                    <i style="font-size: 28px;color:black;" class="fas fa-heart"></i>
                    <span
                        style="font-size: 23px;color:black;
                  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Adoptar</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" style="border-radius:30px; "
                    href="CrearMascota.php?id=<?php echo $_SESSION['ID_USUARIO']; ?>"
                    onmouseover="this.style.backgroundColor='#CFC6BF'"
                    onmouseout="this.style.backgroundColor='transparent'">
                    <i style="font-size: 28px;color:black;" class="fas fa-heart"></i>
                    <span
                        style="font-size: 23px;color:black;
                  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Crear
                        Mascota</span></a>
            </li>
            <!-- Nav Item - Reportar -->
            <li class="nav-item">
                <a class="nav-link" href="donar.php" style="border-radius:30px; "
                    onmouseover="this.style.backgroundColor='#CFC6BF'"
                    onmouseout="this.style.backgroundColor='transparent'">
                    <i style="font-size: 28px;color:black;" class="fas fa-hand-holding-medical"></i>
                    <span
                        style="font-size: 23px;color:black;
                  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Donar</span></a>
            </li>

            <!-- Nav Item - Reportar -->
            <li class="nav-item">
                <a class="nav-link" href="#" style="border-radius:30px; "
                    onmouseover="this.style.backgroundColor='#CFC6BF'"
                    onmouseout="this.style.backgroundColor='transparent'">
                    <i style="font-size: 28px;color:black;" class="fas fa-flag"></i>
                    <span
                        style="font-size: 23px;color:black;
                  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Reportar</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal" style="border-radius:30px; "
                    onmouseover="this.style.backgroundColor='#CFC6BF'"
                    onmouseout="this.style.backgroundColor='transparent'">
                    <i style="font-size: 28px;color:black;" class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
                    <span
                        style="font-size: 22px ;color:black; 
                  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Cerrar
                        Sesión</span></a>
                </a>
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



        <!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ---------->
        <!-- ----------><!-- ---------->
        <!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ----------><!-- ---------->
        <div class="modal fade" id="crearproducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="top:100px;position:relative;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Agregar Mascota</h3>
                            <button data-dismiss="modal" aria-label="close" class="close">
                                <span aria-hidden="true"> &times;</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-succes text center" id="add" style="display:none">
                                <span><i class="fas fa-check m1"></i>Se agrego correctamente</span>
                            </div>
                            <div class="alert alert-danger text center" id="noadd" style="display:none">
                                <span><i class="fas fa-times m1"></i>La mascota ya existe</span>
                            </div>
                            <form id="form-crear-producto">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input id="nombre" type="text" class="form-control" placeholder="Ingrese Nombre"
                                        required>
                                </div>
                        
                                <div class="form-group">
                                    <label for="tipo">Tipo de Mascota</label>
                                    <select name="tipo" id="tipo" class="form-control select2" style="width:100%;">
                                        <option value="1">Gato</option>
                                        <option value="0">Perro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="genero_m">Genero</label>
                                    <select name="genero_m" id="genero_m" class="form-control select2" style="width:100%;">
                                        <option value="1">Macho</option>
                                        <option value="0">Hembra</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="idRefugio">Refugio</label>
                                    <select name="idRefugio" id="idRefugio" class="form-control select2" style="width:100%;"></select>
                                </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn bg-gradient-primary float-rigth m1" >Guardar</button>
                            <button type="button" data-dismiss="modal"
                                class="btn btn-outline-secondary float-rigth m1">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-------------------------->
    <div class="content-wrapper" style="position: relative;bottom: 900px;width: 70%;left: 250px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Agregar Mascota <button id="button-crear" type="button" data-toggle="modal"
                                data-target="#crearproducto" class="btn bg-gradient-primary ml-2">Agregar
                                Mascota</button></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="adm_catalogo.php">Home</a></li>
                            <li class="breadcrumb-item active">Gestion Mascota</li>
                        </ol>
                    </div>
                    
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Buscar Mascota</h3>
                        <div class="input-group">
                            <input type="text" id="buscar-producto" class="form-control float-left"
                                placeholder="Ingrese nombre de la Mascota">
                            <div class="input-group-appen">
                                <button class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="productos" class="row d-flex align-items-search">

                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </section>
    </div>

    </div>



    <!-------------------------->
    
   
    <script src="js/librerias/jquery-3.3.1.min.js"></script>
<script src="js/logica/select2.js"></script>
<script src="js/logica/mascota.js"></script>


    <script src="js/librerias/gijgo.min.js"></script>
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

    <script src="js/logica/administradorUsuarios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>