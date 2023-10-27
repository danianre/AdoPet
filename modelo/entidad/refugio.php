<?php
//Esta clase POJO sirve para guardar los datos de un refugio
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un refugio de la tabla Refugio de la
//base de datos

class refugio
{
    public $idRefugio;
    public $nombre;
    public $direccion;
    public $correo;
    public $telefono;
    public $foto;
    public $capacidad;
    public $comentarios;

    public function __construct($idRefugio, $nombre, $direccion, $correo, $telefono, $foto, $capacidad, $comentarios){

        $this->idRefugio= $idRefugio;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->foto = $foto;
        $this->capacidad = $capacidad;
        $this->comentarios = $comentarios;
    }
    
   // Métodos GET

   public function getIdRefugio()
    {
        return $this->idRefugio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
    
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getCapacidad()
    {
        return $this->capacidad;
    }

    public function getComentarios()
    {
        return $this->comentarios;
    }

    //Métodos SET

    public function setIdRefugio($idRefugio)
    {
        $this->idRefugio = $idRefugio;
        return $this;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
        return $this;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }

    public function setFoto($foto)
    {
        $this->foto= $foto;
        return $this;
    }

    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
        return $this;
    }

    public function setComentarios($comentarios)
    {
        $this->comentarios= $comentarios;
        return $this;
    }
}