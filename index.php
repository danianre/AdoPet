<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopet Santa Marta</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
	<link rel="stylesheet" href="vista/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="vista/css/bootstrap-reboot.min.css">
    <link href="vista/css/gijgo.css" rel="stylesheet" type="text/css"/>
	<meta name="google-signin-client_id" content="363480282160-60k7tnl57l0ivpu603rqbuv1i8tjrg6c.apps.googleusercontent.com">	
    <link rel="stylesheet" href="vista/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-image: url('vista/imagenes/fondo_inicio.jpg'); /* Ruta a tu imagen de fondo */
            background-size: 100% auto; /* Ajusta la imagen para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            background-color: #554b3f;
        }
    </style>
    
</head>
<body>
    <header class="transparent-header">
        <div class="container__menu">
            <div class="logo">
                <img src="vista/imagenes/logo.png" alt="">
                <h1 id="titulo">AdoPet</h1>
            </div>
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="vista/imagenes/logo.png" alt="logo">
                    <ul>
                        <li><a href="#"></a><div class="  unirse">
                            <a href="" class="cta">Unirse</a>
                            <div class="modal-unirse" style="backdrop-filter: blur(10px);">
                                <div class="modal modal-close">
                                    <p class="close">X</p>
                                    <div class="text-center">
                                        <form class="form-signin unirse" method="post" action="controlador/accion/act_registrarUsuario.php">
                                            <h1 class="h3 mb-3 font-weight-normal">Registro</h1>
                                            <label for="nombre" class="sr-only">Nombre</label>
                                            <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" autofocus>
                                            <label for="apellido" class="sr-only">Apellido</label>
                                            <input name="apellido" type="text" id="nombre" class="form-control" placeholder="Apellido" autofocus>
                                            <label for="fecha_nac" class="sr-only">Fecha de Nacimiento</label>
                                            <div id="asd">
                                                <input name="fecha_nac" id="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento (AAAA-MM-DD)" >
                                            </div>
                                            <label for="cedula" class="sr-only">Cedula</label>
                                            <input name="cedula" type="number" id="cedula" class="form-control" placeholder="Cedula" autofocus>

                                            <label for="telefono" class="sr-only">Telefono</label>
                                            <input name="telefono" type="text" id="telefono" class="form-control" placeholder="Telefono" >

                                            <label for="direccion" class="sr-only">Direccion</label>
                                            <input name="direccion" type="text" id="direccion" class="form-control" placeholder="Direccion" >
                                            
                                            <label for="genero" class="sr-only">Genero</label>
                                            <select name="genero" id="genero" class="form-control">
                                                <option value="1">Hombre</option>
                                                <option value="0">Mujer</option>
                                            </select>
                                            <label for="correo" class="sr-only">Correo</label>
                                            <input name="correo" type="email" id="correo" class="form-control" placeholder="Correo" autofocus>
                                            <label for="password" class="sr-only">Contraseña</label>
                                            <input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" >
                                            
                                            <div class="checkbox mb-3"></div>
                                            <button class="btn btn-lg btn-block custom-button" type="submit">
                                                <h8>Registrar</h8>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    

    <div id="container__cover">
        <div class="cover">
            <div class="text">
                <h1>Nosotros</h1>
                <p>Somos la mejor red de refugios de animales domesticos en Santa Marta!</p>
                <input type="button" value="Leer Más">
                <input type="button" value="Leer Menos">
            </div>
        </div>
        <div>
            <form class="form-signin" method="post" action="controlador/accion/act_login.php"> 
                <h1 class="h3 mb-3 font-weight-normal">¡Bienvenido!</h1>
                <label for="user" class="sr-only">Usuario</label>
                <input name="correo" type="text" id="user" class="form-control" placeholder="Correo" autofocus>
                <label for="password" class="sr-only">Contraseña</label>
                <input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" >
                <div class="checkbox mb-3">
                </div>
                <button class="btn btn-lg btn-block custom-button" type="submit">
                    <h8>Iniciar Sesión</h8>
                </button>
                <br>
                <div><a href="vista/olvidoContrasena.php">¿Olvidó su contraseña?</a></div>
            </form>
        </div>
    </div>    

    <div id="circles">
        <div class="circle">
            <img src="vista/imagenes/adoptar.png" alt="adoptar" class="circle-image"> 
            <p class="circle-text">Adoptar</p>
        </div>
        <div class="circle">
            <img src="vista/imagenes/donar.jpg" alt="donar" class="circle-image">
            <p class="circle-text">Donar</p>
        </div>
        <div class="circle">
            <img src="vista/imagenes/reportar.jpg" alt="reportar" class="circle-image">
            <p class="circle-text">Reportar</p>
        </div>
        <div class="circle">
            <img src="vista/imagenes/ceder.png" alt="ceder" class="circle-image">
            <p class="circle-text">Ceder</p>
        </div>
    </div>

    <script src="vista/js/librerias/jquery-3.3.1.min.js"></script>
    <script src="vista/js/librerias/bootstrap.min.js" ></script>
    <script src="vista/js/librerias/bootstrap.bundle.min.js"></script>
    <script src="vista/js/librerias/sweetalert.min.js"></script>
    <script src="vista/js/librerias/sweetalert2.js"></script>
    <script src="vista/js/librerias/sweetAlert.js"></script>
    <script src="vista/js/librerias/gijgo.min.js" ></script>
    <script src="vista/js/logica/registrar.js"></script>
    <script src="vista/js/logica/script.js"></script>                           
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="vista/js/logica/login.js"></script>
    <script src="vista/js/logica/usuarios.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>