<?php
// obtener_informacion_refugio.php

session_start();
require 'config/config.php';
require 'config/database.php';

$db = new Database();
$con = $db->conectar();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idRefugio = $_POST['idRefugio'];

    // Consulta SQL para obtener la información específica del refugio
    $sql = $con->prepare("SELECT nombre, direccion, correo, telefono,foto,comentarios,capacidad FROM refugio WHERE idRefugio = :idRefugio AND activo = 1");
    $sql->bindParam(':idRefugio', $idRefugio, PDO::PARAM_INT);
    $sql->execute();
    $refugioInfo = $sql->fetch(PDO::FETCH_ASSOC);

    // Mostrar la información del refugio
    ?>
    <div class="caja-refugio" style="left:35%; height: 800px;width: 700px; box-shadow: 0px 0px 50px 1px rgb(106, 106, 106);
">
        <div class="nombre-refugio" style="width: 800px;">
            <span style="right:10%;width: 50px;color:white;font-size: 40px;top:-1px;" class="cerrar-modal" onclick="cerrarModal()">&times;</span>
            <h2>
                <?php echo $refugioInfo['nombre']; ?>
            </h2>
        </div>
        <?php
            $foto = $refugioInfo['foto'];
            $imagen = "imagenes/refugios/{$foto}";
            if (!file_exists($imagen)) {
                $imagen = "imagenes/nofoto.jpg";
            }
        ?>
    <img class="imagen-refugio" style="width: 500px;height: 450px;" src="<?php echo $imagen; ?>" alt="Imagen del refugio" data-id="<?php echo $idRefugio; ?>" onclick="abrirModal(event)">
    <div class="informacion-refugio">
            <!-- Aquí coloca la información del refugio -->
            Comentario:
            <?php echo $refugioInfo['comentarios']; ?><br>
            Capacidad:
            <?php echo $refugioInfo['capacidad']; ?><br>
            Dirección:
            <?php echo $refugioInfo['direccion']; ?><br>
            Teléfono:
            <?php echo $refugioInfo['telefono']; ?><br>
            Correo electrónico:
            <?php echo $refugioInfo['correo']; ?><br>
        </div>
        <form id="formularioDonacion">
            <!-- Campos del formulario -->
            <!-- ... -->
            <input type="submit" value="Enviar Solicitud">
        </form>
    </div>
    <?php
}
?>