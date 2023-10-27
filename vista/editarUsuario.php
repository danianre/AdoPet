<?php
require_once (__DIR__."/../modelo/DAO/DataSource.php");

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
            header("Location: ListaUsuarios.php");
        }else{
            if(empty($_POST['password'])){
                $sql_update = mysqli_query($conexion, "UPDATE usuario 
                                                       SET nombre = '$nombre', apellido = '$apellido', fecha_nacimiento = '$fecha_nacimiento', idGenero = '$idGenero', correo = '$correo', telefono = '$telefono', direccion = '$direccion', foto = '$foto', administrador = '$administrador'
                                                       WHERE idUsuario = $idUsuario ");
            }else{
                $sql_update = mysqli_query($conexion, "UPDATE usuario 
                                                       SET nombre = '$nombre', apellido = '$apellido', fecha_nacimiento = '$fecha_nacimiento', idGenero = '$idGenero', correo = '$correo', password = '$password', telefono = '$telefono', direccion = '$direccion', foto = '$foto', administrador = '$administrador'
                                                       WHERE idUsuario = $idUsuario ");
            }
            
            if($sql_update){
                header("Location: ListaUsuarios.php");
            }else{
                header("Location: editarUsuario.php");
            }
        }
    }
}

//Mostrar datos
if(empty($_REQUEST['id']))
{
    header('Location: editarUsuario.php');
    //mysqli_close($conexion);
}
$iduser = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT idUsuario, nombre, apellido, fecha_nacimiento, idGenero, correo, password, telefono, direccion, foto, administrador 
                                FROM usuario
                                WHERE idUsuario = $iduser");
//mysqli_close($conexion);
$result_sql = mysqli_num_rows($sql);

if($result_sql == 0){
    header('Location: editarUsuario.php');
}else{
    while($data = mysqli_fetch_array($sql)){
        $iduser = $data['idUsuario']; 
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $fecha_nacimiento = $data['fecha_nacimiento'];
        $idGenero = $data['idGenero'];
        $correo = $data['correo'];
        $telefono = $data['telefono'];
        $direccion = $data['direccion'];
        $foto = $data['foto'];
        $administrador = $data['administrador'];
    }
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar usuario</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/estilotabata.css">
	<link rel="stylesheet" href="css/style.css">	
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="css/gijgo.css" rel="stylesheet" type="text/css"/>
	<meta name="google-signin-client_id" content="363480282160-60k7tnl57l0ivpu603rqbuv1i8tjrg6c.apps.googleusercontent.com">	
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <div class="text-center">
        <form class="form-signin" method="POST" action="">
        <h1 class="h3 mb-3 font-weight-normal">Editar Usuario</h1>
        <input type="hidden" name="idUsuario" value="<?php echo $iduser; ?>">
        <label for="nombre" class="sr-only">Nombre</label>
        <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre; ?>" autofocus>
        <label for="apellido" class="sr-only">Apellido</label>
        <input name="apellido" type="text" id="nombre" class="form-control" placeholder="Apellido" value="<?php echo $apellido; ?>" autofocus>
        <label for="fecha_nacimiento" class="sr-only">Fecha de Nacimiento</label>
        <div id="asd">
        <input name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento (AAAA-MM-DD)" value="<?php echo $fecha_nacimiento; ?>">
        </div>
        <label for="idGenero" class="sr-only">idGenero</label>
        <input name="idGenero" type="number" id="idGenero" class="form-control" placeholder="Masculino (1), Femenino (2), Otro (3)" value="<?php echo $idGenero; ?>">
        <label for="correo" class="sr-only">Correo</label>
        <input name="correo" type="email" id="correo" class="form-control" placeholder="Correo" value="<?php echo $correo; ?>" autofocus>
        <label for="password" class="sr-only">Contraseña</label>
        <input name="password" type="password" id="password" class="form-control" placeholder="Contraseña">
        <label for="telefono" class="sr-only">Telefono</label>
        <input name="telefono" type="text" id="telefono" class="form-control" placeholder="Telefono" value="<?php echo $telefono; ?>">
        <label for="direccion" class="sr-only">Direccion</label>
        <input name="direccion" type="text" id="direccion" class="form-control" placeholder="Direccion"value="<?php echo $direccion;?>">
        <label for="foto" action="vista/foto.php" method="post" enctype="multipart/form-data">Sube tu foto de perfil</label>
        <input name="foto" type="file" id="foto" class="form-control" placeholder="Foto" value="<?php echo $foto;?>">
        <label for="administrador" class="sr-only">Administrador</label>
        <input name="administrador" type="number" id="administrador" class="form-control" placeholder="Usuario(0), Administrador(1)" value="<?php echo $administrador; ?>">
        
        <div class="checkbox mb-3"></div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Editar usuario">
        </form>
    </div>

    <script src="js/librerias/jquery-3.3.1.min.js"></script>
    <script src="js/librerias/gijgo.min.js" ></script>    
    <script src="js/logica/registrar.js"></script>

    
</body>
