<?php
//Esta clase POJO sirve para guardar los datos de un genero
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un genero de la tabla Genero de la
//base de datos

class genero
{
    public $idGenero;
    public $tipo_genero;

    public function __construct($idGenero, $tipo_genero){

        $this->idGenero= $idGenero;
        $this->tipo_genero = $tipo_genero;
    }
    
   // Métodos GET

   public function getIdGenero()
    {
        return $this->idGenero;
    }

    public function getTipo_genero()
    {
        return $this->tipo_genero;
    }

    //Métodos SET

    public function setIdGenero($idGenero)
    {
        $this->idGenero = $idGenero;
        return $this;
    }

    public function setTipo_genero($tipo_genero)
    {
        $this->tipo_genero= $tipo_genero;
        return $this;
    }
}