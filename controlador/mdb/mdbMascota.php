<?php
//Con require_once se incluye el archivo MascotaDAO.php
require_once(__DIR__."/../../modelo/DAO/MascotaDAO.php");

function crearMascota(Mascota $mascota){
    
    $dao=new MascotaDAO();

    $mascota = $dao->crearMascota($mascota);

    return $mascota;
}

function verMascotas(){
    $dao=new MascotaDAO();

    $mascotas = $dao->verMascotas();

    return $mascotas;
} 

function eliminarMascota($idMascota){
    $dao=new MascotaDAO();
    $dao->eliminarMascota($idMascota);
}

function verMascotaPorId($idMascota){
    $dao=new MascotaDAO();
    $mascota = $dao->verMascotaPorId($idMascota);
    return $mascota;
}

function editarMascota($mascota){
    $dao=new MascotaDAO();
    $dao->editarMascota($mascota);
}
