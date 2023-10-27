<?php 
    require_once (__DIR__.'/../mdb/mdbRefugio.php');
    $idRefugio = $_POST['idRefugio'];
    eliminarRefugio($idRefugio);
    header("Location: ../../vista/administradorRefugios.php");
?>    