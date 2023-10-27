<?php
//Esta clase POJO sirve para guardar los datos de una Mascota
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de una mascota de la tabla Mascota de la
//base de datos

class mascota
{
    public $idMascota;
    public $nombre;
    public $edad_estimada;
    public $foto;
    public $idGenero;
    public $idTipo_animal;
    public $idRefugio;
    public $idUsuario_adopta;


    public function __construct($idMascota, $nombre, $edad_estimada, $foto, $idGenero, $idTipo_animal, $idRefugio, $idUsuario_adopta){

        $this->idMascota = $idMascota;
        $this->nombre = $nombre;
        $this->edad_estimada = $edad_estimada;
        $this->foto = $foto;
        $this->idGenero = $idGenero;
		$this->idTipo_animal = $idTipo_animal;
		$this->idRefugio= $idRefugio;
        $this->idUsuario_adopta = $idUsuario_adopta;
    }
    
   // Métodos GET
    public function getIdMascota(){
        return $this->idMascota;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEdad_estimada()
    {
        return $this->edad_estimada;
    }
    
    public function getFoto()
    {
        return $this->foto;
    }
    
    public function getIdGenero()
    {
        return $this->idGenero;
    }

     public function getIdTipo_animal()
    {
        return $this->idTipo_animal;
    }

    public function getIdRefugio()
    {
        return $this->idRefugio;
    }

    public function getIdUsuario_adopta(){
        return $this->idUsuario_adopta;
    }

    //Métodos SET

    public function setIdMascota($idMascota)
    {
        $this->idMascota = $idMascota;
        return $this;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setEdad_estimada($edad_estimada)
    {
        $this->edad_estimada = $edad_estimada;
        return $this;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
        return $this;
    }

    public function setIdGenero($idGenero)
    {
        $this->idGenero = $idGenero;
        return $this;
    }

    public function setIdTipo_animal($idTipo_animal)
    {
        $this->idTipo_animal = $idTipo_animal;
        return $this;
    }

    public function setIdRefugio($idRefugio)
    {
        $this->idRefugio = $idRefugio;
        return $this;
    }

    public function setIdUsuario_adopta($idUsuario_adopta)
    {
        $this->idUsuario_adopta = $idUsuario_adopta;
        return $this;
    }
}