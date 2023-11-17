<?php
//Esta clase POJO sirve para guardar los datos de un tipo_animal
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un tipo_animal de la tabla Tipo_animal de la
//base de datos

class tipo_reporte
{
    public $idTipo_reporte;
    public $nombre_reporte

    public function __construct($idTipo_reporte, $nombre_reporte){

        $this->idTipo_reporte= $idTipo_reporte;
        $this->nombre_reporte = $nombre_reporte;
    }
    
   // Métodos GET

   public function getIdTipo_reporte()
    {
        return $this->idTipo_reporte;
    }

    public function getNombre_reporte()
    {
        return $this->nombre_reporte;
    }

    //Métodos SET

    public function setIdTipo_reporte($idTipo_reporte)
    {
        $this->idTipo_reporte = $idTipo_reporte;
        return $this;
    }

    public function setNombre_reporte($nombre_reporte)
    {
        $this->nombre_reporte= $nombre_reporte;
        return $this;
    }
}