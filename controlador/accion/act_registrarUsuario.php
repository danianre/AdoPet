<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/usuario.php");

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $idGenero = $_POST['idGenero'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $foto = $_POST['foto'];
        $administrador = $_POST['administrador'];
 
        if(isset($_POST['administrador'])) {
            $usuario = new Usuario(NULL, $nombre, $apellido, $fecha_nacimiento, $idGenero, $correo, $password, $telefono, $direccion, $foto, $administrador);
            $registro = registrarUsuario($usuario);
            header("Location: ../../vista/ListaUsuarios.php");
        }else{
            $usuario = new Usuario(NULL, $nombre, $apellido, $fecha_nacimiento, $idGenero, $correo, $password, $telefono, $direccion, $foto, 0);
            $registro = registrarUsuario($usuario);
            if($registro)
                header("Location: ../../index.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../index.php?msg=No se pudo realizar el registro");
        }
            


        
        

