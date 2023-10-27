<?php
//Con require_once se incluye el archivo RefugioDAO.php
require_once(__DIR__."/../../modelo/DAO/RefugioDAO.php");

function crearRefugio(Refugio $refugio){
    
    $dao=new RefugioDAO();

    $refugio = $dao->crearRefugio($refugio);

    return $refugio;
}

function verRefugios(){
    $dao=new RefugioDAO();

    $refugios = $dao->verRefugios();

    return $refugios;
} 

function eliminarRefugio($idRefugio){
    $dao=new RefugioDAO();
    $dao->eliminarRefugio($idRefugio);
}

function verRefugioPorId($idRefugio){
    $dao=new RefugioDAO();
    $refugio = $dao->verRefugioPorId($idRefugio);
    return $refugio;
}

function editarRefugio($refugio){
    $dao=new RefugioDAO();
    $dao->editarRefugio($refugio);
}
