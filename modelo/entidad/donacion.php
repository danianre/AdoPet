<?php
//Esta clase POJO sirve para guardar los datos de un donacion
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un donacion de la tabla Donacion de la
//base de datos

class donacion
{
    public $idDonacion;
    public $cantidad;
    public $fecha_donacion;
    public $mensaje;
    public $finalidad_uso;
    public $idUsuario;
    public $idRefugio;
    public $idTipo_donacion;

    public function __construct($idDonacion, $cantidad, $fecha_donacion, $mensaje, $finalidad_uso, $idUsuario, $idRefugio, $idTipo_donacion){

        $this->idDonacion = $idDonacion;
        $this->cantidad = $cantidad;
        $this->fecha_donacion = $fecha_donacion;
        $this->mensaje = $mensaje;
        $this->finalidad_uso = $finalidad_uso;
        $this->idUsuario = $idUsuario;
        $this->idRefugio = $idRefugio;
        $this->idTipo_donacion = $idTipo_donacion;
    }
    
   // Métodos GET

    public function getIdDonacion()
    {
        return $this->idDonacion;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function getFecha_donacion()
    {
        return $this->fecha_donacion;
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function getFinalidad_uso()
    {
        return $this->finalidad_uso;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getIdRefugio()
    {
        return $this->idRefugio;
    }

    public function getIdTipo_donacion()
    {
        return $this->idTipo_donacion;
    }
    

    //Métodos SET

    public function setIdDonacion($idDonacion)
    {
        $this->idDonacion = $idDonacion;
        return $this;
    }

    public function setcantidad($cantidad)
    {
        $this->cantidad = $cantidad;
        return $this;
    }

    public function setFecha_donacion($fecha_donacion)
    {
        $this->fecha_donacion = $fecha_donacion;
        return $this;
    }

    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
        return $this;
    }

    public function setFinalidad_uso($finalidad_uso)
    {
        $this->finalidad_uso = $finalidad_uso;
        return $this;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setIdRefugio($idRefugio)
    {
        $this->idRefugio = $idRefugio;
        return $this;
    }

    public function setIdTipo_donacion($idTipo_donacion)
    {
        $this->idTipo_donacion = $idTipo_donacion;
        return $this;
    }
}