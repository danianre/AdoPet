<?php
//Esta clase POJO sirve para guardar los datos de un reporte
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un reporte de la tabla Reporte de la
//base de datos

class reporte_calle
{
    public $idReporte;
    public $reporte_mascota;
    public $fecha_reporte;
    public $foto;
    public $estado;
    public $idUsuario;

    public function __construct($idReporte, $reporte_mascota, $fecha_reporte, $foto, $estado, $idUsuario){

        $this->idReporte= $idReporte;
        $this->reporte_mascota = $reporte_mascota;
        $this->fecha_reporte = $fecha_reporte;
        $this->foto = $foto;
        $this->estado = $estado;
        $this->idUsuario = $idUsuario; 
    }
    
   // Métodos GET

   public function getIdReporte()
    {
        return $this->idReporte;
    }

    public function getReporte_mascota(){
        return $this->reporte_mascota;
    }

    public function getFecha_reporte()
    {
        return $this->fecha_reporte;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getestado()
    {
        return $this->estado;
    }
    
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    //Métodos SET

    public function setIdReporte($idReporte)
    {
        $this->idReporte = $idReporteo;
        return $this;
    }

    public function setReporte_mascota($reporte_mascota)
    {
        $this->reporte_mascota = $reporte_mascota;
        return $this;
    }

    public function setFecha_reporte($fecha_reporte)
    {
        $this->fecha_reporte = $fecha_reporte;
        return $this;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
        return $this;
    }

    public function setestado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }
}