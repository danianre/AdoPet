<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/usuario.php");

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nac= $_POST['fecha_nac'];
        $genero = $_POST['genero'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
 
        if(isset($_POST['administrador'])) {
            $usuario = new Usuario(NULL, $nombre, $apellido, $fecha_nac, $idGenero, $correo, $password, $telefono, $direccion, $foto, $administrador);
            $registro = registrarUsuario($usuario);
            header("Location: ../../vista/ListaUsuarios.php");
        }else{
            $usuario = new Usuario(NULL, $nombre, $apellido, $fecha_nac,$telefono,$direccion,$genero,$correo, $password, 0);
            $registro = registrarUsuario($usuario);
            if($registro)
                header("Location: ../../index.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../index.php?msg=No se pudo realizar el registro");
        }
            


        
        

