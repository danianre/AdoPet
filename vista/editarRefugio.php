<?php
require_once (__DIR__."/../modelo/DAO/DataSource.php");

if(!empty($_POST)){
    $alert= '';
    if(!empty($_POST['nombre']) || !empty($_POST['direccion']) || !empty($_POST['correo']) || !empty($_POST['telefono']) || !empty($_POST['foto'])){
        $idRefugio = $_POST['idRefugio'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $foto = $_POST['foto'];
        

        $query = mysqli_query($conexion, "SELECT * FROM refugio WHERE (correo = '$correo' AND idRefugio != $idRefugio) OR (telefono = '$telefono' AND idRefugio != $idRefugio)");
        $result = mysqli_fetch_array($query);
        
        if($result > 0){
            header("Location: ListaRefugios.php");
        }else{
            $sql_update = mysqli_query($conexion, "UPDATE refugio 
                                                    SET nombre = '$nombre', direccion = '$direccion', correo = '$correo', telefono = '$telefono', foto = '$foto'
                                                    WHERE idRefugio = $idRefugio");
        }
        if($sql_update){
            header("Location: ListaRefugios.php");
        }else{
            header("Location: editarRefugio.php?id=$idRefugio");
        }
    }
    
    
}

//Mostrar datos
if(empty($_REQUEST['id']))
{
    header("Location: editarRefugio.php?id=$idRefugio");
    //mysqli_close($conexion);
}
$idrefug = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT idRefugio, direccion, nombre, correo, telefono, foto
                                FROM refugio
                                WHERE idRefugio = $idrefug");
//mysqli_close($conexion);
$result_sql = mysqli_num_rows($sql);

if($result_sql == 0){
    header('Location: editarRefugio.php');
}else{
    while($data = mysqli_fetch_array($sql)){
        $idrefug = $data['idRefugio']; 
        $nombre = $data['nombre'];
        $direccion = $data['direccion'];
        $correo = $data['correo'];
        $telefono = $data['telefono'];
        $foto = $data['foto'];
    }
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Refugio</title>
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
        <h1 class="h3 mb-3 font-weight-normal">Editar Refugio</h1>
        <input type="hidden" name="idRefugio" value="<?php echo $idrefug; ?>">
        <label for="nombre" class="sr-only">Nombre</label>
        <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre; ?>" autofocus>
        <label for="direccion" class="sr-only">Direccion</label>
        <input name="direccion" type="text" id="direccion" class="form-control" placeholder="Direccion"value="<?php echo $direccion;?>">
        <label for="correo" class="sr-only">Correo</label>
        <input name="correo" type="email" id="correo" class="form-control" placeholder="Correo" value="<?php echo $correo; ?>" autofocus>
        <label for="telefono" class="sr-only">Telefono</label>
        <input name="telefono" type="text" id="telefono" class="form-control" placeholder="Telefono" value="<?php echo $telefono; ?>">
        <label for="foto" action="vista/foto.php" method="post" enctype="multipart/form-data">Foto del refugio</label>
        <input name="foto" type="file" id="foto" class="form-control" placeholder="Foto" value="<?php echo $foto;?>">

        <div class="checkbox mb-3"></div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Editar Refugio">
        </form>
    </div>

    <script src="js/librerias/jquery-3.3.1.min.js"></script>
    <script src="js/librerias/gijgo.min.js" ></script>    
    <script src="js/logica/registrar.js"></script>
</body>
