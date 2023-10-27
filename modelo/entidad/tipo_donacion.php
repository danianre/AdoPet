<?php
//Esta clase POJO sirve para guardar los datos de un tipo_donacion
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un tipo_donacion de la tabla Tipo_donacion de la
//base de datos

class tipo_donacion
{
    public $idTipo_donacion;
    public $tipo;

    public function __construct($idTipo_donacion, $tipo){

        $this->idTipo_donacion= $idTipo_donacion;
        $this->tipo = $tipo;
    }
    
   // Métodos GET

   public function getIdTipo_donacion()
    {
        return $this->idTipo_donacion;
    }

    public function gettipo()
    {
        return $this->tipo;
    }

    //Métodos SET

    public function setIdTipo_donacion($idTipo_donacion)
    {
        $this->idTipo_donacion = $idTipo_donacion;
        return $this;
    }

    public function settipo($tipo)
    {
        $this->tipo= $tipo;
        return $this;
    }
}