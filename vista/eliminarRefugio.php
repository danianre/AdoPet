<?php 
    require_once (__DIR__.'/../modelo/DAO/DataSource.php');
    if(!empty($_POST)){
        $idRefugio = $_POST['idRefugio'];
        $query_delete = mysqli_query($conexion, "DELETE FROM refugio WHERE idRefugio = $idRefugio");

        if($query_delete){
            header("Location: ListaRefugios.php");
        }else{
            echo "Error al eliminar";
        }
    }

    if(empty($_REQUEST['id'])){
        header("Location: ListaRefugios.php");
    }else{
        $idRefugio = $_REQUEST['id'];

        $query = mysqli_query($conexion, "SELECT nombre, direccion, correo, telefono
                                          FROM Refugio
                                          WHERE idRefugio = $idRefugio");
        $result = mysqli_num_rows($query);

        if($result > 0){
            while($data = mysqli_fetch_array($query)){
                $nombre = $data['nombre'];
                $direccion = $data['direccion'];
                $correo = $data['correo'];
                $telefono = $data['telefono'];
            }
        }else{
            header("Location: ListaRefugios.php");
        }
    }
?>    

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Refugio</title>
    <link rel="stylesheet" href="css/eliminarUsuario.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="data_delete">
        <h2>¿Estás seguro que deseas eliminar el siguiente refugio?</h2>
        <p>Nombre: <span><?php echo $nombre; ?></span></p>
        <p>Direccion:<span><?php echo $direccion; ?></span></p>
        <p>Correo: <span><?php echo $correo; ?></span></p>
        <p>Telefono: <span><?php echo $telefono; ?></span></p>
        
        <form method="post" action="">
            <input type="hidden" name="idRefugio" value="<?php echo $idRefugio;?>">
            <a href="ListaRefugios.php" class="btn_cancel">Cancelar</a>
            <input type="submit" value="Aceptar" class="btn_ok">
        </form>
    </div>
    
</body>
</html>