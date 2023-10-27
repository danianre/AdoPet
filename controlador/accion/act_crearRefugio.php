<?php
    session_start();
    
    require_once (__DIR__."/../mdb/mdbRefugio.php");
    require_once (__DIR__."/../../modelo/entidad/refugio.php");

        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];     
        $foto = $_POST['foto'];
 
        $refugio = new Refugio(NULL, $nombre, $direccion, $correo, $telefono, $foto);
        $registro = crearRefugio($refugio);
        if($registro)
            header("Location: ../../vista/ListaRefugios.php?msg=Se realizo el registro satisfactoriamente");
        else
            header("Location: ../../vista/ListaRefugios.php?msg=No se pudo realizar el registro");
        