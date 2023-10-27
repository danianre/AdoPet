<?php
require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/mascota.php");

class MascotaDAO {
    public function registrarMascota(Mascota $mascota){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO mascota VALUES (NULL, :nombre, :edad_estimada, :foto, :idGenero, :idTipo_animal, :idRefugio, :idMascota_adopta)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $mascota->getNombre(),
            ':edad_estimada' => $mascota->getEdad_estimada(),
            ':foto'=>$mascota->getFoto(),
            ':idGenero'=>$mascota->getIdGenero(),
            ':idTipo_animal'=>$mascota->getIdTipo_animal(),
            ':idRefugio'=>$mascota->getIdRefugio(),
            ':idMascota_adopta'=>$mascota->getidMascota_adopta()
            )
        ); 
      return $resultado;
    }

    public function verMascotas(){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM mascota", NULL);

        $mascota=null;
        $mascotas=array();

        foreach($data_table as $indice => $valor){
            $mascota = new Mascota(
                    $data_table[$indice]["idMascota"],
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["edad_estimada"],
                    $data_table[$indice]["foto"],
                    $data_table[$indice]["idGenero"],
                    $data_table[$indice]["idTipo_animal"],
                    $data_table[$indice]["idRefugio"],
                    $data_table[$indice]["idUsuario_adopta"]
                    );
            array_push($mascotas,$mascota);
        } 
    return $mascotas;
    }

    public function eliminarMascota($idMascota){
        $data_source = new DataSource();
        
        $stmt1 = "DELETE FROM mascota WHERE idMascota = :idMascota"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idMascota' => $idMascota
            )
        ); 

      return $resultado;
    }

    public function verMascotaPorId($idMascota){
        $data_source = new DataSource();
        echo $idMascota;
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM mascota WHERE idMascota = :idMascota", array(':idMascota'=>$idMascota));

        $mascota=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el mascota en la base de datos
        if(count($data_table)==1){
            $mascota = new Mascota(
                    $data_table[0]["idMascota"],
                    $data_table[0]["nombre"],
                    $data_table[0]["edad_estimada"],
                    $data_table[0]["foto"],
                    $data_table[0]["idGenero"],
                    $data_table[0]["idTipo_animal"],
                    $data_table[0]["idRefugio"],
                    $data_table[0]["idUsuario_adopta"]
                    );
        }
        return $mascota;
    }

    public function editarMascota($mascota){
        $data_source = new DataSource();
        
        $stmt1 = "UPDATE mascota SET nombre = :nombre, edad_estimada = :edad_estimada, foto = :foto, idGenero = :idGenero, idTipo_animal = :idTipo_animal, idRefugio = :idRefugio, idUsuario_adopta = :idUsuario_adopta WHERE idMascota = :idMascota"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idMascota' => $mascota->getIdMascota(),
            ':nombre' => $mascota->getNombre(),
            ':edad_estimada' => $mascota->getEdad_estimadao(),
            ':foto'=>$mascota->getFoto(),
            ':idGenero'=>$mascota->getIdGenero(),
            ':idTipo_animal'=>$mascota->getIdTipo_animal(),
            ':idRefugio'=>$mascota->getIdRefugio(),
            ':idUsuario_adopta'=>$mascota->getIdUsuario_adopta()
            )
        ); 
      return $resultado;
    }

}



