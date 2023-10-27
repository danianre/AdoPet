<?php 
    require_once (__DIR__.'/../modelo/DAO/DataSource.php');
    if(!empty($_POST)){
        $idUsuario = $_POST['idUsuario'];
        $query_delete = mysqli_query($conexion, "DELETE FROM usuario WHERE idUsuario = $idUsuario");

        if($query_delete){
            header("Location: ListaUsuarios.php");
        }else{
            echo "Error al eliminar";
        }
    }

    if(empty($_REQUEST['id'])){
        header("Location: ListaUsuarios.php");
    }else{
        $idUsuario = $_REQUEST['id'];

        $query = mysqli_query($conexion, "SELECT nombre, apellido, fecha_nacimiento, idGenero, correo, password, telefono, direccion, foto, administrador
                                          FROM usuario
                                          WHERE idUsuario = $idUsuario");
        $result = mysqli_num_rows($query);

        if($result > 0){
            while($data = mysqli_fetch_array($query)){
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
        }else{
            header("Location: ListaUsuarios.php");
        }
    }
?>    

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar usuario</title>
    <link rel="stylesheet" href="css/eliminarUsuario.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="data_delete">
        <h2>¿Estás seguro que deseas eliminar el siguiente registro?</h2>
        <p>Nombre: <span><?php echo $nombre; ?></span></p>
        <p>Apellido: <span><?php echo $apellido; ?></span></p>
        <p>Fecha de nacimiento: <span><?php echo $fecha_nacimiento; ?></span></p>
        <p>idGenero: <span><?php echo $idGenero; ?></span></p>
        <p>Correo: <span><?php echo $correo; ?></span></p>
        <p>Telefono: <span><?php echo $telefono; ?></span></p>
        <p>Direccion:<span><?php echo $direccion; ?></span></p>
        <p>Foto:<span><?php echo $foto; ?></span></p>
        <p>Administrador: <span><?php echo $administrador; ?></span></p>
        
        <form method="post" action="">
            <input type="hidden" name="idUsuario" value="<?php echo $idUsuario;?>">
            <a href="ListaUsuarios.php" class="btn_cancel">Cancelar</a>
            <input type="submit" value="Aceptar" class="btn_ok">
        </form>
    </div>
    
</body>
</html>