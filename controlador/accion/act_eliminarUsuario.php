<?php 
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    $idUsuario = $_SESSION['ID_USUARIO'];
    eliminarUsuario($idUsuario);
    session_destroy();
    header("Location: ../../index.php");
?>    